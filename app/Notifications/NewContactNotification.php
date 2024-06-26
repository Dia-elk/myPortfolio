<?php

namespace App\Notifications;

use App\Models\ContactsMe;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;


class NewContactNotification extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct(private ContactsMe $message, private string $email)
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['slack', 'mail'];
    }


    public function toSlack(object $notifiable): SlackMessage
    {
        return (new SlackMessage)
            ->content('New message from: '. $this->email . '. Name: ' . $this->message->name . '. Message is : ' . $this->message->details . '. Type of Project: ' . $this->message->typeOfProject . '. Budget: ' . $this->message->budget);
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->view('mails.thankyou',[
                'name' => $this->message->name,
                'project' => $this->message->typeOfProjects,
            ]);

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
