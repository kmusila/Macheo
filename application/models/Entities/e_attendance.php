<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblattendance")
 * @author Samina 
 */

class E_attendance
{
	
	/**
	 * @Id
	 * @Column(name="attendanceID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $attendanceid;
	 
	/**
	 * @Column(name="Date",type="date", nullable=false)
	 */
	private $Date;
	 
	/**
	 * @Column(name="sessionType",type="string", length=100, nullable=false)
	 */
	private $sessionType;
	
	
	/**
	 * @Column(name="present_absent",type="integer", length=1, nullable=false)
	 */
	private $present_absent;
	
	
	/**
	 * @Column(name="reasonForAbsence",type="text", nullable=true)
	 */
	private $reasonForAbsence;
	
	
	/**
	 * @Column(name="tblMentees_menteeID1",type="integer", length=11, nullable=false)
	 */
	private $tblMentees_menteeID1;
	
	 
	 /**
	 * @Column(name="tblMentors_mentorID1",type="integer", length=11, nullable=false)
	 */
	private $tblMentors_mentorID1;
	
	 
	 /**
	 * @Column(name="tblUsers_userID",type="integer", length=11, nullable=false)
	 */
	private $tblUsers_userID;
	
	
    public function getAttendanceid() { return $this->attendanceid; }
    public function setAttendanceid($attendanceid) { $this->attendanceid = $attendanceid; }
    
    public function getDate() { return $this->Date; }
	public function setDate($Date) { $this->Date = $Date; }
	
    public function getSessionType() { return $this->sessionType; }
    public function setSessionType($sessionType) { $this->sessionType = $sessionType; }
	
	public function getpresent_absent() { return $this->present_absent; }
    public function setpresent_absent($present_absent) { $this->present_absent = $present_absent; }
	
	public function getreasonForAbsence() { return $this->reasonForAbsence; }
    public function setreasonForAbsence($reasonForAbsence) { $this->reasonForAbsence = $reasonForAbsence; }
	
	public function gettblMentees_menteeID1() { return $this->tblMentees_menteeID1; }
    public function settblMentees_menteeID1($tblMentees_menteeID1) { $this->tblMentees_menteeID1 = $tblMentees_menteeID1; }
	
	public function gettblMentors_mentorID1() { return $this->tblMentors_mentorID1; }
    public function settblMentors_mentorID1($tblMentors_mentorID1) { $this->tblMentors_mentorID1 = $tblMentors_mentorID1; }
	
	public function gettblUsers_userID() { return $this->tblUsers_userID; }
    public function settblUsers_userID($tblUsers_userID) { $this->tblUsers_userID = $tblUsers_userID; }
	
}
