<?php

namespace AppBundle\Exception;

use AppBundle\Exception\CustomExceptionInterface;

class UserMustHaveAtLeastOneRoleException extends \Exception implements CustomExceptionInterface
{

}