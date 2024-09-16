<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RouteTest extends WebTestCase
{
    public function testHomePage(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');

        $this->assertResponseIsSuccessful();
    }

    public function testListPage(): void
    {
        $client = static::createClient();
        $userId1 = 1;
        $userId2 = 2;
        $method = 'fib';
        $crawler = $client->request('GET', "/$userId1/$userId2/$method");

        $this->assertResponseIsSuccessful();
    }
}
