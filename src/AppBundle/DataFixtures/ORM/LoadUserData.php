<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

use AppBundle\Entity\User;
use AppBundle\Entity\Role;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
	/**
     * @var ContainerInterface
     */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
    	// create roles
    	$managerRole = new Role('manager', 'manager');
        $managerRole->setDescription('Manager role');

        $developerRole = new Role('developer', 'developer');
        $developerRole->setDescription('Developer role');

        $manager->persist($managerRole);
        $manager->persist($developerRole);
        $manager->flush();

    	// create user: admin, pass: test
        $user = new User('g.wawrzak@gmail.com');
        $encoder = $this->container->get('security.password_encoder');
        $password = $encoder->encodePassword($user, 'test');
        $user->setUsername('admin');
        $user->setPassword($password);
        $user->addRole($managerRole);
        $user->addRole($developerRole);
        $user->setEnabled(1);

        $manager->persist($user);
        $manager->flush();
    }
}