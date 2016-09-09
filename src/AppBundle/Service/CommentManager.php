<?php

namespace AppBundle\Service;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Task;
use AppBundle\Form\CommentType;

class CommentManager
{

    /**
     *
     * @var type
     */
    private $container;

    /**
     *
     * @var type
     */
    private $tokenStorage;

    /**
     *
     * @var type
     */
    private $router;

    public function __construct(Container $container, TokenStorageInterface $tokenStorage, RouterInterface $router)
    {
        $this->container    = $container;
        $this->tokenStorage = $tokenStorage;
        $this->router = $router;
    }

    public function getRepository($className = 'Comment')
    {
        return $this->container
            ->get('doctrine')
            ->getManager()
            ->getRepository('AppBundle:' . $className);
    }

    public function add(Request $request, Task $task)
    {
        $entityManager = $this->container->get('doctrine')->getManager();
        $commentRepository = $this->getRepository();
        $comment = new Comment();
        $comment->setTask($task);
        $comment->setAuthor($this->tokenStorage->getToken()->getUser());
        $form = $this->container->get('form.factory')->create(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $entityManager->persist($comment);
            $entityManager->flush();

            $this->container->get('alert')->addSuccess("Saved successfully. ");

            return new RedirectResponse($this->router->generate('task_show', array('id' => $task->getId())));
        }

        $html = $this->container->get('templating')->render('comment/add.html.twig', array(
            'form' => $form->createView(),
            'task' => $task
        ));

        return new Response($html);
    }

    public function remove(Comment $comment)
    {
        $entityManager = $this->container->get('doctrine')->getManager();
        $task = $comment->getTask();
        $entityManager->remove($comment);
        $entityManager->flush();

        $this->container->get('alert')->addSuccess("Removed successfully. ");
        return new RedirectResponse($this->router->generate('task_show', array('id' => $task->getId())));
    }

}