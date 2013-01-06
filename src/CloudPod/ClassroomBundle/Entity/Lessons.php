<?php
namespace CloudPod\ClassroomBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
class Lessons
{

    // @var auto integer
    protected $lessonID;

	// @var string
	protected $lessonTitle;

	// @var text
	protected $lessonDesc;

	// @var text
	protected $lessonContent;

	// @var datetime
	protected $lessonCreatedAt;

	// @var string
	protected $lessonClass;

    protected $lessonFileID;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->lessonClass = new ArrayCollection();
        date_default_timezone_set('Asia/Manila');
        $this->lessonCreatedAt = new \DateTime("now");
    }
    
   

    /**
     * Get lessonID
     *
     * @return integer 
     */
    public function getLessonID()
    {
        return $this->lessonID;
    }

    /**
     * Set lessonTitle
     *
     * @param string $lessonTitle
     * @return Lessons
     */
    public function setLessonTitle($lessonTitle)
    {
        $this->lessonTitle = $lessonTitle;
    
        return $this;
    }

    /**
     * Get lessonTitle
     *
     * @return string 
     */
    public function getLessonTitle()
    {
        return $this->lessonTitle;
    }

    /**
     * Set lessonDesc
     *
     * @param string $lessonDesc
     * @return Lessons
     */
    public function setLessonDesc($lessonDesc)
    {
        $this->lessonDesc = $lessonDesc;
    
        return $this;
    }

    /**
     * Get lessonDesc
     *
     * @return string 
     */
    public function getLessonDesc()
    {
        return $this->lessonDesc;
    }

    /**
     * Set lessonContent
     *
     * @param string $lessonContent
     * @return Lessons
     */
    public function setLessonContent($lessonContent)
    {
        $this->lessonContent = $lessonContent;
    
        return $this;
    }

    /**
     * Get lessonContent
     *
     * @return string 
     */
    public function getLessonContent()
    {
        return $this->lessonContent;
    }

    /**
     * Set lessonCreatedAt
     *
     * @param \DateTime $lessonCreatedAt
     * @return Lessons
     */
    public function setLessonCreatedAt($lessonCreatedAt)
    {
        $this->lessonCreatedAt = $lessonCreatedAt;
    
        return $this;
    }

    /**
     * Get lessonCreatedAt
     *
     * @return \DateTime 
     */
    public function getLessonCreatedAt()
    {
        return $this->lessonCreatedAt;
    }

    /**
     * Set lessonFileID
     *
     * @param CloudPod\ClassroomBundle\Entity\LessonFileUploads $lessonFileID
     * @return Lessons
     */
    public function setLessonFileID(\CloudPod\ClassroomBundle\Entity\LessonFileUpload $lessonFileID = null)
    {
        $this->lessonFileID = $lessonFileID;
    
        return $this;
    }

    /**
     * Get lessonFileID
     *
     * @return CloudPod\ClassroomBundle\Entity\LessonFileUploads 
     */
    public function getLessonFileID()
    {
        return $this->lessonFileID;
    }

    /**
     * Add lessonClass
     *
     * @param CloudPod\ClassroomBundle\Entity\Classroom $lessonClass
     * @return Lessons
     */
    public function addLessonClas(\CloudPod\ClassroomBundle\Entity\Classroom $lessonClass)
    {
        $this->lessonClass[] = $lessonClass;
    
        return $this;
    }

    /**
     * Remove lessonClass
     *
     * @param CloudPod\ClassroomBundle\Entity\Classroom $lessonClass
     */
    public function removeLessonClas(\CloudPod\ClassroomBundle\Entity\Classroom $lessonClass)
    {
        $this->lessonClass->removeElement($lessonClass);
    }

    /**
     * Get lessonClass
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getLessonClass()
    {
        return $this->lessonClass;
    }
}