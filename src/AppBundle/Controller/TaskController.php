<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\Task;
use AppBundle\Form\TaskType;

class TaskController extends Controller
{

    /**
     * @Route("/account/task/list", name="task_list")
     */
    public function indexAction()
    {

        if($this->getUser()->isManager())
            return $this->redirectToRoute('task_manager_list');

        if($this->getUser()->isDeveloper())
            return $this->redirectToRoute('task_developer_list');

        throw $this->createAccessDeniedException('You cannot access this page!');
    }

    /**
     * @Route("/account/task/manager/list", name="task_manager_list")
     */
    public function listManagerAction(Request $request)
    {
        $assigneeId = $request->query->get('assignee');
    	$repository = $this->getDoctrine()->getRepository('AppBundle:Task');
        $userRepository = $this->getDoctrine()->getRepository('AppBundle:User');
        $users = $userRepository->findAll();
        $tasks = $repository->findAll();

        // concrete user's tasks was selected
        if($assigneeId) {
            $assignee = $userRepository->find($assigneeId);
            $tasks = $repository->findBy(array('assignee' => $assignee));
        }

        // display only unassigned tasks
        if($assigneeId == 'unassigned') $tasks = $repository->getUnassigned();

        return $this->render('tasks/list-manager.html.twig', array(
            'tasks' => $tasks,
            'users' => $users,
            'assignee' => !empty($assignee) ? $assignee : null
        ));
    }

    /**
     * @Route("/account/task/developer/list", name="task_developer_list")
     */
    public function listDeveloperAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Task');
        $tasks = $repository->findBy(array('assignee' => $this->getUser()));
        $userRepository = $this->getDoctrine()->getRepository('AppBundle:User');
        $users = $userRepository->findAll();

        return $this->render('tasks/list-developer.html.twig', array(
            'tasks' => $tasks,
            'users' => $users
        ));
    }

    /**
     * @Route("/account/task/add", name="task_add")
     * @Route("/account/task/edit/{id}", name="task_edit")
     */
    public function addAction(Request $request, Task $task = null)
    {
    	$entityManager = $this->getDoctrine()->getManager();
    	$repository = $this->getDoctrine()->getRepository('AppBundle:Task');

        if(empty($task)) 
            $task = new Task();

        $form = $this->createForm(TaskType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            $task->setAuthor($this->getUser());
            $entityManager->persist($task);
            $entityManager->flush();

            $this->get('alert')->addSuccess("Saved successfully. ");
            return $this->redirectToRoute('task_list');

        }

        return $this->render('tasks/add.html.twig', array(
        	'form' => $form->createView()
        ));
    }

    /**
     * @Route("/account/task/show/{id}", name="task_show")
     */
    public function showAction(Request $request, Task $task)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Comment');
        $comments = $repository->findBy(array('task' => $task), array('createdAt' => 'DESC'));

        return $this->render('tasks/show.html.twig', array(
            'task' => $task,
            'comments' => $comments
        ));
    }


    /**
     * @Route("/account/task/remove/{id}", name="task_remove")
     */
    public function removeAction(Task $task)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($task);
        $entityManager->flush();

        $this->get('alert')->addSuccess("Removed successfully. ");
        return $this->redirectToRoute('task_list');
    }

    /**
     * @Route("/task/change-assignee", name="task_change_assignee")
     */
    public function changeAssigneeAction(Request $request)
    {
        $assigneeId = $request->request->get('assigneeId');
        $taskId = $request->request->get('taskId');
        $entityManager = $this->getDoctrine()->getManager();
        $taskRepository = $this->getDoctrine()->getRepository('AppBundle:Task');
        $userRepository = $this->getDoctrine()->getRepository('AppBundle:User');
        $assignee = $userRepository->find($assigneeId);
        $task = $taskRepository->find($taskId);

        if(empty($assignee)) 
            return new JsonResponse(array('code' => 500, 'message' => 'No assignee found'));

        if(empty($task))
            return new JsonResponse(array('code' => 500, 'message' => 'No task found'));

        $task->setAssignee($assignee);
        $entityManager->persist($task);
        $entityManager->flush();

        return new JsonResponse(array('code' => 200, 'message' => 'Saved successfully'));
    }

    /**
     * @Route("/account/task/unassign/{id}", name="task_unassign")
     */
    public function unassignAction(Task $task)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $task->setAssignee(null);
        $entityManager->persist($task);
        $entityManager->flush();

        $this->get('alert')->addSuccess("Saved successfully. ");
        return $this->redirectToRoute('task_list');

    }

}