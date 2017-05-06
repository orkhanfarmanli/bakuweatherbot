<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Twitter\TwitterChannel;
use NotificationChannels\Twitter\TwitterStatusUpdate;

class Tweet extends Notification
{
    public function via($notifiable)
    {
        return [TwitterChannel::class];
    }

    public function toTwitter($weather)
    {
        return new TwitterStatusUpdate('Bu gün hava ' . $weather->condition . ', temperatur ' . $weather->temp . ' dərəcə selsi, küləyin sürətiysə ' . $weather->wind . 'm/s olacaq');
    }
}
