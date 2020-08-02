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
            case PushEvent::PUSH_EVENT_TYPE:
                return new PushEvent($event);
            case PullRequestEvent::PULL_REQUEST_EVENT_TYPE:
                return new PullRequestEvent($event);
            case IssueCommentEvent::ISSUE_COMMENT_EVENT_TYPE:
                return new IssueCommentEvent($event);
            default:
                return new DefaultEvent($event);
        }
    }
}
