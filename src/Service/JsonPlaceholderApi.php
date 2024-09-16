<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class JsonPlaceholderApi
{
    public function __construct(private HttpClientInterface $client) {}
}
