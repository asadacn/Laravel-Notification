<?php

namespace App\Http\Controllers;

use App\Notifications\TestNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use App\Models\Notify;
use App\Notifications\SlackNotification;

class NotificationController extends Controller
{
    use Notifiable;
     public function MailNotify()
    {
    // $suer=User::find(1);
    //  return $suer->notify(new TestNotification());
     Notification::route('mail', 'asadacn@gmail.com')
                     ->notify(new TestNotification());
                     return 'Sent';
      
    }
     public function SlackNotify(){
           $suer=User::find(1);
           $suer->notify(new SlackNotification());
           return "sent";
    //     Notification::route('slack', env('SLACK_HOOK'))
    //   ->notify(new TestNotification());
     }
}
