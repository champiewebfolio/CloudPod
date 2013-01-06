<?php
namespace CloudPod\UserBundle\Entity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
class User implements AdvancedUserInterface, \Serializable
{

    // @var auto integer
    protected $userID;

	// @var string
	protected $userName;

	// @var string
	protected $salt;

	// @var string - must not persist to DB
	protected $plainPassword;

	// @var string
	protected $password;

	// @var string
	protected $email;

	// @var boolean
	protected $isActive;
    
	// @var string
	protected $confirmationCode;

	// @var datetime
	protected $createdAt;

    // @var string - must not persist to DB
    protected $chooseRole;

	// @var for roles fk_role_id - mapped
	protected $userRole;

    // @var for profile fk_profile_id - mapped
    protected $profileID;

    protected $userClassrooms;

    /* _construct() is an instant instance of the entity*/

    public function __construct()
    {
        $this->userClassrooms = new ArrayCollection();
        date_default_timezone_set('Asia/Manila');
        $this->createdAt = new \DateTime("now");

    //all users are inactive upon registration.
    //isActive turns 'true' with the use of email confirmation
        $this->isActive = false; 
    }

    public function __toString()
    {
       return $this->userName;

    }


    /**
     * Get userID
     *
     * @return integer 
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set userName
     *
     * @param string $userName
     * @return User
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    
        return $this;
    }

    /**
     * Get userName
     *
     * @return string 
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
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

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set confirmationCode
     *
     * @param string $confirmationCode
     * @return User
     */
    public function setConfirmationCode($confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;
    
        return $this;
    }

    /**
     * Get confirmationCode
     *
     * @return string 
     */
    public function getConfirmationCode()
    {
        return $this->confirmationCode;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set profileID
     *
     * @param CloudPod\UserBundle\Entity\UserProfile $profileID
     * @return User
     */
    public function setProfileID(\CloudPod\UserBundle\Entity\UserProfile $profileID)
    {
        $this->profileID = $profileID;
    
        return $this;
    }

    /**
     * Get profileID
     *
     * @return CloudPod\UserBundle\Entity\UserProfile 
     */
    public function getProfileID()
    {
        return $this->profileID;
    }

    /**
     * Set userRole
     *
     * @param CloudPod\UserBundle\Entity\UserRoles $userRole
     * @return User
     */
    public function setUserRole(\CloudPod\UserBundle\Entity\UserRoles $userRole)
    {
        $this->userRole = $userRole;
    
        return $this;
    }

    /**
     * Get userRole
     *
     * @return CloudPod\UserBundle\Entity\UserRoles 
     */
    public function getUserRole()
    {
        return $this->userRole;
    }


/*------------------------------------------
 REQUIRED ABSTRACT METHODS by AdvanceUserInterface
 ---------------------------------------------------
 */   

 /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->userID,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
       list (
            $this->userID,
        ) = unserialize($serialized);
    }

    public function isAccountNonExpired()
    { return true; }

    public function isAccountNonLocked()
    { return true; }

    public function isCredentialsNonExpired()
    { return true; }

    public function isEnabled()
    { 
        return $this->isActive; 
    }

       /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    public function getRoles()
    {
      return array($this->userRole);  
    }


    /**
     * Add userClassrooms
     *
     * @param CloudPod\ClassroomBundle\Entity\Classroom $userClassrooms
     * @return User
     */
    public function addUserClassroom(\CloudPod\ClassroomBundle\Entity\Classroom $userClassrooms)
    {
        $this->userClassrooms[] = $userClassrooms;
    
        return $this;
    }

    /**
     * Remove userClassrooms
     *
     * @param CloudPod\ClassroomBundle\Entity\Classroom $userClassrooms
     */
    public function removeUserClassroom(\CloudPod\ClassroomBundle\Entity\Classroom $userClassrooms)
    {
        $this->userClassrooms->removeElement($userClassrooms);
    }

    /**
     * Get userClassrooms
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUserClassrooms()
    {
        return $this->userClassrooms;
   }
}