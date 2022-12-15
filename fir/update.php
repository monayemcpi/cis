<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 
    $id             = $_POST['id'] ;
    $subject        = $_POST['subject'] ;
    $crime_id       = $_POST['crime_id'] ;
    $criminal_id    = $_POST['criminal_id'] ;
    $date           = $_POST['date'] ;
    $name           = $_POST['name'] ;
    $address        = $_POST['address'] ;
    $mobile_no      = $_POST['mobile_no'] ;
    $details        = filter_var($_POST['details'], FILTER_SANITIZE_STRING);


   $sql = "UPDATE fir SET subject='$subject', date='$date',name='$name',address='$address',mobile_no='$mobile_no',details='$details',crime_id='$crime_id',criminal_id='$criminal_id' WHERE id='$id'" ;

   $result = $db->query($sql) ;

   if($result)
   {
       redirectTo('index.php') ;    
   }

  redirectTo('edit.php') ; 

 ?>