<?php
 class contact extends common{
 	public $id,$phone,$email,$address,$created_by,$created_at,$modified_by,$modified_at;

 	public function selectcontact()
 	{
 		$sql = "select * from tbl_contact";
 		$data= $this->select($sql);
 		return $data;
 	}

 	public function selectcontactbyid()
 	{
 		$sql = "select * from tbl_contact where id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function insertcontact()
 	{

 		$sql = "insert into tbl_contact(phone,email,address,created_by,created_at,modified_by,modified_at)values('$this->phone','$this->email','$this->address','$this->created_by','$this->created_at','$this->modified_by','$this->modified_at') ";
 		echo $sql;
 		return $this->insert($sql);
 	}

 	
 	public function deletecontact()
 	{
 		$sql = "delete from tbl_contact where id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updatecontact()
 	{

 		$date = date('Y-m-d H:i:s');
 		$sql = "update tbl_contact set phone = '$this->phone',email= '$this->email',address = '$this->address',modified_by = '$this->modified_by',modified_at = '$date',created_at = '$date',created_by = '$this->created_by' where id='$this->id' ";
 		
	 	return $this->update($sql);
	 }
}
?>