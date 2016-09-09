<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TaskRepository extends EntityRepository
{

	public function getUnassigned()
	{
		return $this->getEntityManager()
	        ->createQuery(
	        	'SELECT t FROM AppBundle:Task t WHERE t.assignee IS NULL'
	        )
        ->getResult();
	}

}