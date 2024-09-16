<?php

namespace App\Tests;

use App\Service\ICNDBApi;
use App\Dto\MessageResult;
use PHPUnit\Framework\TestCase;
use App\Service\MessageProvider;
use App\Service\JsonPlaceholderApi;
use Symfony\Component\HttpClient\MockHttpClient;

class MessageProviderTest extends TestCase
{
    public function testGetModFilteredMessages(): void
    {
        $expectedResult = [
            new MessageResult(
                source: 'jsonplaceholder/1',
                messageId: 10,
                message: 'quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error'
            ),
            new MessageResult(
                source: 'jsonplaceholder/2',
                messageId: 10,
                message: 'qui consequuntur ducimus possimus quisquam amet similique\nsuscipit porro ipsam amet\neos veritatis officiis exercitationem vel fugit aut necessitatibus totam\nomnis rerum consequatur expedita quidem cumque explicabo'
            ),
            new MessageResult(
                source: 'icndb',
                messageId: '',
                message: 'This is a random message from icndb'
            ),
            new MessageResult(
                source: 'jsonplaceholder/1',
                messageId: 9,
                message: 'consectetur animi nesciunt iure dolore\nenim quia ad\nveniam autem ut quam aut nobis\net est aut quod aut provident voluptas autem voluptas'
            ),
            new MessageResult(
                source: 'jsonplaceholder/2',
                messageId: 9,
                message: 'illum quis cupiditate provident sit magnam\nea sed aut omnis\nveniam maiores ullam consequatur atque\nadipisci quo iste expedita sit quos voluptas'
            ),
            new MessageResult(
                source: 'icndb',
                messageId: '',
                message: 'This is a another random message from icndb'
            ),
        ];
        $user1Api = $this->createJsonPlaceholderFetcherForUserOne();
        $user2Api = $this->createJsonPlaceholderFetcherForUserTwo();
        $chockApi = $this->createIcndbFetcher();
        $messageProvider = new MessageProvider($user1Api, $user2Api, $chockApi);
        $this->assertEquals($expectedResult, $messageProvider->messages());
    }

    private function createJsonPlaceholderFetcherForUserOne(): JsonPlaceholderApi
    {
        $mockClient = new MockHttpClient();
        $jsonPlaceholder = new JsonPlaceholderApi($mockClient);
        return $jsonPlaceholder;
    }

    private function createJsonPlaceholderFetcherForUserTwo(): JsonPlaceholderApi
    {
        $mockClient = new MockHttpClient();
        $jsonPlaceholder = new JsonPlaceholderApi($mockClient);
        return $jsonPlaceholder;
    }

    private function createIcndbFetcher(): ICNDBApi
    {
        $mockClient = new MockHttpClient();
        $api = new ICNDBApi($mockClient);
        return $api;
    }
}
