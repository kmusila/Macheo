<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblrole")
 * @author Samina 
 */

class E_role
{
	
	/**
	 * @Id
	 * @Column(name="roleID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $roleID;
	 
	 
	/**
	 * @Column(name="roleType",type="string", length=45, nullable=false)
	 */
	private $roleType;
	
	
	/**
	 * @Column(name="description",type="text", nullable=false)
	 */
	private $description;
	
					 
    public function getroleID() { return $this->roleID; }
    public function setroleID($roleID) { $this->roleID = $roleID; }
    
    public function getroleType() { return $this->roleType; }
	public function setroleType($roleType) { $this->roleType = $roleType; }
	
    public function getdescription() { return $this->description; }
	public function setdescription($description) { $this->description = $description; }
}
