<?php

namespace App\Notifications;

use App\Models\Config;
use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReserveNotification extends Notification
{
    use Queueable;

    public $appConfig;
    public $asClient;
    public $reserve;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($reserve, $client = true)
    {
        $this->reserve = $reserve;
        $this->appConfig = Config::first();
        $this->asClient = $client;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from(env('MAIL_FROM_ADDRESS', $this->appConfig->email))
            ->subject('Notificacion de reserva')
            ->greeting('Hola ' . $this->asClient ? $this->reserve->name : '')
            ->line('Le enviamos el informe de una reserva en ' . $this->appConfig['title'] . '.')
            ->line('Para la fecha: ' . $this->reserve->date)
            ->line('A nombre de ' . $this->reserve->name)
            ->line('Motivo: ' . $this->reserve->occation)
            ->line('Mensaje: ' . $this->reserve->message)
            ->line('Le mantendremos informado de nuestros servicios');
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
            //
        ];
    }
}
