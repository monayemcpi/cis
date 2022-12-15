<?php include '../config/function.php' ;  ?>
<?php 

	$email 		= $_POST['email'] ;

	$password 	= md5($_POST['password']) ;

	if(isset($email) && !empty($email) && isset($password) && !empty($password)){


	$sql = " SELECT id FROM users WHERE email = '$email' AND  password = '$password' " ;

    $result = $db->query($sql) ;

    if($result){
   
        while($row = $result->fetch_assoc()){

             session_start() ;

             $_SESSION['id']  =  $row['id'] ;
         }

        if($_SESSION['id'])
        {
            redirectTo('../dashboard/index.php') ;
        }
        else{

            redirectTo('index.php') ;
        }

    }

}

 ?>