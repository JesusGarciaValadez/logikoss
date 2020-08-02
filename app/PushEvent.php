<?php

namespace App;

class PushEvent implements Interfaces\Event
{
    public const PUSH_EVENT_TYPE = 'PushEvent';
    private int $score = 10;

    public function getScore(): int
    {
        return $this->score;
    }
}
