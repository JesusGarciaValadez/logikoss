<?php


namespace App;

use App\Interfaces\HttpClient;
use \Illuminate\Support\Collection;

require_once(app_path('/helpers.php'));

class GithubClient
{
    private HttpClient $httpClient;
    private const URL = 'https://api.github.com/users/%s/events/public';
    private const GET = 'GET';

    public function __construct(HttpClient $client)
    {
        $this->httpClient = $client;
    }

    /**
     * @return Collection
     */
    public function getUserData (string $user, ?array $options = [ 'Accept' => 'application/vnd.github.v3+json' ]): Collection
    {
        $body = ($this->httpClient->request(self::GET, sprintf(self::URL, $user), $options))->getBody();
        return getCollectionFromJson($body);
    }
}
