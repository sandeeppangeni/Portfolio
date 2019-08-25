<?php
 class contact extends common{
 	function showcontact()
	{
		$sql="select * from tbl_contact ORDER BY id desc limit 1";
		return $this->select($sql);
	}
}
?>