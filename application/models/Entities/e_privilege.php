<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblprivilege")
 * @author Samina 
 */

class E_privilege
{
	
	/**
	 * @Id
	 * @Column(name="privilegeID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $privilegeID;
	 
	
	/**
	 * @Column(name="privilegeType",type="string", length=45, nullable=false)
	 */
	private $privilegeType;
	
	
	/**
	 * @Column(name="description",type="text", nullable=false)
	 */
	private $description;
	 	 
    public function getprivilegeID() { return $this->privilegeID; }
    public function setprivilegeID($privilegeID) { $this->privilegeID = $privilegeID; }
    
    public function getprivilegeType() { return $this->privilegeType; }
	public function setprivilegeType($privilegeType) { $this->privilegeType = $privilegeType; }
	
	public function getdescription() { return $this->description; }
	public function setdescription($description) { $this->description = $description; }
	
}
