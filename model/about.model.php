<?php
 class about extends common{
 	
	function showabout()
	{
		$sql="select * from tbl_about ORDER BY id desc limit 1";
		return $this->select($sql);
	}
}
?>