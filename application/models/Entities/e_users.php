<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblusers")
 * @author Samina 
 */

class E_users
{
	
	/**
	 * @Id
	 * @Column(name="userID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $userID;
	 
	 
	/**
     * @Column(name="userName",type="string", length=15, nullable=false)
	 */
	private $userName;
	
	
	/**
	 * @Column(name="password",type="string", length=45, nullable=false)
	 */
	private $password;
	
		
	public function getuserID() { return $this->userID; }
    public function setuserID($userID) { $this->userID = $userID; }
	
	public function getuserName() { return $this->userName; }
    public function setuserName($userName) { $this->userName = $userName; }
		
    public function getpassword() { return $this->password; }
    public function setpassword($password) { $this->password = $password; }
	
}
