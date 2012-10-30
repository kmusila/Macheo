<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblmentees")
 * @author Samina 
 */

class E_mentees
{
	
	/**
	 * @Id
	 * @Column(name="menteeID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $menteeID;
	 
	 
	/**
	 * @Column(name="surname",type="string", length=45, nullable=false)
	 */
	private $surname;
	
	
	/**
	 * @Column(name="otherNames",type="string", length=45, nullable=false)
	 */
	private $otherNames;
	
	
	/**
	 * @Column(name="institution",type="string", length=45, nullable=false)
	 */
	private $institution;
	
	
	/**
	 * @Column(name="gender",type="string", length=6, nullable=false)
	 */
	private $gender;
	
	
	/**
	 * @Column(name="DOB",type="date", nullable=false)
	 */
	private $DOB;
	
	
	/**
	 * @Column(name="socialGoals",type="text", nullable=true)
	 */
	private $socialGoals;
	
	/**
	 * @Column(name="academicGoals",type="text", nullable=true)
	 */
	private $academicGoals;
	
	
	/**
	 * @Column(name="subjectneed1",type="string", length=20, nullable=false)
	 */
	private $subjectneed1;
	
	
	/**
	 * @Column(name="subjectneed2",type="string", length=20, nullable=false)
	 */
	private $subjectneed2;
	
	
	/**
	 * @Column(name="fathersName",type="string", length=45, nullable=true)
	 */
	private $fathersName;
	
	
	/**
	 * @Column(name="fContacts",type="string", length=11, nullable=true)
	 */
	private $fContacts;
	
	
	/**
	 * @Column(name="fOccupation",type="string", length=45, nullable=true)
	 */
	private $fOccupation;
	
	
	/**
	 * @Column(name="mothersName",type="string", length=45, nullable=true)
	 */
	private $mothersName;
	
	
	/**
	 * @Column(name="mContacts",type="string", length=11, nullable=true)
	 */
	private $mContacts;
	
	
	/**
	 * @Column(name="mOccupation",type="string", length=45, nullable=true)
	 */
	private $mOccupation;
	
	/**
	 * @Column(name="guardianNames",type="string", length=45, nullable=true)
	 */
	private $guardianNames;
	
	/**
	 * @Column(name="gcontacts",type="string", length=10, nullable=true)
	 */
	private $gcontacts;
	
	
	/**
	 * @Column(name="goccupation",type="string", length=45, nullable=true)
	 */
	private $goccupation;
	
	
	/**
	 * @Column(name="siblings",type="integer", length=2, nullable=false)
	 */
	private $siblings;
	
	
	/**
	 * @Column(name="discontinued",type="string", length=15, nullable=false)
	 */
	private $discontinued;
	
	
	/**
	 * @Column(name="reason",type="text", nullable=true)
	 */
	private $reason;
	
	
	/**
	 * @Column(name="homeLocation",type="string", length=45, nullable=false)
	 */
	private $homeLocation;
	
	
	/**
	 * @Column(name="status",type="string", length=45, nullable=false)
	 */
	private $status;
	
	
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $Date;
	
	
	/**
	 * @Column(name="photourl",type="text", nullable=false)
	 */
	private $photourl;
	
	
	/**
	 * @Column(name="tblMentors_mentorID",type="integer", length=11, nullable=false)
	 */
	private $tblMentors_mentorID;
	
	
	/**
	 * @Column(name="tblusers_userID",type="integer", length=11, nullable=false)
	 */
	private $tblusers_userID;
	
	
    /**
	 * @Column(name="tblAcademicLevel_AcademicLevelID",type="integer", length=11, nullable=false)
	 */
	private $tblAcademicLevel_AcademicLevelID;	
	
    public function getmenteeID() { return $this->menteeID; }
    public function setmenteeID($menteeID) { $this->menteeID = $menteeID; }
    
    public function getsurname() { return $this->surname; }
	public function setsurname($surname) { $this->surname = $surname; }
	
    public function getotherNames() { return $this->otherNames; }
    public function setotherNames($otherNames) { $this->otherNames = $otherNames; }
	
	public function getinstitution() { return $this->institution; }
    public function setinstitution($institution) { $this->institution = $institution; }
	
	public function getgender() { return $this->gender; }
    public function setgender($gender) { $this->gender = $gender; }

	public function getDOB() { return $this->DOB; }
    public function setDOB($DOB) { $this->DOB = $DOB; }
	
	public function getsocialGoals() { return $this->socialGoals; }
    public function setsocialGoals($socialGoals) { $this->socialGoals = $socialGoals; }
	
	public function getacademicGoals() { return $this->academicGoals; }
    public function setacademicGoals($academicGoals) { $this->academicGoals = $academicGoals; }
    
	public function getsubjectneed1() { return $this->subjectneed1; }
	public function setsubjectneed1($subjectneed1) { $this->subjectneed1 = $subjectneed1; }
	
	public function getsubjectneed2() { return $this->subjectneed2; }
	public function setsubjectneed2($subjectneed2) { $this->subjectneed2 = $subjectneed2; }
	
    public function getfathersName() { return $this->fathersName; }
	public function setfathersName($fathersName) { $this->fathersName = $fathersName; }
	
    public function getfContacts() { return $this->fContacts; }
    public function setfContacts($fContacts) { $this->fContacts = $fContacts; }
	
	public function getfOccupation() { return $this->fOccupation; }
    public function setfOccupation($fOccupation) { $this->fOccupation = $fOccupation; }
	
	public function getmothersName() { return $this->mothersName; }
    public function setmothersName($mothersName) { $this->mothersName = $mothersName; }

	public function getmContacts() { return $this->mContacts; }
    public function setmContacts($mContacts) { $this->mContacts = $mContacts; }
	
	public function getmOccupation() { return $this->mOccupation; }
    public function setmOccupation($mOccupation) { $this->mOccupation = $mOccupation; }
	
	public function getguardianNames() { return $this->guardianNames; }
    public function setguardianNames($guardianNames) { $this->guardianNames = $guardianNames; }
    
    public function getgcontacts() { return $this->gcontacts; }
	public function setgcontacts($gcontacts) { $this->gcontacts = $gcontacts; }
	
    public function getgoccupation() { return $this->goccupation; }
    public function setgoccupation($goccupation) { $this->goccupation = $goccupation; }
	
	public function getsiblings() { return $this->siblings; }
    public function setsiblings($siblings) { $this->siblings = $siblings; }
	
	public function getdiscontinued() { return $this->discontinued; }
    public function setdiscontinued($discontinued) { $this->discontinued = $discontinued; }

	public function getreason() { return $this->reason; }
    public function setreason($reason) { $this->reason = $reason; }
	
	public function gethomeLocation() { return $this->homeLocation; }
    public function sethomeLocation($homeLocation) { $this->homeLocation = $homeLocation; }
	
	public function getstatus() { return $this->status; }
    public function setstatus($status) { $this->status = $status; }
	
	public function getDate() { return $this->Date; }
    public function setDate($date) { $this->Date = $date; }
	
	public function getphotourl() { return $this->photourl; }
    public function setphotourl($photourl) { $this->photourl = $photourl; }
	
	public function gettblMentors_mentorID() { return $this->tblMentors_mentorID; }
    public function settblMentors_mentorID($tblMentors_mentorID) { $this->tblMentors_mentorID = $tblMentors_mentorID; }
	
	public function gettblusers_userID() { return $this->tblusers_userID; }
    public function settblusers_userID($tblusers_userID) { $this->tblusers_userID = $tblusers_userID; }
	
	public function gettblAcademicLevel_AcademicLevelID() { return $this->tblAcademicLevel_AcademicLevelID; }
    public function settblAcademicLevel_AcademicLevelID($tblAcademicLevel_AcademicLevelID) { $this->tblAcademicLevel_AcademicLevelID = $tblAcademicLevel_AcademicLevelID; }
}
