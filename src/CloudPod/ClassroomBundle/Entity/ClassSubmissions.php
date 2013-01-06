<?php
namespace CloudPod\ClassroomBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;


class ClassSubmissions
{
	public $submissionID;

	public $name;

	public $path;

    public $file;

    public $mimeType;

    public $size;

    public $dynamicLoc;

    protected $submittedBy;

     public function __construct()
    {
     $this->size=$this->getSize();
     $this->mimeType=$this->getMimeType();
    
     }

    public function getAbsolutePath()
    {
        return null === $this->path
            ? null
            : $this->getUploadRootDir().'/'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path
            ? null
            : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // the absolute directory path where uploaded
        // documents should be saved
        return __DIR__.'/../../../../web/files/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // get rid of the __DIR__ so it doesn't screw up
        // when displaying uploaded doc/image in the view.
        $location = $this->getDynamicLoc();
        return 'uploads/resources/'.$location;
    }


    public function preUpload()
    {
        if (null !== $this->file) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->file->guessExtension();
            $this->setSize($this->file->getClientSize());
            $this->setMimeType($this->file->getMimeType());

        }
    }


    public function upload()
    {
        if (null === $this->file) {
           // $this->setMimeType($this->file->guessExtension());
           
            return;
        }
       //  

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file->move($this->getUploadRootDir(), $this->path);

        unset($this->file);
    }


    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    }


      /**
     * Set file
     *
     * @param string $file
     * @return Document
     */
    public function setFile($file)
    {
        $this->file = $file;
    
        return $this;
    }

    /**
     * Get file
     *
     * @return string 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Get submissionID
     *
     * @return integer 
     */
    public function getSubmissionID()
    {
        return $this->submissionID;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ClassSubmissions
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
     * @return ClassSubmissions
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
     * @return ClassSubmissions
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
     * @return ClassSubmissions
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
     * Set dynamicLoc
     *
     * @param integer $dynamicLoc
     * @return ClassSubmissions
     */
    public function setDynamicLoc($dynamicLoc)
    {
        $this->dynamicLoc = $dynamicLoc;
    
        return $this;
    }

    /**
     * Get dynamicLoc
     *
     * @return integer 
     */
    public function getDynamicLoc()
    {
        return $this->dynamicLoc;
    }

    /**
     * Add submittedBy
     *
     * @param CloudPod\UserBundle\Entity\User $submittedBy
     * @return ClassSubmissions
     */
    public function addSubmittedBy(\CloudPod\UserBundle\Entity\User $submittedBy)
    {
        $this->submittedBy[] = $submittedBy;
    
        return $this;
    }

    /**
     * Remove submittedBy
     *
     * @param CloudPod\UserBundle\Entity\User $submittedBy
     */
    public function removeSubmittedBy(\CloudPod\UserBundle\Entity\User $submittedBy)
    {
        $this->submittedBy->removeElement($submittedBy);
    }

    /**
     * Get submittedBy
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getSubmittedBy()
    {
        return $this->submittedBy;
    }
}