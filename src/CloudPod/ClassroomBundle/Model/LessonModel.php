<?php
namespace CloudPod\ClassroomBundle\Model;

class LessonModel
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

    protected $collaborationURL;

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
    public function setLessonFileID(\CloudPod\ClassroomBundle\Entity\LessonFileUploads $lessonFileID = null)
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


/* ----------------------------------
UPLOAD FILE
----------------------------------*/
    	// @var auto integer
	protected $fileID;
	// @var string
	protected $name;
	// @var string
	protected $path;
	// @var string
	protected $mimeType;
	// @var integer
	protected $size;
    //not persisted on db
    protected $dynamicLoc;

    protected $file;
  /**
     * Get fileID
     *
     * @return integer 
     */
    public function getFileID()
    {
        return $this->fileID;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return LessonFileUploads
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return LessonFileUploads
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set mimeType
     *
     * @param string $mimeType
     * @return LessonFileUploads
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    
        return $this;
    }

    /**
     * Get mimeType
     *
     * @return string 
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return LessonFileUploads
     */
    public function setSize($size)
    {
        $this->size = $size;
    
        return $this;
    }

    /**
     * Get size
     *
     * @return integer 
     */
    public function getSize()
    {
        return $this->size;
    }

       /**
     * Set name
     *
     * @param string $name
     * @return LessonFileUploads
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

        public function setCollaborationURL($collaborationURL)
    {
        $this->collaborationURL = $collaborationURL;
    
        return $this;
    }

    public function getCollaborationURL()
    {
        return $this->collaborationURL;
    }


}