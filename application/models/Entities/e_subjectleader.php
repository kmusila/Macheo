<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblsubjectleader")
 * @author Samina 
 */

class E_subjectleader
{
	 
	/**
	 * @Column(name="tblMentors_mentorID",type="integer", length=11, nullable=false)
	 */
	private $tblMentors_mentorID;
	
	
	/**
	 * @Column(name="tblSubject_subjectID",type="integer", length=11, nullable=false)
	 */
	private $tblSubject_subjectID;
	
	 	 
    public function gettblMentors_mentorID() { return $this->tblMentors_mentorID; }
    public function settblMentors_mentorID($tblMentors_mentorID) { $this->tblMentors_mentorID = $tblMentors_mentorID; }
    
    public function gettblSubject_subjectID() { return $this->tblSubject_subjectID; }
	public function settblSubject_subjectID($tblSubject_subjectID) { $this->tblSubject_subjectID = $tblSubject_subjectID; }
	
}
