<?php

namespace App\Service;

use GuzzleHttp\Client;

class ServiceClient
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function request(): void
    {
        $this->client->request('GET', '');
    }
}