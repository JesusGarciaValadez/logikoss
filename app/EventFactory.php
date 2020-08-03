<?php

namespace App;

use App\Interfaces\Event;
use Illuminate\Support\Facades\Log;

class EventFactory
{
    static public function getEvent(string $event): Event
    {
        Log::info($event);
        switch ($event)
        {
            case PushEvent::PUSH_EVENT:
                return new PushEvent($event);
            case PullRequestEvent::PULL_REQUEST_EVENT:
                return new PullRequestEvent($event);
            case IssueCommentEvent::ISSUE_COMMENT_EVENT:
                return new IssueCommentEvent($event);
            default:
                return new DefaultEvent($event);
        }
    }
}
