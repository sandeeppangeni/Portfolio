<?php
	class controller
	{
		function loadmodel($modelname)
		{
			$path='model/'.$modelname.'.model'.'.php';
			require_once $path;
			return new $modelname;
		}

		function loadview($viewname,$header=true,$footer=true)
		{
			$path='view/'.$viewname.'.php';
			
			require_once $path;
			
		}
	}

?>