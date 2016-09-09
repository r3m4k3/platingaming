<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\User;
use AppBundle\Controller\SecurityController;


class RoleControllerTest extends WebTestCase
{

    const USER_CLASS = 'AppBundle\Entity\User';
    const ROLE_CLASS = 'AppBundle\Entity\Role';

    private $client;
    private $container;

    public function __construct()
    {
        $this->client = static::createClient();
        $this->container = $this->client->getContainer();
    }

    public function testUserHasRoleManager()
    {
        $user = $this->getMockBuilder(static::USER_CLASS)
        ->setMethods(array('getRoles'))
        ->setConstructorArgs(array('grzegorz.wawrzak@opcom.pl', 'testowe'))
        ->getMock();

        $role = $this->getMockBuilder(static::ROLE_CLASS)
        ->setMethods(null)
        ->setConstructorArgs(array('manager', 'manager'))
        ->getMock();

        $user->expects($this->any())
            ->method('getRoles')
            ->will($this->returnValue(array($role)));

         $this->assertTrue($user->isManager());
         $this->assertTrue($user->hasRole('manager'));
         $this->assertFalse($user->hasRole('DEVELOPER'));
         $this->assertTrue($user->isManager() === $user->hasRole('MANAGER'));
         $this->assertEquals(1, $user->getRolesCount());
    }

    public function testUserHasNoRole()
    {
        $user = $this->getMockBuilder(static::USER_CLASS)
        ->setMethods(null)
        ->setConstructorArgs(array('grzegorz.wawrzak@gmail.pl', 'testowe'))
        ->getMock();

        $this->assertEquals(array(), $user->getRoles());
        $this->assertInternalType('array', $user->getRoles());
        $this->assertEmpty($user->getRoles());
        $this->assertEquals(0, $user->getRolesCount());
        $this->assertTrue($user->getRoles() == null);

    }

    public function testUserAddRole()
    {
        $role = $this->getMockBuilder(static::ROLE_CLASS)
        ->setMethods(null)
        ->setConstructorArgs(array('manager', 'manager'))
        ->getMock();

        $user = $this->getMockBuilder(static::USER_CLASS)
        ->setMethods(array('getRoles'))
        ->setConstructorArgs(array('grzegorz.wawrzak@gmail.pl', 'testowe'))
        ->getMock();

        $user->expects($this->any())
            ->method('getRoles')
            ->will($this->returnValue(array($role)));

        $this->assertTrue($user->isManager());
        $this->assertTrue($user->hasRole('MANAGER'));
        $this->assertFalse($user->hasRole('DEVELOPER'));
        $this->assertTrue($user->isManager() === $user->hasRole('MANAGER'));
        $this->assertEquals(1, $user->getRolesCount());
    }

    public function testUserMultipleRole()
    {
        $managerRole = $this->getMockBuilder(static::ROLE_CLASS)
        ->setMethods(null)
        ->setConstructorArgs(array('manager', 'manager'))
        ->getMock();

        $developerRole = $this->getMockBuilder(static::ROLE_CLASS)
        ->setMethods(null)
        ->setConstructorArgs(array('developer', 'developer'))
        ->getMock();

        $user = $this->getMockBuilder(static::USER_CLASS)
        ->setMethods(array('getRoles'))
        ->setConstructorArgs(array('grzegorz.wawrzak@gmail.pl', 'testowe'))
        ->getMock();

        $user->expects($this->any())
            ->method('getRoles')
            ->will($this->returnValue(array($developerRole, $managerRole)));

        $this->assertTrue($user->hasRole('developer'));
        $this->assertTrue($user->hasRole('manager'));
        $this->assertEquals(2, $user->getRolesCount());

    }

    /**
     * @expectedException AppBundle\Exception\InvalidRoleSpecifiedException
     */
    public function testUserDeleteRoleWhenUserDoesNotHaveIt()
    {
        $managerRole = $this->getMockBuilder(static::ROLE_CLASS)
        ->setMethods(null)
        ->setConstructorArgs(array('manager', 'manager'))
        ->getMock();

        $developerRole = $this->getMockBuilder(static::ROLE_CLASS)
        ->setMethods(null)
        ->setConstructorArgs(array('developer', 'developer'))
        ->getMock();

        $user = $this->getMockBuilder(static::USER_CLASS)
        ->setMethods(null)
        ->setConstructorArgs(array('grzegorz.wawrzak@gmail.pl', 'testowe'))
        ->getMock();

        $user->addRole($managerRole);
        $user->removeRole($developerRole);
    }

}