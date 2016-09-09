<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

use AppBundle\Entity\Task;
use AppBundle\Entity\Comment;
use AppBundle\Form\CommentType;

class CommentController extends Controller
{

    /**
     * @Route("/account/comment/add/{taskId}", name="comment_add")
     * @ParamConverter("task", class="AppBundle:Task", options={"id" = "taskId"})
     */
    public function addAction(Request $request, Task $task)
    {
        return $this->get('app.comment.manager')->add($request, $task);
    }


    /**
     * @Route("/account/comment/remove/{id}", name="comment_remove")
     */
    public function removeAction(Comment $comment)
    {
        return $this->get('app.comment.manager')->remove($comment);
    }

}