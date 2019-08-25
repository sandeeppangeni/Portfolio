<?php
 class skills extends common
 {
 	function showskills()
	{
		$sql="select * from tbl_skills ORDER BY id desc limit 1";
		return $this->select($sql);
	}
}
?>