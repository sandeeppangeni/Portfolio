<?php
 // require_once 'common.class.php';
	class admin extends common{
		public $id,$name,$username,$email,$salt,$password,$status,$last_login,$phone;

		public function selectadminbyusername(){
			$sql="select * from tbl_admin where username='$this->username'";
			return $this->select($sql);
		}
		public function selectadminbyid()
		{
			$sql = "select * from tbl_admin where id = '$this->id'";
			return $this->select($sql);
		}
		public function insertuser()
		{
			//$date = date('Y-m-d H:i:s');
			$sql = "insert into tbl_admin(name,username,email,salt,password,phone)values('$this->name','$this->username','$this->email','$this->salt','$this->password','$this->phone') ";
			echo $sql;
			return $this->insert($sql);
		}
		public function selectuser()
		{
			$sql= "select * from tbl_admin";
			return $this->select($sql);
		}
		public function deleteadmin()
		{
			$sql = "delete from tbl_admin where id = '$this->id'";
			return $this->delete($sql);
		}
		public function updateadmin()
		{
			$sql = "update tbl_admin set name= '$this->name',username = '$this->username', email = '$this->email' where id = '$this->id'";
			return $this->update($sql);
		}
		public function updatelastlogin()
		{
			// if(isset($this->password) && empty($this->))
			$sql = "update tbl_admin set last_login = '$this->last_login' where username = '$this->username'";
			$this->update($sql);
		}
		public function updateadminwithpassword()
		{
			$sql = "update tbl_admin set name= '$this->name',username = '$this->username', email = '$this->email', password = '$this->password' where id = '$this->id'";
			return $this->update($sql);
		}
	}
/*	// for procceding with image
	$image_name = $_FILES['image']['temp_name'];
	move_uploaded_file($_FILES['image']['name'], "layout/".$image_name);
	.......*/
?>

<!-- <form enctype="multipart/form-data" >
	<input type="file" name="image">
</form> -->

