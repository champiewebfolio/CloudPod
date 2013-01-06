<?php
namespace CloudPod\ClassroomBundle\Entity;
//use Doctrine\Common\Collections\ArrayCollection;

class Announcements
{

    // @var auto integer
    protected $announcementID;

	// @var string
	protected $announcementTitle;

	// @var text
	protected $announcementContent;

	// @var datetime
	protected $announcementCreatedAt;

	//fk class id
	protected $announcementClass;

    /**
     * Constructor
    */
    public function __construct()
    {
        date_default_timezone_set('Asia/Manila');
        $this->announcementCreatedAt = new \DateTime("now");
      //  $this->announcementClass = new ArrayCollection();
    }
    



    /**
     * Get announcementID
     *
     * @return integer 
     */
    public function getAnnouncementID()
    {
        return $this->announcementID;
    }

    /**
     * Set announcementTitle
     *
     * @param string $announcementTitle
     * @return Announcements
     */
    public function setAnnouncementTitle($announcementTitle)
    {
        $this->announcementTitle = $announcementTitle;
    
        return $this;
    }

    /**
     * Get announcementTitle
     *
     * @return string 
     */
    public function getAnnouncementTitle()
    {
        return $this->announcementTitle;
    }

    /**
     * Set announcementContent
     *
     * @param string $announcementContent
     * @return Announcements
     */
    public function setAnnouncementContent($announcementContent)
    {
        $this->announcementContent = $announcementContent;
    
        return $this;
    }

    /**
     * Get announcementContent
     *
     * @return string 
     */
    public function getAnnouncementContent()
    {
        return $this->announcementContent;
    }

    /**
     * Set announcementCreatedAt
     *
     * @param \DateTime $announcementCreatedAt
     * @return Announcements
     */
    public function setAnnouncementCreatedAt($announcementCreatedAt)
    {
        $this->announcementCreatedAt = $announcementCreatedAt;
    
        return $this;
    }

    /**
     * Get announcementCreatedAt
     *
     * @return \DateTime 
     */
    public function getAnnouncementCreatedAt()
    {
        return $this->announcementCreatedAt;
    }
}