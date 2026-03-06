<?php

namespace App\Tests\Controller\Web;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

final class AdminControllerTest extends WebTestCase
{
    /**
     * Verifies that an anonymous (not logged-in) user is redirected to the login page
     * when attempting to access a protected admin page.
     * @return void
     */
    public function testAnonymousUserIsRedirectToLogin(): void
    {
        $client = static::createClient();
        $client->request('GET', '/admin/courses');

        self::assertResponseStatusCodeSame(302);
        self::assertStringContainsString('/login', (string) $client->getResponse()->headers->get('Location'));
    }

    /**
     * Verifies that a logged-in user without admin role receives a 403 (Forbidden) response
     * when trying to access an admin page.
     * @return void
     */
   
    public function testNonAdminUserGetsForbidden(): void
    {
        $client = static::createClient();
        $em = static::getContainer()->get(EntityManagerInterface::class);

        $user = $em->getRepository(User::class)->findOneBy([
            'email' => 'user-role-user@test.local',
        ]);

        if (!$user) {
            $user = new User();
            $user->setEmail('user-role-user@test.local');
            $user->setFirstName('Test');
            $user->setLastName('User');
            $user->setPassword('not-used');
            $user->setRoles(['ROLE_USER']);
            $user->setCreatedAt(new \DateTimeImmutable());

            $em->persist($user);
            $em->flush();
        }

        $client->loginUser($user);
        $client->request('GET', '/admin/courses');

        self::assertResponseStatusCodeSame(403);
    }
}
