<?php


namespace App;

use App\Interfaces\HttpClient;
use \Illuminate\Support\Collection;

require_once(app_path('/helpers.php'));

class GithubClient
{
    private HttpClient $httpClient;
    private const URL = 'https://api.github.com';
    private const GET = 'GET';

    public function __construct(HttpClient $client)
    {
        $this->httpClient = $client;
    }

    public function getUserPublicEvents (string $user, ?array $options = [ 'Accept' => 'application/vnd.github.v3+json' ]): Collection
    {
        $request = $this->httpClient->request(self::GET, sprintf(self::URL . '/users/%s/events/public', $user), $options);

        if (empty($request)) {
            return Collection::make([]);
        }

        return getCollectionFromJson($request->getBody());
    }

    public function hasPublicEvents (Collection $publicEvents): bool
    {
        return empty($publicEvents->count());
    }
}
