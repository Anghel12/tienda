<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $new_user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( User $new_user)
    {
        $this->new_user = $new_user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Bienvenido a nuestra plataforma tienda.test')
        ->markdown('emails.welcome');
    }
}
