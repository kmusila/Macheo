<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblexcursions")
 * @author Samina 
 */

class E_excursions
{
	
	/**
	 * @Id
	 * @Column(name="excursionID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $excursionID;
	 
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $date;
	 
	/**
	 * @Column(name="venue",type="text", nullable=false)
	 */
	private $venue;
	
	/**
	 * @Column(name="activity?",type="text", nullable=false)
	 */
	private $activity;
		
	/**
	 * @Column(name="description",type="text", nullable=false)
	 */
	private $description;
	
	/**
	 * @Column(name="tblUsers_userID",type="integer", length=11, nullable=false)
	 */
	private $tblUsers_userID;
	
	 	 
    public function getexcursionID() { return $this->excursionID; }
	public function setexcursionID($excursionID) { $this->excursionID = $excursionID; }
    
    public function getDate() { return $this->date; }
	public function setDate($date) { $this->date = $date; }
	
    public function getvenue() { return $this->venue; }
    public function setvenue($venue) { $this->venue = $venue; }
	
	public function getactivity() { return $this->activity; }
    public function setactivity($activity) { $this->activity;}
	
	public function getdescription() { return $this->description; }
    public function setdescription($description) { $this->description = $description; }

	public function gettblUsers_userID() { return $this->tblUsers_userID; }
    public function settblUsers_userID($tblUsers_userID) { $this->tblUsers_userID = $tblUsers_userID; }
	
}
