<?php
 class testimonial extends common
 {
 	public $id,$name,$post,$description,$image,$created_by,$created_at,$modified_by,$modified_at;

 	public function selecttestimonial()
 	{
 		$sql = "select * from tbl_testimonial";
 		$data= $this->select($sql);
 		return $data;
 	}

 	public function selecttestimonialbyid()
 	{
 		$sql = "select * from tbl_testimonial where id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function inserttestimonial()
 	{

 		$sql = "insert into tbl_testimonial(name,post,image,description,created_by,created_at,modified_by,modified_at)values('$this->name','$this->post','$this->image','$this->description','$this->created_by','$this->created_at','$this->modified_by','$this->modified_at') ";
 		return $this->insert($sql);
 	}

 	
 	public function deletetestimonial()
 	{
 		$sql = "delete from tbl_testimonial where id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updatetestimonial()
 	{

 		$date = date('Y-m-d H:i:s');
 		$sql = "update tbl_testimonial set name = '$this->name',post='$this->post',image= '$this->image',description = '$this->description',modified_by = '$this->modified_by',modified_at = '$date',created_at = '$date',created_by = '$this->created_by' where id='$this->id' ";
 		
	 	return $this->update($sql);
	 }
}
?>