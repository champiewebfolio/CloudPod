<?php
namespace CloudPod\ClassroomBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

class Classroom
{
	// @var auto integer
    protected $classID;

	// @var string
	protected $classKey;

    //@var string
    protected $classKeySalt;

	// @var string
	protected $className;

	// @var string - must not persist to DB
	protected $classDesc;

	// @var string
	protected $classCreatedAt;

	// @var string
	protected $classCreatedBy;

    protected $classUsers;

    //entity announcements
    protected $classAnnouncement;

    // entity lesson, jointable
    protected $classLesson;

    //entity classresources mapped
    protected $resources;

    //entity classsubmission mapped
    protected $submissions;




    public function __construct()
    {
        $this->classUsers = new ArrayCollection();
        $this->classAnnouncement = new ArrayCollection();
        $this->classLesson = new ArrayCollection();
        $this->resources = new ArrayCollection();
        
        date_default_timezone_set('Asia/Manila');
        $this->classCreatedAt = new \DateTime("now");
    }

 /*   public function __toString()
    {

        $this->classID;
        return $this;

    }*/



    /**
     * Get classID
     *
     * @return integer 
     */
    public function getClassID()
    {
        return $this->classID;
    }

    /**
     * Set classKey
     *
     * @param string $classKey
     * @return Classroom
     */
    public function setClassKey($classKey)
    {
        $this->classKey = $classKey;
    
        return $this;
    }

    /**
     * Get classKey
     *
     * @return string 
     */
    public function getClassKey()
    {
        return $this->classKey;
    }

    /**
     * Set className
     *
     * @param string $className
     * @return Classroom
     */
    public function setClassName($className)
    {
        $this->className = $className;
    
        return $this;
    }

    /**
     * Get className
     *
     * @return string 
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Set classDesc
     *
     * @param string $classDesc
     * @return Classroom
     */
    public function setClassDesc($classDesc)
    {
        $this->classDesc = $classDesc;
    
        return $this;
    }

    /**
     * Get classDesc
     *
     * @return string 
     */
    public function getClassDesc()
    {
        return $this->classDesc;
    }

    /**
     * Set classCreatedAt
     *
     * @param \DateTime $classCreatedAt
     * @return Classroom
     */
    public function setClassCreatedAt($classCreatedAt)
    {
        $this->classCreatedAt = $classCreatedAt;
    
        return $this;
    }

    /**
     * Get classCreatedAt
     *
     * @return \DateTime 
     */
    public function getClassCreatedAt()
    {
        return $this->classCreatedAt;
    }

    /**
     * Set classCreatedBy
     *
     * @param CloudPod\UserBundle\Entity\User $classCreatedBy
     * @return Classroom
     */
    public function setClassCreatedBy(\CloudPod\UserBundle\Entity\User $classCreatedBy)
    {
        $this->classCreatedBy = $classCreatedBy;
    
        return $this;
    }

    /**
     * Get classCreatedBy
     *
     * @return CloudPod\UserBundle\Entity\User 
     */
    public function getClassCreatedBy()
    {
        return $this->classCreatedBy;
    }

    /**
     * Add classUsers
     *
     * @param CloudPod\UserBundle\Entity\User $classUsers
     * @return Classroom
     */
    public function addClassUser(\CloudPod\UserBundle\Entity\User $classUsers)
    {
        $this->classUsers[] = $classUsers;
    
        return $this;
    }

    /**
     * Remove classUsers
     *
     * @param CloudPod\UserBundle\Entity\User $classUsers
     */
    public function removeClassUser(\CloudPod\UserBundle\Entity\User $classUsers)
    {
        $this->classUsers->removeElement($classUsers);
    }

    /**
     * Get classUsers
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getClassUsers()
    {
        return $this->classUsers;
    }

    /**
     * Add classLesson
     *
     * @param CloudPod\ClassroomBundle\Entity\Lessons $classLesson
     * @return Classroom
     */
    public function addClassLesson(\CloudPod\ClassroomBundle\Entity\Lessons $classLesson)
    {
        $this->classLesson[] = $classLesson;
    
        return $this;
    }

    /**
     * Remove classLesson
     *
     * @param CloudPod\ClassroomBundle\Entity\Lessons $classLesson
     */
    public function removeClassLesson(\CloudPod\ClassroomBundle\Entity\Lessons $classLesson)
    {
        $this->classLesson->removeElement($classLesson);
    }

    /**
     * Get classLesson
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getClassLesson()
    {
        return $this->classLesson;
    }

    /**
     * Add classAnnouncement
     *
     * @param CloudPod\ClassroomBundle\Entity\Announcements $classAnnouncement
     * @return Classroom
     */
    public function addClassAnnouncement(\CloudPod\ClassroomBundle\Entity\Announcements $classAnnouncement)
    {
        $this->classAnnouncement[] = $classAnnouncement;
    
        return $this;
    }

    /**
     * Remove classAnnouncement
     *
     * @param CloudPod\ClassroomBundle\Entity\Announcements $classAnnouncement
     */
    public function removeClassAnnouncement(\CloudPod\ClassroomBundle\Entity\Announcements $classAnnouncement)
    {
        $this->classAnnouncement->removeElement($classAnnouncement);
    }

    /**
     * Get classAnnouncement
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getClassAnnouncement()
    {
        return $this->classAnnouncement;
    }

    /**
     * Set classKeySalt
     *
     * @param string $classKeySalt
     * @return Classroom
     */
    public function setClassKeySalt($classKeySalt)
    {
        $this->classKeySalt = $classKeySalt;
    
        return $this;
    }

    /**
     * Get classKeySalt
     *
     * @return string 
     */
    public function getClassKeySalt()
    {
        return $this->classKeySalt;
    }

    /**
     * Add resources
     *
     * @param CloudPod\ClassroomBundle\Entity\ClassResources $resources
     * @return Classroom
     */
    public function addResource(\CloudPod\ClassroomBundle\Entity\ClassResources $resources)
    {
        $this->resources[] = $resources;
    
        return $this;
    }

    /**
     * Remove resources
     *
     * @param CloudPod\ClassroomBundle\Entity\ClassResources $resources
     */
    public function removeResource(\CloudPod\ClassroomBundle\Entity\ClassResources $resources)
    {
        $this->resources->removeElement($resources);
    }

    /**
     * Get resources
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Add submissions
     *
     * @param CloudPod\ClassroomBundle\Entity\ClassSubmissions $submissions
     * @return Classroom
     */
    public function addSubmission(\CloudPod\ClassroomBundle\Entity\ClassSubmissions $submissions)
    {
        $this->submissions[] = $submissions;
    
        return $this;
    }

    /**
     * Remove submissions
     *
     * @param CloudPod\ClassroomBundle\Entity\ClassSubmissions $submissions
     */
    public function removeSubmission(\CloudPod\ClassroomBundle\Entity\ClassSubmissions $submissions)
    {
        $this->submissions->removeElement($submissions);
    }

    /**
     * Get submissions
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }
}