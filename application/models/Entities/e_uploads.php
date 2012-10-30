<?php
namespace models\Entities;
 
/**
 * @Entity
 * @Table(name="tbluploads")
 * @author Samina 
 */

class E_uploads
{
	
	/**
	 * @Id
	 * @Column(name="uploadID", type="integer", length=11, nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $uploadID;
	 
	 
	/**
	 * @Column(name="date",type="date", nullable=false)
	 */
	private $date;
	
	
	/**
     * @Column(name="filename",type="string", length=100, nullable=false)
	 */
	private $filename;
	
	
	/**
	 * @Column(name="tblUsers_userID",type="integer", length=11, nullable=false)
	 */
	private $tblUsers_userID;
	
	
	/**
     * @Column(name="fileType",type="string", length=50, nullable=yes)
	 */
	private $fileType;
	
	
	public function getuploadID() { return $this->uploadID; }
    public function setuploadID($uploadID) { $this->uploadID = $uploadID; }
	
	public function getdate() { return $this->date; }
    public function setdate($date) { $this->date = $date; }
		
    public function getfilename() { return $this->filename; }
    public function setfilename($filename) { $this->filename = $filename; }
	
	public function gettblUsers_userID() { return $this->tblUsers_userID; }
    public function settblUsers_userID($tblUsers_userID) { $this->tblUsers_userID = $tblUsers_userID; }
	
	public function getfileType() { return $this->fileType; }
    public function setfileType($fileType) { $this->fileType = $fileType; }
}
