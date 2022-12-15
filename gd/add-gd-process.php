<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 

    $subject        = $_POST['subject'] ;
    $date           = $_POST['date'] ;
    $avidance       = $_FILES['avidance']['name'] ; 
    $target         = "../images/gd/".basename($avidance) ;
    $name           = $_POST['name'] ;
    $address        = $_POST['address'] ;
    $mobile_no      = $_POST['mobile_no'] ;
    $details        = filter_var($_POST['details'], FILTER_SANITIZE_STRING);


    $sql = "INSERT INTO gd(subject,date,avidance,name,address,mobile_no,details) VALUES('".$subject."','".$date."','".$avidance."','".$name."','".$address."','".$mobile_no."','".$details."')" ;

   $result = $db->query($sql) ;

   if($result)
   {
        if( move_uploaded_file($_FILES['avidance']['tmp_name'] , $target))
        {
            redirectTo('index.php') ;
        }
   }

    redirectTo('index.php') ;


 ?>