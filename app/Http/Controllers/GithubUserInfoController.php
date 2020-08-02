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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $httpClient = new Guzzle();
        $githubClient = new GithubClient($httpClient);
        return UserScore::get($githubClient->getUserData('JesusGarciaValadez'));
    }
}
