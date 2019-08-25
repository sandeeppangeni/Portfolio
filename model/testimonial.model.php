<?php
 class testimonial extends common
 {
 	function showtestimonial()
	{
		$sql="select * from tbl_testimonial ORDER BY id desc limit 1";
		return $this->select($sql);
	}
}
?>