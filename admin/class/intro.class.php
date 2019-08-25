<?php
 class intro extends common{
 	public $id,$name,$description,$image,$created_by,$created_at,$modified_by,$modified_at;

 	public function selectintro()
 	{
 		$sql = "select * from tbl_intro";
 		$data= $this->select($sql);
 		return $data;
 	}

 	public function selectintrobyid()
 	{
 		$sql = "select * from tbl_intro where id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function insertintro()
 	{

 		$sql = "insert into tbl_intro(username,image,description,created_by,created_at,modified_by,modified_at)values('$this->name','$this->image','$this->description','$this->created_by','$this->created_at','$this->modified_by','$this->modified_at') ";
 		echo $sql;
 		return $this->insert($sql);
 	}

 	
 	public function deleteintro()
 	{
 		$sql = "delete from tbl_intro where id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updateintro()
 	{

 		$date = date('Y-m-d H:i:s');
 		if(!empty($this->image))
 		{
 			$sql = "update tbl_intro set username = '$this->name',image= '$this->image',description = '$this->description',modified_by = '$this->modified_by',modified_at = '$date',created_at = '$date',created_by = '$this->created_by' where id='$this->id' ";
 		}
	 	
	 	return $this->update($sql);
	 }
}
?>