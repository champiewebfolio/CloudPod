<?php
namespace CloudPod\UserBundle\Model;

class RegistrationModel
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

	// @var datetime
	protected $createdAt;

    // @var string - must not persist to DB
    protected $chooseRole;

    protected $classKey;

    protected $className;



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


    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    
        return $this;
    }

    public function getPlainPassword()
    {
        return $this->plainPassword;
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



    public function setChooseRole($chooseRole)
    {
        $this->chooseRole = $chooseRole;
    
        return $this;
    }

    public function getChooseRole()
    {
        return $this->chooseRole;
    }

   /*-----------------------------
        PROFILE
   -----------------------------------*/


    // @var string
    protected $firstName;

    // @var string
    protected $lastName;

    // @var integer
    protected $age;

    // @var string
    protected $school;

    // @var country
    protected $country;



    /**
     * Get userProfileID
     *
     * @return integer 
     */
    public function getUserProfileID()
    {
        return $this->userProfileID;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return UserProfile
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return UserProfile
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return UserProfile
     */
    public function setAge($age)
    {
        $this->age = $age;
    
        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set school
     *
     * @param string $school
     * @return UserProfile
     */
    public function setSchool($school)
    {
        $this->school = $school;
    
        return $this;
    }

    /**
     * Get school
     *
     * @return string 
     */
    public function getSchool()
    {
        return $this->school;
    }

      /**
     * Set country
     *
     * @param string $country
     * @return UserProfile
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get school
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

     public function setClassKey($classKey)
    {
        $this->classKey = $classKey;
    
        return $this;
    }

    /**
     * Get school
     *
     * @return string 
     */
    public function getClassKey()
    {
        return $this->classKey;
    }

         public function setClassName($className)
    {
        $this->className = $className;
    
        return $this;
    }

    /**
     * Get school
     *
     * @return string 
     */
    public function getClassName()
    {
        return $this->className;
    }
}