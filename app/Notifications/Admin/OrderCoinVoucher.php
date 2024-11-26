<?php

namespace App\Notifications\Admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OrderCoinVoucher extends Notification
{
    use Queueable;

    protected $order;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function via($notifiable)
    {
        return ['database']; // Guardar en la base de datos
    }

    public function toDatabase($notifiable)
    {
        return [
            'type' => 'Admin',
            /* 'user_id' => $this->order->user_id, */
            'user_name' => $this->order->user->name, // Agregar el nombre del usuario
            'amount' => $this->order->amount,
            'message' => 'El usuario ' . $this->order->name . ' compró ' . $this->order->amount . ' coins.',
            'order_id' => $this->order->id,
        ];
    }
}
