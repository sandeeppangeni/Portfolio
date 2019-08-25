<?php
 class skills extends common{
 	public $id,$description,$image,$html,$css,$jquery,$php,$photoshop;

 	public function selectskills()
 	{
 		$sql = "select * from tbl_skills";
 		$data= $this->select($sql);
 		return $data;
 	}

 	public function selectskillsbyid()
 	{
 		$sql = "select * from tbl_skills where id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function insertskills()
 	{

 		$sql = "insert into tbl_skills(description,image,html5,css4,jquery,php,photoshop)values('$this->description','$this->image','$this->html','$this->css','$this->jquery','$this->php','$this->photoshop') ";
 		
 		return $this->insert($sql);
 	}

 	
 	public function deleteskills()
 	{
 		$sql = "delete from tbl_skills where id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updateskills()
 	{

 		$sql = "update tbl_skills set description = '$this->description',image = '$this->image',html5 = '$html',css4 = '$css', jquery = '$this->jquery',php = '$this->php', photoshop = '$this->photoshop' where id='$this->id' ";
 		
	 	return $this->update($sql);
	 }
}
?>