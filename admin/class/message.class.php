<?php
 class message extends common{
 	public $id,$name,$phone,$email,$message;

 	public function insertmessage()
 	{

 		$sql = "insert into tbl_message(name,phone,email,message)values('$this->name','$this->phone','$this->email','$this->message') ";
 
 		return $this->insert($sql);
 	}



}
?>