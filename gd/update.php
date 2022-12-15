<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 
    $id             = $_POST['id'] ;
    $subject        = $_POST['subject'] ;
    $date           = $_POST['date'] ;
    $avidance       = $_FILES['avidance']['name'] ; 
    if($avidance == null)
    {
      $avidance = $_POST['avidance'] ;
    }
    $target         = "../images/gd/".basename($avidance) ;
    $name           = $_POST['name'] ;
    $address        = $_POST['address'] ;
    $mobile_no      = $_POST['mobile_no'] ;
    $details        = filter_var($_POST['details'], FILTER_SANITIZE_STRING);


   $sql = "UPDATE gd SET subject='$subject', date='$date',name='$name',address='$address',mobile_no='$mobile_no',details='$details',avidance='$avidance' WHERE id='$id'" ;

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