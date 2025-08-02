<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // 1. Validación del formulario + campos antispam
        $data = $request->validate([
            'name'                   => 'required|string|max:100',
            'email'                  => 'required|email|max:255',
            'message'                => 'required|string|max:2000',
            'website'                => 'nullable|string|max:50', // honeypot
            'g-recaptcha-response'   => 'required|string',
        ]);

        // 2. Honeypot: Si el campo oculto 'website' viene lleno, es spam
        if (!empty($request->input('website'))) {
            return back()
                ->withErrors(['spam' => 'Detectado intento de spam.'])
                ->withInput();
        }

        // 3. reCAPTCHA v3: Verifica el token en Google
        $response = Http::asForm()->post(
            'https://www.google.com/recaptcha/api/siteverify',
            [
                'secret'   => config('services.recaptcha.secret'),
                'response' => $request->input('g-recaptcha-response'),
                'remoteip' => $request->ip(),
            ]
        );
        $result = $response->json();
        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            return back()
                ->withErrors(['captcha' => 'Verificación reCAPTCHA fallida. Intenta de nuevo.'])
                ->withInput();
        }

        // 4. Envío de correos:

        // 4.1 Notificar al administrador
        Mail::to('info@levelupplus.net')
            ->send(new ContactFormMail($data));

        // 4.2 Confirmación al usuario
        Mail::to($data['email'])
            ->send(new ContactConfirmationMail($data));

        // 5. Respuesta según tipo de petición
        if ($request->wantsJson()) {
            return response()->json([
                'message' => '¡Tu mensaje ha sido enviado correctamente!',
            ]);
        }

        return back()->with('success', '¡Tu mensaje ha sido enviado correctamente!');
    }
}
