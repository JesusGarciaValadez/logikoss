<?php

namespace App\Http\Controllers;

use App\GuzzleClient as Guzzle;
use App\GithubClient;
use App\UserScore;

class GithubUserInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return String
     */
    public function index(String $githubUsername)
    {
        $httpClient = new Guzzle();
        $githubClient = new GithubClient($httpClient);
        $publicEvents = $githubClient->getUserPublicEvents($githubUsername);

        if ($githubClient->hasPublicEvents($publicEvents)) {
            return 'The username doesn\'t exist, there\'s a typo in the username or, the user doesn\'t have any activity.';
        }

        return UserScore::get($publicEvents);
    }
}
