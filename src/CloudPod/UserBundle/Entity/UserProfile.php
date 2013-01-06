<?php
namespace CloudPod\UserBundle\Entity;
class UserProfile
{

	// @var integer fk_user_id - mapped
	protected $userProfileID;

     // @var country
    protected $profileuser;

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
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set profileuser
     *
     * @param CloudPod\UserBundle\Entity\User $profileuser
     * @return UserProfile
     */
    public function setProfileuser(\CloudPod\UserBundle\Entity\User $profileuser = null)
    {
        $this->profileuser = $profileuser;
    
        return $this;
    }

    /**
     * Get profileuser
     *
     * @return CloudPod\UserBundle\Entity\User 
     */
    public function getProfileuser()
    {
        return $this->profileuser;
    }
}