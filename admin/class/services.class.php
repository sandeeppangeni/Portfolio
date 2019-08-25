<?php
 class services extends common{
 	public $id,$service_desc,$created_by,$created_at,$modified_by,$modified_at;

 	public function selectservices()
 	{
 		$sql = "select * from tbl_services";
 		$data= $this->select($sql);
 		return $data;
 	}

 	public function selectservicesbyid()
 	{
 		$sql = "select * from tbl_services where id = '$this->id' ";
 		return $this->select($sql);
 	}

 	public function insertservices()
 	{

 		$sql = "insert into tbl_services(services,created_by,created_at,modified_by,modified_at)values('$this->service_desc','$this->created_by','$this->created_at','$this->modified_by','$this->modified_at') ";
 	
 		return $this->insert($sql);
 	}

 	
 	public function deleteservices()
 	{
 		$sql = "delete from tbl_services where id = '$this->id' ";
 		return $this->delete($sql);
 	}

 	public function updateservices()
 	{

 		$date = date('Y-m-d H:i:s');
 		$sql = "update tbl_services set services = '$this->service_desc',modified_by = '$this->modified_by',modified_at = '$date',created_at = '$date',created_by = '$this->created_by' where id='$this->id' ";
 		
	 	return $this->update($sql);
	 }
}
?>