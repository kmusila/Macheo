<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblacademiclevel")
 * @author Samina 
 */

class E_academiclevel
{
	
	/**
	 * @Id
	 * @Column(name="AcademicLevelID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $AcademicLevelID;
	 
		 
	/**
	 * @Column(name="formName",type="string", length=45, nullable=false)
	 */
	private $formName;
	
		
    public function getAcademicLevelID() { return $this->AcademicLevelID; }
    public function setAcademicLevelID($AcademicLevelID) { $this->AcademicLevelID = $AcademicLevelID; }
    
    public function getformName() { return $this->formName; }
	public function setformName($formName) { $this->formName = formName; }
	
}
