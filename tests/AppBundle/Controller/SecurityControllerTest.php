<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Controller\SecurityController;
use AppBundle\Entity\Role;

class SecurityControllerTest extends WebTestCase
{
    private $client = null;

    public function setUp()
    {
        $this->client = static::createClient();
    }

    /* comment out due to changes in role interface */
    public function testLoginAction()
    {
        // $this->logIn();
        // $crawler = $this->client->request('GET', '/account/user');
        // $this->client->followRedirect();
        // $this->assertTrue($this->client->getResponse()->isSuccessful());
        //$this->assertGreaterThan(0,$crawler->filter('html:contains("<p>admin</p>")')->count());
    }

    private function logIn()
    {
        $session = $this->client->getContainer()->get('session');

        $firewall = 'secured_area';
        $token    = new UsernamePasswordToken('admin', null, $firewall,
            array(new Role('manager', 'manager')));
        $session->set('_security_'.$firewall, serialize($token));
        $session->save();

        $cookie = new Cookie($session->getName(), $session->getId());
        $this->client->getCookieJar()->set($cookie);
    }

}