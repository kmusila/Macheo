<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblfeedback")
 * @author Samina 
 */

class E_feedback
{
	
	/**
	 * @Id
	 * @Column(name="feedbackID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $feedbackID;
	
	/**
	 * @Column(name="name",type="string", length=50, nullable=false)
	 */
	private $name;
	
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $date;
	 	
	/**
	 * @Column(name="commentType",type="string", length=45, nullable=false)
	 */
	private $commentType;
	
	
	/**
	 * @Column(name="comment",type="text", nullable=false)
	 */
	private $comment;
	
	
	/**
	 * @Column(name="tblMentors_mentorID",type="integer", length=11, nullable=false)
	 */
	private $tblMentors_mentorID;
	
			
    public function getfeedbackID() { return $this->feedbackID; }
    public function setfeedbackID($feedbackID) { $this->feedbackID = $feedbackID; }
    
	public function getname() { return $this->name; }
    public function setname($name) { $this->name = $name; }
	
    public function getDate() { return $this->date; }
	public function setDate($date) { $this->date = $date; }
		
	public function getcommentType() { return $this->commentType; }
    public function setcommentType($commentType) { $this->commentType = $commentType; }
	
	public function getcomment() { return $this->comment; }
    public function setcomment($comment) { $this->comment = $comment; }

	public function gettblMentors_mentorID() { return $this->tblMentors_mentorID; }
    public function settblMentors_mentorID($tblMentors_mentorID) { $this->tblMentors_mentorID = $tblMentors_mentorID; }
}
