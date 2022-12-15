<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 

	$id = $_GET['id'] ;

	$sql = "DELETE FROM crimes WHERE id='".$id."'" ;

	$result = $db->query($sql) ;

	if($result){

		redirectTo('index.php') ;
	}

 ?>