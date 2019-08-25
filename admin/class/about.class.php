<?php
 class about extends common{
 	public $id,$description,$image,$fb_link,$twt_link,$insta_link,$created_by,$created_at,$modified_by,$modified_at;

 	public function selectabout()
 	{
 		$sql = "select * from tbl_about";
 		$data= $this->select($sql);
 		return $data;
 	}

 	public function selectaboutbyid()
 	{
 		$sql = "select * from tbl_about where id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function insertabout()
 	{

 		$sql = "insert into tbl_about(image,description,fb_link,twt_link,insta_link,created_by,created_at,modified_by,modified_at)values('$this->image','$this->description','$this->fb_link','$this->twt_link','$this->insta_link','$this->created_by','$this->created_at','$this->modified_by','$this->modified_at') ";
 
 		return $this->insert($sql);
 	}

 	
 	public function deleteabout()
 	{
 		$sql = "delete from tbl_about where id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updateabout()
 	{

 		$date = date('Y-m-d H:i:s');
 		if(!empty($this->image))
 		{
 			$sql = "update tbl_intro set image= '$this->image',description = '$this->description',fb_link='$this->fb_link',twt_link='$this->twt_link',insta_link='$this->insta_link',modified_by = '$this->modified_by',modified_at = '$date',created_at = '$date',created_by = '$this->created_by' where id='$this->id' ";
 		}
	 	
	 	return $this->update($sql);
	 }
}
?>