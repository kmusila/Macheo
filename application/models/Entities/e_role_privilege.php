<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblrole_privilege")
 * @author Samina 
 */

class E_role_privilege
{
	
	/**
	 * @Column(name="tblRole_roleID", type="integer", length=11, nullable=false)
	 */
	private $tblRole_roleID;
	 
	 
	/**
	 * @Column(name="tblprivilege_privilegeID",type="integer", length=11, nullable=false)
	 */
	private $tblprivilege_privilegeID;
	
					 
    public function gettblRole_roleID() { return $this->tblRole_roleID; }
    public function settblRole_roleID($tblRole_roleID) { $this->tblRole_roleID = $tblRole_roleID; }
    
    public function gettblprivilege_privilegeID() { return $this->tblprivilege_privilegeID; }
	public function settblprivilege_privilegeID($tblprivilege_privilegeID) { $this->tblprivilege_privilegeID = $tblprivilege_privilegeID; }
	
   
}
