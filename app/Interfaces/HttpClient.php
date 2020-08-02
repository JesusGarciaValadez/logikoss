<?php

namespace App\Interfaces;

interface HttpClient
{
    public function request(string $method, string $url, ?array $options);
    public function getBody($response);
}
