<?php
 class intro extends common{
 	function showintro()
	{
		$sql="select * from tbl_intro ORDER BY id desc limit 1";
		return $this->select($sql);
	}
}
?>