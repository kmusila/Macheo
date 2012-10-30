<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblmentors")
 * @author Samina 
 */

class E_mentors
{
	
	/**
	 * @Id
	 * @Column(name="mentorID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $mentorID;
	 
	 
	/**
	 * @Column(name="surname",type="string", length=45, nullable=false)
	 */
	private $surname;
	
	
	/**
	 * @Column(name="otherNames",type="string", length=45, nullable=false)
	 */
	private $otherNames;
	
	
	/**
	 * @Column(name="gender",type="string", length=6, nullable=false)
	 */
	private $gender;
	
	
	/**
	 * @Column(name="DOB",type="date", nullable=false)
	 */
	private $DOB;
	
	
	/**
	 * @Column(name="email",type="string", length=100, nullable=false)
	 */
	private $email;
	
	/**
	 * @Column(name="mobileNumber",type="integer", length=11, nullable=false)
	 */
	private $mobileNumber;
	
	
	/**
	 * @Column(name="mobileNumber2",type="integer", length=11, nullable=true)
	 */
	private $mobileNumber2;
	
	
	/**
	 * @Column(name="course",type="string", length=45, nullable=false)
	 */
	private $course;
	
	
	/**
	 * @Column(name="year",type="string", length=45, nullable=false)
	 */
	private $year;
	
	
	/**
	 * @Column(name="institution",type="string", length=100, nullable=false)
	 */
	private $institution;
	
	
	/**
	 * @Column(name="subjectStrength1",type="string", length=45, nullable=false)
	 */
	private $subjectStrength1;
	
	
	/**
	 * @Column(name="subjectStrength2",type="string", length=45, nullable=false)
	 */
	private $subjectStrength2;
	
	
	/**
	 * @Column(name="subjectStrength3",type="string", length=45, nullable=true)
	 */
	private $subjectStrength3;	
	
	/**
	 * @Column(name="reasonForJoining",type="text", nullable=false)
	 */
	private $reasonForJoining;
	
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $date;
	
	
	/**
	 * @Column(name="photourl",type="text", nullable=false)
	 */
	private $photourl;
	
	
	
	/**
	 * @Column(name="discontinued",type="string", length=15, nullable=false)
	 */
	private $discontinued;
	
	
	/**
	 * @Column(name="reasonForDiscontinuation",type="text", nullable=true)
	 */
	private $reasonForDiscontinuation;
	
	
	/**
	 * @Column(name="tblMentees_menteeID",type="integer", length=11, nullable=false)
	 */
	private $tblMentees_menteeID;
	
			 
    public function getmentorID() { return $this->mentorID; }
    public function setmentorID($mentorID) { $this->mentorID = $mentorID; }
    
    public function getsurname() { return $this->surname; }
	public function setsurname($surname) { $this->surname = $surname; }
	
    public function getotherNames() { return $this->otherNames; }
    public function setotherNames($otherNames) { $this->otherNames = $otherNames; }
	
	public function getgender() { return $this->gender; }
    public function setgender($gender) { $this->gender = $gender; }
	
	public function getDOB() { return $this->DOB; }
    public function setDOB($DOB) { $this->DOB = $DOB; }
	
	public function getemail() { return $this->email; }
    public function setemail($email) { $this->email = $email; }

	public function getmobileNumber() { return $this->mobileNumber; }
    public function setmobileNumber($mobileNumber) { $this->mobileNumber = $mobileNumber; }
	
	public function getmobileNumber2() { return $this->mobileNumber2; }
    public function setmobileNumber2($mobileNumber2) { $this->mobileNumber2 = $mobileNumber2; }
    
    public function getcourse() { return $this->course; }
	public function setcourse($course) { $this->course = $course; }
	
    public function getyear() { return $this->year; }
    public function setyear($year) { $this->year = $year; }
	
	public function getinstitution() { return $this->institution; }
    public function setinstitution($institution) { $this->institution = $institution; }
		
	public function getsubjectStrength1() { return $this->subjectStrength1; }
    public function setsubjectStrength1($subjectStrength1) { $this->subjectStrength1 = $subjectStrength1; }
	
	public function getsubjectStrength2() { return $this->subjectStrength2; }
    public function setsubjectStrength2($subjectStrength2) { $this->subjectStrength2 = $subjectStrength2; }
	
	public function getsubjectStrength3() { return $this->subjectStrength3; }
    public function setsubjectStrength3($subjectStrength3) { $this->subjectStrength3 = $subjectStrength3; }
	
	public function getreasonForJoining() { return $this->reasonForJoining; }
    public function setreasonForJoining($reasonForJoining) { $this->reasonForJoining = $reasonForJoining; }
	
	public function getdate() { return $this->date; }
    public function setdate($date) { $this->date = $date; }
	
	public function getphotourl() { return $this->photourl; }
    public function setphotourl($photourl) { $this->photourl = $photourl; }
    
    public function getdiscontinued() { return $this->discontinued; }
	public function setdiscontinued($discontinued) { $this->discontinued = $discontinued; }
	
    public function getreasonForDiscontinuation() { return $this->reasonForDiscontinuation; }
    public function setreasonForDiscontinuation($reasonForDiscontinuation) { $this->reasonForDiscontinuation = $reasonForDiscontinuation; }
	
	public function gettblMentees_menteeID() { return $this->tblMentees_menteeID; }
    public function settblMentees_menteeID($tblMentees_menteeID) { $this->tblMentees_menteeID = $tblMentees_menteeID; }
	
}
