<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblsession")
 * @author Samina 
 */

class E_session
{
	
	/**
	 * @Id
	 * @Column(name="sessionID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $sessionID;
	 	 
	
	/**
	 * @Column(name="sessionTitle",type="text", nullable=false)
	 */
	private $sessionTitle;
	
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $date;
	
	
	/**
	 * @Column(name="tbltopics_topicID",type="integer", length=11, nullable=false)
	 */
	private $tbltopics_topicID;
	
	
	/**
	 * @Column(name="tblmentors_mentorID",type="integer", length=11, nullable=false)
	 */
	private $tblmentors_mentorID;
	
		
    public function getsessionID() { return $this->sessionID; }
    public function setsessionID($sessionID) { $this->sessionID = $sessionID; }
    
	public function getsessionTitle() { return $this->sessionTitle; }
    public function setsessionTitle($sessionTitle) { $this->sessionTitle = $sessionTitle; }

	public function getdate() { return $this->date; }
	public function setdate($date) { $this->date = $date; }
	
	public function gettbltopics_topicID() { return $this->tbltopics_topicID; }
    public function settbltopics_topicID($tbltopics_topicID) { $this->tbltopics_topicID = $tbltopics_topicID; }	
  
	public function gettblmentors_mentorID() { return $this->tblmentors_mentorID; }
    public function settblmentors_mentorID($tblmentors_mentorID) { $this->tblmentors_mentorID = $tblmentors_mentorID; }
}
