<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tbltrainings")
 * @author Samina 
 */

class E_trainings
{
	
	/**
	 * @Id
	 * @Column(name="trainingID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $trainingID;
	 
	 
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $date;
	
	
	/**
     * @Column(name="venue", type="text", nullable=false)
	 */
	private $venue;
	
	
	/**
	 * @Column(name="activity",type="text", nullable=false)
	 */
	private $activity;
	
	
	/**
	 * @Column(name="description",type="text", nullable=false)
	 */
	private $description;
	
	
	/**
	 * @Column(name="trainer",type="string", length=45, nullable=true)
	 */
	private $trainer;
	
	
	/**
	 * @Column(name="tblUsers_userID",type="integer", length=11, nullable=false)
	 */
	private $tblUsers_userID;
	
	public function gettrainingID() { return $this->trainingID; }
    public function settrainingID($trainingID) { $this->trainingID = $trainingID; }
	
	public function getdate() { return $this->date; }
    public function setdate($date) { $this->date = $date; }
		
    public function getvenue() { return $this->venue; }
    public function setvenue($venue) { $this->venue = $venue; }
	
	public function getactivity() { return $this->activity; }
    public function setactivity($activity) { $this->activity = $activity; }
	
	public function getdescription() { return $this->description; }
    public function setdescription($description) { $this->description = $description; }

	public function gettrainer() { return $this->trainer; }
    public function settrainer($trainer) { $this->trainer = $trainer; }
	
	public function tbltblUsers_userID() { return $this->tblUsers_userID; }
    public function settblUsers_userID($tblUsers_userID) { $this->tblUsers_userID = $tblUsers_userID; }
	
}
