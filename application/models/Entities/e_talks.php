<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tbltalks")
 * @author Samina 
 */

class E_talks
{
	
	/**
	 * @Id
	 * @Column(name="talkID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $talkID;
	 
	 
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $date;
	
	
	/**
	 * @Column(name="topic",type="string", length=45, nullable=false)
	 */
	private $topic;
	
	
	/**
	 * @Column(name="guestSpeaker",type="string", length=45, nullable=false)
	 */
	private $guestSpeaker;
	
	
	/**
	 * @Column(name="institution",type="text", nullable=false)
	 */
	private $institution;
	
	
	/**
	 * @Column(name="description",type="text", nullable=true)
	 */
	private $description;
	
	
	/**
	 * @Column(name="tblUsers_userID",type="integer", length=11, nullable=false)
	 */
	private $tblUsers_userID;
	
		 	 
    public function gettalkID() { return $this->talkID; }
    public function settalkID($talkID) { $this->talkID = $talkID; }
    
    public function getdate() { return $this->date; }
	public function setdate($date) { $this->date = $date; }
	
    public function gettopic() { return $this->topic; }
    public function settopic($topic) { $this->topic = $topic; }
	
	public function getguestSpeaker() { return $this->guestSpeaker; }
    public function setguestSpeaker($guestSpeaker) { $this->guestSpeaker = $guestSpeaker; }
	
	public function getinstitution() { return $this->institution; }
    public function setinstitution($institution) { $this->institution = $institution; }

	public function getdescription() { return $this->description; }
    public function setdescription($description) { $this->description = $description; }
	
	public function gettblUsers_userID() { return $this->tblUsers_userID; }
    public function settblUsers_userID($tblUsers_userID) { $this->tblUsers_userID = $tblUsers_userID; }
	
}
