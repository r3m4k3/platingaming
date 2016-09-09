<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Status;
use AppBundle\Form\StatusType;

class StatusController extends Controller
{

    /**
     * @Route("/account/status/list", name="status_list")
     */
    public function indexAction()
    {

    	$repository = $this->getDoctrine()->getRepository('AppBundle:Status');
    	$statuses = $repository->findAll();

        return $this->render('statuses/list.html.twig', array('statuses' => $statuses));
    }

    /**
     * @Route("/account/status/add", name="status_add")
     * @Route("/account/status/edit/{id}", name="status_edit")
     */
    public function addAction(Request $request, Status $status = null)
    {
    	$entityManager = $this->getDoctrine()->getManager();
    	$repository = $this->getDoctrine()->getRepository('AppBundle:Status');

        if(empty($status))
    	   $status = new Status();
        
        $form = $this->createForm(StatusType::class, $status);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $entityManager->persist($status);
            $entityManager->flush();

            $this->get('alert')->addSuccess("Saved successfully. ");
            return $this->redirectToRoute('status_list');

        }

        return $this->render('statuses/add.html.twig', array(
        	'form' => $form->createView()
        ));
    }

    /**
     * @Route("/account/status/remove/{id}", name="status_remove")
     */
    public function removeAction(Status $status)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($status);
        $entityManager->flush();

        $this->get('alert')->addSuccess("Removed successfully. ");
        return $this->redirectToRoute('status_list');
    }

}