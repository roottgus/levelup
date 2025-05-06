@component('mail::message')

# ¡Hola {{ $data['name'] }}!

Gracias por contactarnos. Hemos recibido tu mensaje:

> "{{ $data['message'] }}"

Nuestro equipo te responderá a la brevedad al correo **{{ $data['email'] }}** Nuestro Whatsapp **+58 424-744-7443**.

Mientras tanto, puedes visitar nuestra página web para conocer más de nuestros servicios.

@component('mail::button', ['url' => url('/')])
Volver a PublienRed
@endcomponent

Saludos cordiales,<br>
**Equipo PublienRed**
@endcomponent
