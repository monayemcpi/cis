<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 

	$subject            = $_POST['subject'] ;
	$date    			= date("Y-m-d",strtotime($_POST['date']));
	$name  				= $_POST['name'] ;
	$address            = $_POST['address'] ;
	$mobile_no          = $_POST['mobile_no'] ;
	$criminal_id        = $_POST['criminal_id'] ;
	$crime_id           = $_POST['crime_id'] ;
	$details            =filter_var($_POST['details'], FILTER_SANITIZE_STRING);


	$sql = "INSERT INTO fir(date,subject,name,address,mobile_no,criminal_id,crime_id,details) VALUES('$date','$subject','$name','$address','$mobile_no','$criminal_id','".$crime_id."','".$details."')" ;

	$result = $db->query($sql);

	if($result)
	{
		redirectTo('index.php') ;
	}

 ?>