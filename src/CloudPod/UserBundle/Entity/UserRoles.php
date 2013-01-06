<?php
namespace CloudPod\UserBundle\Entity;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;

class UserRoles implements RoleInterface
{

	// @var  integer
	protected $roleID;

	// @var string
	protected $role;

	// @var array - mapped
	protected $users;


	public function __construct()
    {
        //sets 'users' to be an array
        $this->users = new ArrayCollection();
    }

    

    /**
     * Set roleID
     *
     * @param integer $roleID
     * @return UserRoles
     */
    public function setRoleID($roleID)
    {
        $this->roleID = $roleID;
    
        return $this;
    }

    /**
     * Get roleID
     *
     * @return integer 
     */
    public function getRoleID()
    {
        return $this->roleID;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return UserRoles
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Add users
     *
     * @param CloudPod\UserBundle\Entity\User $users
     * @return UserRoles
     */
    public function addUser(\CloudPod\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;
    
        return $this;
    }

    /**
     * Remove users
     *
     * @param CloudPod\UserBundle\Entity\User $users
     */
    public function removeUser(\CloudPod\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

/*-------------------------------
 ABSTRACT METHODS REQUIRED by RoleInterface
 ---------------------------------------------------
 */ 

  /**
     * @see RoleInterface
     */
    public function getRole()
    {
        return $this->role;
    }



}