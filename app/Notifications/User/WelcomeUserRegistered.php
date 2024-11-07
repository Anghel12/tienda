<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WelcomeUserRegistered extends Notification
{
    use Queueable;

    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function via($notifiable)
    {
        return ['mail']; // Enviamos la notificación solo por correo
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Bienvenido a nuestra plataforma TerraBank')
            ->greeting('Hola ' . $this->user->name . '!')
            ->line('Gracias por registrarte en nuestra plataforma.')
            ->line('Estamos emocionados de tenerte con nosotros.')
            ->action('Visita tu cuenta', url('user/profile'))
            ->line('¡Nos vemos pronto!');
    }

    public function toArray($notifiable)
    {
        return [
            'message' => 'Bienvenido a nuestra plataforma.',
        ];
    }
}
