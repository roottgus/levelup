<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactConfirmationMail extends Mailable
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
        ->subject('Gracias por escribirnos, ' . $this->data['name'])
        ->view('emails.contact.user-html')
        ->with('data', $this->data);
}

}
