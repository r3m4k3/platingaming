<?php

namespace AppBundle\Twig;

use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class TwigExtension extends \Twig_Extension
{

    private $tokenStorage;

    public function __construct(TokenStorageInterface $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('is_manager', array($this, 'isManager')),
            new \Twig_SimpleFunction('is_developer', array($this, 'isDeveloper')),
            new \Twig_SimpleFunction('get_roles', array($this, 'getRoles'))
        );
    }

    public function isManager()
    {
        return $this->tokenStorage->getToken()->getUser()->isManager();
    }

    public function isDeveloper()
    {
        return $this->tokenStorage->getToken()->getUser()->isDeveloper();
    }

    public function getRoles(User $user)
    {
        $tmp = [];
        foreach($user->getRoles() as $role)
            $tmp[] = $role->getKey();

        return $tmp;
    }

    public function getName()
    {
        return 'twig_extension';
    }

}
