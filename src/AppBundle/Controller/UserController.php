<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class UserController extends Controller
{

    /**
     * @Route("/account/user/list", name="user_list")
     */
    public function indexAction()
    {

    	$repository = $this->getDoctrine()->getRepository('AppBundle:User');
    	$users = $repository->findAll();

        return $this->render('users/list.html.twig', array('users' => $users));
    }

    /**
     * @Route("/account/user/add", name="user_add")
     */
    public function addAction(Request $request)
    {
    	$entityManager = $this->getDoctrine()->getManager();
    	$repository = $this->getDoctrine()->getRepository('AppBundle:User');
    	$user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $plainPassword = $form->getData()->getPassword();
            $encoderFactory = $this->get('security.encoder_factory');
            $encoder        = $encoderFactory->getEncoder($user);
            $password       = $encoder->encodePassword($plainPassword, null);
            $user->setPassword($password);
            $entityManager->persist($user);
            $entityManager->flush();

            $this->get('alert')->addSuccess("Saved successfully. ");
            return $this->redirectToRoute('user_list');

        }

        return $this->render('users/add.html.twig', array(
        	'form' => $form->createView()
        ));
    }

    /**
     * @Route("/account/user/remove/{id}", name="user_remove")
     */
    public function removeAction(User $user)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($user);
        $entityManager->flush();

        $this->get('alert')->addSuccess("Removed successfully. ");
        return $this->redirectToRoute('user_list');
    }

    /**
     * @Route("/account/user/get/{id}", name="user_get")
     */
    public function getAction(User $user)
    {
        return $this->render('users/show.html.twig', array('user' => $user));
    }

    /**
     * @Route("/account/user/my-account", name="user_my_account")
     */
    public function detailsAction()
    {
        return $this->render('users/my-account.html.twig');
    }

    /**
     * @Route("/account/user/change-password", name="user_change_password")
     */
    public function changePasswordAction()
    {
        return $this->render('users/change-password.html.twig');
    }

    /**
     * @Route("/account/user/save-changed-password", name="user_save_changed_password")
     */
    public function saveChangedPasswordAction(Request $request)
    {
        $user = $this->getUser();
        $encoderFactory = $this->get('security.encoder_factory');
        $encoder = $encoderFactory->getEncoder($user);
        $plainPassword = $request->request->get('password');
        $repeatedPlainPassword = $request->request->get('password-repeat');

        if($plainPassword === $repeatedPlainPassword) {
            $password = $encoder->encodePassword($plainPassword, null);
            $user->setPassword($password);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            $this->get('alert')->addSuccess("Saved successfully. ");
            return $this->redirectToRoute('user_my_account');
        } else {
           $this->get('alert')->addError("Passwords are different. ");
        }

        return $this->redirectToRoute('user_change_password');
    }

    /**
     * @Route("/account/user/change-status/{id}/{status}", name="user_change_status")
     */
    public function changeStatusAction(User $user, $status)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $user->setEnabled($status);
        $entityManager->persist($user);
        $entityManager->flush();

        $this->get('alert')->addSuccess("Saved successfully. ");
        return $this->redirectToRoute('user_list');

    }

}