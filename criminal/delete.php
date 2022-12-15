<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 

	$id = $_GET['id'] ;

	$sql = "DELETE FROM criminals WHERE id='".$id."'" ;

	$result = $db->query($sql) ;

	if($result){

		redirectTo('index.php') ;
	}

 ?>