<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tblcontributions")
 * @author Samina 
 */

class E_contributions
{
	
	/**
	 * @Id
	 * @Column(name="contributionID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $contributionID;
	 
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $date;
	 
	/**
	 * @Column(name="amount",type="string", length=45, nullable=false)
	 */
	private $amount;
	
	
	/**
	 * @Column(name="paymentFor",type="string", length=45, nullable=false)
	 */
	private $payment;
	
	
	/**
	 * @Column(name="receiver",type="string", length=45, nullable=false)
	 */
	private $receiver;
	
	
	/**
	 * @Column(name="tblMentees_menteeID",type="integer", length=11, nullable=false)
	 */
	private $tblMentees_menteeID;
	
	
	/**
	 * @Column(name="tblUsers_userID",type="integer", length=11, nullable=false)
	 */
	private $tblUsers_userID;
	
	 	 
    public function getContributionID() { return $this->contributionID; }
    public function setContributionID($contributionID) { $this->contributionID = $contributionID; }
    
    public function getDate() { return $this->date; }
	public function setDate($date) { $this->date = $date; }
	
    public function getAmount() { return $this->amount; }
    public function setAmount($amount) { $this->amount = $amount; }
	
	public function getPayment() { return $this->payment; }
    public function setPayment($payment) { $this->payment = $payment; }
	
	public function getReceiver() { return $this->receiver; }
    public function setReceiver($receiver) { $this->receiver = $receiver; }

	public function gettblMentees_menteeID() { return $this->tblMentees_menteeID; }
    public function settblMentees_menteeID($tblMentees_menteeID) { $this->tblMentees_menteeID = $tblMentees_menteeID; }
	
	public function gettblUsers_userID() { return $this->tblUsers_userID; }
    public function settblUsers_userID($tblUsers_userID) { $this->tblUsers_userID = $tblUsers_userID; }
}
