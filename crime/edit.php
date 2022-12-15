<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 

	$id 	= $_GET['id'] ;

	$name 	= $_GET['name'] ;

	if(isset($id) && isset($name)){

		$sql = "UPDATE crimes SET name='".$name."' WHERE id='".$id."'" ;

		$result = $db->query($sql) ;

		if($result){

			redirectTo('index.php') ;
		}
	}


 ?>