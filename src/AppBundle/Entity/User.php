<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\PersistentCollection;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

use AppBundle\Exception\UserMustHaveAtLeastOneRoleException;
use AppBundle\Exception\InvalidRoleSpecifiedException;
use AppBundle\Exception\NoRoleAddedException;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 * @UniqueEntity("email",message="This e-mail address is already registered. ")
 * @UniqueEntity("username",message="This username is already registered. ")
 *
 */
class User implements AdvancedUserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     * @Assert\NotBlank
     * @Assert\Length(
     *      min = 3,
     *      minMessage = "Product description must be at least {{ limit }} characters long",
     * )
     *
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=80, unique=true)
     * @Assert\NotBlank
     * @Assert\Email(
     *     message = "The email {{ value }} is not a valid email.",
     *     checkMX = true
     * )
     *
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private $password;

    /**
     * @ORM\Column(name="account_non_expired", type="boolean")
     */
    private $accountNonExpired = true;

    /**
     * @ORM\Column(name="account_non_locked", type="boolean")
     */
    private $accountNonLocked = true;

    /**
     * @ORM\Column(name="credentials_non_expired", type="boolean")
     */
    private $credentialsNonExpired = true;

    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled = false;

    /**
     * @ORM\Column(name="registration_date",type="datetime", nullable=true)
     */
    private $registrationDate;

    /**
     * @ORM\Column(name = "action_token", type="string", length=32, nullable=true)
     */
    private $actionToken;

     /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="author")
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="assignee")
     */
    private $tasks;

    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="author")
     */
    private $myTasks;

    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="user_roles",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     *      )
     * @Assert\NotBlank
     **/
    protected $roles;

    public function __construct($email = '', $password = '')
    {

        $this->email = $email;
        $this->password = $password;
        $this->registrationDate = new \DateTime();
    }

    public function isManager()
    {
        return $this->hasRole('manager');
    }

    public function isDeveloper()
    {
        return $this->hasRole('developer');
    }

    public function hasRole($comparisonRole)
    {
        $roles = $this->getRoles();
        if(!empty($roles)) {
                foreach($roles as $role)
                {
                    if(strtolower($comparisonRole) === strtolower($role->getKey())) {
                        return true;
                        break;
                    }
                }
        }
        return false;
    }

    public function isEqualTo(UserInterface $user) {
        return $this->username === $user->getUsername();
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {

    }

    public function serialize()
    {
        return \serialize(array(
            $this->id,
            $this->email
        ));
    }
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email
        ) = \unserialize($serialized);
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    public function isAccountNonExpired()
    {
        return $this->accountNonExpired;
    }

    public function isAccountNonLocked()
    {
        return $this->accountNonLocked;
    }

    public function isCredentialsNonExpired()
    {
        return $this->credentialsNonExpired;
    }

    public function isEnabled()
    {
        return $this->enabled;
    }

    public function getSalt()
    {
        return;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getRoles()
    {
        if(!empty($this->roles) and $this->roles instanceof PersistentCollection)
            return $this->roles->getValues();

        return [];
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set accountNonExpired
     *
     * @param boolean $accountNonExpired
     *
     * @return User
     */
    public function setAccountNonExpired($accountNonExpired)
    {
        $this->accountNonExpired = $accountNonExpired;

        return $this;
    }

    /**
     * Get accountNonExpired
     *
     * @return boolean
     */
    public function getAccountNonExpired()
    {
        return $this->accountNonExpired;
    }

    /**
     * Set accountNonLocked
     *
     * @param boolean $accountNonLocked
     *
     * @return User
     */
    public function setAccountNonLocked($accountNonLocked)
    {
        $this->accountNonLocked = $accountNonLocked;

        return $this;
    }

    /**
     * Get accountNonLocked
     *
     * @return boolean
     */
    public function getAccountNonLocked()
    {
        return $this->accountNonLocked;
    }

    /**
     * Set credentialsNonExpired
     *
     * @param boolean $credentialsNonExpired
     *
     * @return User
     */
    public function setCredentialsNonExpired($credentialsNonExpired)
    {
        $this->credentialsNonExpired = $credentialsNonExpired;

        return $this;
    }

    /**
     * Get credentialsNonExpired
     *
     * @return boolean
     */
    public function getCredentialsNonExpired()
    {
        return $this->credentialsNonExpired;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return User
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return User
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set actionToken
     *
     * @param string $actionToken
     *
     * @return User
     */
    public function setActionToken($actionToken)
    {
        $this->actionToken = $actionToken;

        return $this;
    }

    /**
     * Get actionToken
     *
     * @return string
     */
    public function getActionToken()
    {
        return $this->actionToken;
    }

    /**
     * Add role
     *
     * @param \AppBundle\Entity\Role $role
     *
     * @return User
     */
    public function addRole(\AppBundle\Entity\Role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param \AppBundle\Entity\Role $role
     */
    public function removeRole(\AppBundle\Entity\Role $role)
    {
        if ($this->getRolesCount() > 1) {
            if($this->hasRole($role->getKey())) {
                if($this->roles instanceof PersistentCollection) $this->roles->removeElement($role);
                else unset($this->roles[$this->getRoleKey($role)]);
            }
        } else {
            throw new InvalidRoleSpecifiedException();
        }

        throw new UserMustHaveAtLeastOneRoleException();
    }

    public function getRolesCount()
    {
        return count($this->getRoles());
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return User
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\Comment $comment
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add task
     *
     * @param \AppBundle\Entity\Task $task
     *
     * @return User
     */
    public function addTask(\AppBundle\Entity\Task $task)
    {
        $this->tasks[] = $task;

        return $this;
    }

    /**
     * Remove task
     *
     * @param \AppBundle\Entity\Task $task
     */
    public function removeTask(\AppBundle\Entity\Task $task)
    {
        $this->tasks->removeElement($task);
    }

    /**
     * Get tasks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Add myTask
     *
     * @param \AppBundle\Entity\Task $myTask
     *
     * @return User
     */
    public function addMyTask(\AppBundle\Entity\Task $myTask)
    {
        $this->myTasks[] = $myTask;

        return $this;
    }

    /**
     * Remove myTask
     *
     * @param \AppBundle\Entity\Task $myTask
     */
    public function removeMyTask(\AppBundle\Entity\Task $myTask)
    {
        $this->myTasks->removeElement($myTask);
    }

    /**
     * Get myTasks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMyTasks()
    {
        return $this->myTasks;
    }
}
