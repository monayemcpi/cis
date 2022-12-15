<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 
    $name               = $_POST['name'] ;
    $father_name        = $_POST['father_name'] ;
    $mother_name        = $_POST['mother_name'] ;
    $age                = $_POST['age'] ;
    $gender             = $_POST['gender'] ;
    $present_address    = $_POST['present_address'] ;
    $permanent_address  = $_POST['permanent_address'] ;
    $photo              = $_FILES['photo']['name'] ; 
    $target             = "../images/criminal/".basename($photo) ;
    $nid_no             = $_POST['nid_no'] ;
    $mobile_no          = $_POST['mobile_no'] ;
    $identification     = $_POST['identification'] ;
    $crime_id           = $_POST['crime_id'] ;
	$other              = $_POST['other'] ;
    $sql = "INSERT INTO criminals(name,present_address,permanent_address,photo,nid_no,mobile_no,identification,crime_id,other,father_name,mother_name,age,gender) 
	VALUES('".$name."','".$present_address."','".$permanent_address."','".$photo."','".$nid_no."','".$mobile_no."','".$identification."','".$crime_id."','".$other."','".$father_name."','".$mother_name."','".$age."','".$gender."')" ;
	$result = $db->query($sql) ;
	
	   if($result)
	   {
			if( move_uploaded_file($_FILES['photo']['tmp_name'] , $target))
			{
				redirectTo('index.php') ;
			}
			else{
				echo '<script> alert("Something Went Wrong") ; </script>';
			}
	   }
	   else{
		   echo '<script> alert("Something Went Wrong") </script>';
		   redirectTo('index.php');
	   }

 ?>