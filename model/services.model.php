<?php
 class services extends common{
 	function showservices()
	{
		$sql="select * from tbl_services ORDER BY id desc limit 1";
		return $this->select($sql);
	}
}
?>