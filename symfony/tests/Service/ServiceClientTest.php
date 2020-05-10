<?php

namespace App\Tests\Service;

use App\Service\ServiceClient;
use GuzzleHttp\Client as ClientAlias;
use PHPUnit\Framework\TestCase;

class ServiceClientTest extends TestCase
{
    public function testServiceClient(): void
    {
        $client = $this->createMock(ClientAlias::class);
        $client
            ->expects($this->once())
            ->method('request');
        $serviceClient = new ServiceClient($client);
        $serviceClient->request();
    }
}