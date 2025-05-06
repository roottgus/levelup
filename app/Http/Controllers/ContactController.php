<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
{
    $data = $request->validate([
        'name'    => 'required|string|max:100',
        'email'   => 'required|email|max:255',
        'message' => 'required|string|max:2000',
    ]);

    // envía al admin
    Mail::to(config('mail.from.address'))->send(new ContactFormMail($data));
    // envía confirmación al usuario
    Mail::to($data['email'])->send(new ContactConfirmationMail($data));

    if ($request->wantsJson()) {
        return response()->json([
            'message' => '¡Tu mensaje ha sido enviado correctamente!',
        ]);
    }

    return back()->with('success', '¡Tu mensaje ha sido enviado correctamente!');
}
}
