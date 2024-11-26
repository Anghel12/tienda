<?php

namespace App\Notifications\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderCreated extends Notification
{
    use Queueable;

    protected $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nueva Orden Creada')
            ->line('Se ha creado una nueva orden.')
            ->action('Ver Orden', url('/user/OrderVoucher/'.$this->order->id))
            ->line('Gracias por usar nuestra aplicación!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'type' => 'User',
            /* 'user_id' => $this->order->user_id, */
            'user_name' => $this->order->user->name, // Agregar el nombre del usuario
            'order_id' => $this->order->id,
            'amount' => $this->order->amount,
            'message' => 'Acaba de ordenar $/.' . $this->order->amount . ' coins. espere a que el admin confirme su compra.',

        ];
    }
}
