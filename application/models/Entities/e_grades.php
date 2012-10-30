<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblgrades")
 * @author Samina 
 */

class E_grades
{
	
	/**
	 * @Id
	 * @Column(name="gradeID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $gradeID;
	 
	 
	/**
	 * @Column(name="quizMark",type="integer", length=11, nullable=false)
	 */
	private $quizMark;
	
	
	/**
	 * @Column(name="academicYear",type="string", length=45, nullable=false)
	 */
	private $academicYear;
	
	
	/**
	 * @Column(name="academicTerm",type="string", length=45, nullable=false)
	 */
	private $academicTerm;
	
	
	/**
	 * @Column(name="tblMentees_menteeID",type="integer", length=11, nullable=false)
	 */
	private $tblMentees_menteeID;
	
	
	/**
	 * @Column(name="tblsession_sessionID",type="integer", length=11, nullable=false)
	 */
	private $tblsession_sessionID;
	
		
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $date;
	
		 	 
    public function getgradeID	() { return $this->gradeID	; }
    public function setgradeID	($gradeID	) { $this->gradeID	 = $gradeID	; }
    
    public function getgrade() { return $this->grade; }
	public function setgrade($grade) { $this->grade = $grade; }
	
    public function getacademicYear() { return $this->academicYear; }
    public function setacademicYear($academicYear) { $this->academicYear = $academicYear; }
	
	public function getacademicTerm() { return $this->academicTerm; }
    public function setacademicTerm($academicTerm) { $this->academicTerm = $academicTerm; }
	
	public function gettblMentees_menteeID() { return $this->tblMentees_menteeID; }
    public function settblMentees_menteeID($tblMentees_menteeID) { $this->tblMentees_menteeID = $tblMentees_menteeID; }

	public function gettblsession_sessionID() { return $this->tblsession_sessionID; }
    public function settblsession_sessionID($tblsession_sessionID) { $this->tblsession_sessionID = $tblsession_sessionID; }

	public function getdate() { return $this->date; }
    public function setdate($date) { $this->date = $date; }
}
