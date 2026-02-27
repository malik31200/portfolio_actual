<?php

namespace App\Tests\Controller\Web;

use PHPUnit\Framework\Attributes\DataProvider;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class BookingControllerTest extends WebTestCase
{
    #[DataProvider('protectedRoutesProvider')]
    public function testAnonymousUserIsRedirectedToLogin(string $method, string $path): void
    {
        $client = static::createClient();
        $client->request($method, $path);

        self::assertResponseStatusCodeSame(302);
        self::assertStringContainsString('/login', (string) $client->getResponse()->headers->get('Location'));
    }

    /**
     * @return iterable<array{0: string, 1: string}>
     */
    public static function protectedRoutesProvider(): iterable
    {
        yield ['POST', '/booking/reserve/1'];
        yield ['POST', '/booking/cancel/1'];
        yield ['GET', '/booking/payment-success'];
    }
}
