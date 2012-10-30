<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblsubject")
 * @author Samina 
 */

class E_subject
{
	
	/**
	 * @Id
	 * @Column(name="subjectID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $subjectID;
	 
	 
	/**
	 * @Column(name="subjectName",type="string", length=45, nullable=false)
	 */
	private $subjectName;
	
	
	/**
	 * @Column(name="subjectDescription",type="text", nullable=false)
	 */
	private $subjectDescription;
	
	
	/**
	 * @Column(name="tblUsers_userID",type="integer", length=11, nullable=false)
	 */
	private $tblUsers_userID;
	
	 	 
    public function getsubjectID() { return $this->subjectID; }
    public function setsubjectID($subjectID) { $this->subjectID = $subjectID; }
    
    public function getsubjectName() { return $this->subjectName; }
	public function setsubjectName($subjectName) { $this->subjectName = $subjectName; }
	
    public function getsubjectDescription() { return $this->subjectDescription; }
    public function setsubjectDescription($subjectDescription) { $this->subjectDescription = $subjectDescription; }
	
	public function gettblUsers_userID() { return $this->tblUsers_userID; }
    public function settblUsers_userID($tblUsers_userID) { $this->tblUsers_userID = $tblUsers_userID; }

}
