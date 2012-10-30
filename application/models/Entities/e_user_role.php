<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tbluser_role")
 * @author Samina 
 */

class E_user_role
{
	/**
     * @Column(name="tblUsers_userID",type="integer", length=11, nullable=false)
	 */
	private $tblUsers_userID;
	
	
	/**
	 * @Column(name="tblRole_roleID",type="integer", length=11, nullable=false)
	 */
	private $tblRole_roleID;
	
	
	public function gettblUsers_userID() { return $this->tblUsers_userID; }
    public function settblUsers_userID($tblUsers_userID) { $this->tblUsers_userID = $tblUsers_userID; }
	
	public function gettblRole_roleID() { return $this->tblRole_roleID; }
    public function settblRole_roleID($tblRole_roleID) { $this->tblRole_roleID = $tblRole_roleID; }
}
