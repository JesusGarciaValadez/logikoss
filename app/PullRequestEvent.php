<?php

namespace App;

class PullRequestEvent implements Interfaces\Event
{
    public const PULL_REQUEST_EVENT = 'PullRequestEvent';
    private int $score = 5;

    public function getScore(): int
    {
        return $this->score;
    }
}
