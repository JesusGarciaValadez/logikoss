<?php

namespace App;

class DefaultEvent implements Interfaces\Event
{
    private int $score = 1;

    public function getScore(): int
    {
        return $this->score;
    }
}
