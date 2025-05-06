<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * $data contiene ['name','email','message']
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this
            ->subject('Gracias por contactarnos')
            ->markdown('emails.contact_confirmation')
            ->with('data', $this->data);
    }
}
