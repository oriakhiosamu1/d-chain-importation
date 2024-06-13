<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NotifyUser extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    public $message;

    public function __construct(Request $request)
    {
        //
        $this->message = $request;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        $url = url('/');

        return (new MailMessage)
                    ->greeting($this->message->greeting)
                    ->line($this->message->intro)
                    ->line($this->message->body)
                    ->action('View Page', $url)
                    ->line($this->message->conclusion);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
