<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
{
    return $this
        ->from(config('mail.from.address'), config('mail.from.name'))
        ->replyTo($this->data['email'], $this->data['name'])
        ->subject('📝 Nuevo mensaje de contacto – LevelUp+')
        ->view('emails.contact.admin-html')
        ->with('data', $this->data);
}
}
