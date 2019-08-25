<?php
class common{
	function __construct(){
		$this->con=new mysqli('localhost','root','','db_arjunvision');
		if ($this->con->connect_error){
			die("Database connection Error");
		}
	}
function insert($sql)
{
	$this->con->query($sql);
	if($this->con->affected_rows>0)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}
function select($sql){
	$res=$this->con->query($sql);
	$data=[];
	if($res->num_rows>0){
		while($row=$res->fetch_object()){
			$data[]=$row;

		}
	}
	return $data;
}



function update($sql)
{
	if($this->con->query($sql))
	{
		if($this->con->affected_rows>0)
		{
			return true;
		}
		else
		{
			return "duplicate";
		}

	}
	else
	{
		return false;
	}

}

function delete($sql){
	$res = $this->con->query($sql);
	if($this->con->affected_rows>0)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}

function escapestring($data)
{
	return $this->con->real_escape_string($data);
}
}

?>