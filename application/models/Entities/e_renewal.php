<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblrenewal")
 * @author Samina 
 */

class E_renewal
{
	
	/**
	 * @Id
	 * @Column(name="renewalID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $renewalID;
	 
	 
	/**
	 * @Column(name="startDate",type="date", nullable=false)
	 */
	private $startDate;
	
	
	/**
	 * @Column(name="endDate",type="date", nullable=false)
	 */
	private $endDate;
	
	
	/**
	 * @Column(name="tblMentors_mentorID",type="integer", length=11, nullable=false)
	 */
	private $tblMentors_mentorID;
	
			 
    public function getrenewalID() { return $this->renewalID; }
    public function setrenewalID($renewalID) { $this->renewalID = $renewalID; }
    
    public function getstartDate() { return $this->startDate; }
	public function setstartDate($startDate) { $this->startDate = $startDate; }
	
    public function getendDate() { return $this->endDate; }
    public function setendDate($endDate) { $this->endDate = $endDate; }
	
	public function gettblMentors_mentorID() { return $this->tblMentors_mentorID; }
    public function settblMentors_mentorID($tblMentors_mentorID) { $this->tblMentors_mentorID = $tblMentors_mentorID; }
	
}
