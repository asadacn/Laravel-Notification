<?php

namespace App\Notifications;


use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\SlackMessage;

class SlackNotification extends Notification
{
    use Queueable;

 
    public function __construct()
    {
        //
    }


    public function via($notifiable)
    {
        return ['slack'];
    }

    public function toSlack($notifiable)
    {
        $message = "Famous Hello World!";
        
        return (new SlackMessage)
                ->content('Fix service request by '.$message);
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
