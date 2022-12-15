<?php 

	define("SERVER","localhost") ;
	define("DB","cis") ;
	define("USERNAME","root") ;
	define("PASSWORD","") ;

	$db = new mysqli(SERVER,USERNAME,PASSWORD,DB) ;

	if($db)
	{
		/*echo "Database connection successful" ;*/
	}

	else{

		echo "Database connection fail" ;
	}


 ?>