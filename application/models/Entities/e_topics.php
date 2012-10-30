<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tbltopics")
 * @author Samina 
 */

class E_topics
{
	
	/**
	 * @Id
	 * @Column(name="topicID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $topicID;
	 
	 
	/**
	 * @Column(name="topicName",type="string", length=150, nullable=false)
	 */
	private $topicName;
	
	
	/**
     * @Column(name="topicObjectives",type="text", nullable=false)
	 */
	private $topicObjectives;
	
	
	/**
	 * @Column(name="topicContents",type="text", nullable=false)
	 */
	private $topicContents;
	
	
	/**
	 * @Column(name="prerequisite1",type="string", length=45, nullable=true)
	 */
	private $prerequisite1;
	
	
	/**
	 * @Column(name="prerequisite2",type="string", length=45, nullable=true)
	 */
	private $prerequisite2;
	
	
	/**
	 * @Column(name="prerequisite3",type="string", length=45, nullable=true)
	 */
	private $prerequisite3;
	
	
	/**
	 * @Column(name="tblsubject_subjectID",type="integer", length=11, nullable=true)
	 */
	private $tblsubject_subjectID;
	
	
	/**
	 * @Column(name="tblAcademicLevel_AcademicLevelID",type="integer", length=11, nullable=true)
	 */
	private $tblAcademicLevel_AcademicLevelID;
	
		
    public function gettopicID() { return $this->topicID; }
    public function settopicID($topicID) { $this->topicID = $topicID; }
	
	public function gettopicName() { return $this->topicName; }
    public function settopicName($topicName) { $this->topicName = $topicName; }
	
	public function gettopicObjectives() { return $this->topicObjectives; }
    public function settopicObjectives($topicObjectives) { $this->topicObjectives = $topicObjectives; }

	public function gettopicContents() { return $this->topicContents; }
    public function settopicContents($topicContents) { $this->topicContents = $topicContents; }
	
	public function getprerequisite1() { return $this->prerequisite1; }
    public function setprerequisite1($prerequisite1) { $this->prerequisite1 = $prerequisite1; }
	
	public function getprerequisite2() { return $this->prerequisite2; }
    public function setprerequisite2($prerequisite2) { $this->prerequisite2 = $prerequisite2; }
	
	public function getprerequisite3() { return $this->prerequisite3; }
    public function setprerequisite3($prerequisite3) { $this->prerequisite3 = $prerequisite3; }
	
	public function gettblsubject_subjectID() { return $this->tblsubject_subjectID; }
    public function settblsubject_subjectID($tblsubject_subjectID) { $this->tblsubject_subjectID = $tblsubject_subjectID; }
	
	public function gettblAcademicLevel_AcademicLevelID() { return $this->tblAcademicLevel_AcademicLevelID; }
    public function settblAcademicLevel_AcademicLevelID($tblAcademicLevel_AcademicLevelID) { $this->tblAcademicLevel_AcademicLevelID = $tblAcademicLevel_AcademicLevelID; }
	
}
