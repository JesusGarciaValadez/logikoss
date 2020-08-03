<?php

namespace App;

class IssueCommentEvent implements Interfaces\Event
{
    public const ISSUE_COMMENT_EVENT = 'IssueCommentEvent';
    private int $score = 4;

    public function getScore(): int
    {
        return $this->score;
    }
}
