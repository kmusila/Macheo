<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblcourse")
 * @author Samina 
 */

class E_course
{
	
	/**
	 * @Id
	 * @Column(name="courseID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $courseID;
	 
	
	/**
	 * @Column(name="courseName",type="text", nullable=false)
	 */
	private $courseName;
	
		
	public function getcourseID() { return $this->courseID; }
    public function setcourseID($courseID) { $this->courseID = $courseID; }
	
	public function getcourseName() { return $this->courseName; }
    public function setcourseName($courseName) { $this->courseName = $courseName; }

}
