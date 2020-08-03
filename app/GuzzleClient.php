<?php


namespace App;

use App\Interfaces\HttpClient;
use \GuzzleHttp\Client as Guzzle;
use \Psr\Http\Message\ResponseInterface;
use \GuzzleHttp\Exception\GuzzleException;
use \GuzzleHttp\Exception\RequestException;
use \Illuminate\Support\Facades\Log;

class GuzzleClient implements HttpClient
{
    private Guzzle $client;

    public function __construct()
    {
        $this->client = new Guzzle();
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws \GuzzleHttp\Exception\RequestException
     */
    public function request(string $method, string $url, ?array $options = null): ?ResponseInterface
    {
        try {
            return $this->client->request($method, $url, $options);
        } catch (RequestException $exception) {
            Log::error('RequestException: ' . $exception->getMessage());
        } catch (GuzzleException $exception) {
            Log::error($exception->getMessage());
        }

        return null;
    }

    public function getBody($response): string
    {
        return (string)$response->getBody();
    }
}
