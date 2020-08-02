<?php

namespace App;

use App\Interfaces\Event;
use \Illuminate\Support\Collection;
use \Illuminate\Support\Facades\Log;
use App\EventFactory as Factory;

class UserScore
{
    private static int $totalScore = 0;
    private static Event $event;

    static public function get (Collection $userInfo): string
    {
        $userInfo->map(function ($event) {
            $eventType = (collect($event))->get('type');
            self::$event = Factory::getEvent($eventType);
            self::$totalScore += self::$event->getScore();
        });

        Log::info((string) self::$totalScore . ' pts per total events.');
        return (string) self::$totalScore . ' pts per total events.';
    }
}
