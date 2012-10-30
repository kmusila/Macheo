<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblresources")
 * @author Samina 
 */

class E_resources
{
	
	/**
	 * @Id
	 * @Column(name="resourceID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $resourceID;
	 
	 
	/**
	 * @Column(name="resourceName",type="string", length=100, nullable=false)
	 */
	private $resourceName;
	
	
	/**
	 * @Column(name="description",type="text", nullable=true)
	 */
	private $description;
	
	
	/**
	 * @Column(name="tblprivilege_privilegeID",type="integer", length=11, nullable=false)
	 */
	private $tblprivilege_privilegeID;
	
	
    public function getresourceID() { return $this->resourceID; }
    public function setresourceID($resourceID) { $this->resourceID = $resourceID; }
    
    public function getresourceName() { return $this->resourceName; }
	public function setresourceName($resourceName) { $this->resourceName = $resourceName; }
	
    public function getdescription() { return $this->description; }
    public function setdescription($description) { $this->description = $description; }
	
	public function gettblprivilege_privilegeID() { return $this->tblprivilege_privilegeID; }
    public function settblprivilege_privilegeID($tblprivilege_privilegeID) { $this->tblprivilege_privilegeID = $tblprivilege_privilegeID; }
	
}
