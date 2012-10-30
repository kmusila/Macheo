<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblmentor_course")
 * @author Samina 
 */

class E_mentor_course
{
		 
	/**
	 * @Column(name="tblCourse_courseID",type="integer", length=11, nullable=false)
	 */
	private $tblCourse_courseID;
	
	
	/**
	 * @Column(name="tblMentors_mentorID",type="integer", length=11, nullable=false)
	 */
	private $tblMentors_mentorID;
		
			 
    public function gettblCourse_courseID() { return $this->tblCourse_courseID; }
    public function settblCourse_courseID($tblCourse_courseID) { $this->tblCourse_courseID = $tblCourse_courseID; }
    
    public function gettblMentors_mentorID() { return $this->tblMentors_mentorID; }
	public function settblMentors_mentorID($tblMentors_mentorID) { $this->tblMentors_mentorID = $tblMentors_mentorID; }
	
}
