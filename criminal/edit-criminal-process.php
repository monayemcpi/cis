<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 

    $id = $_POST['id'] ;
    $name               = $_POST['name'] ;
    $father_name        = $_POST['father_name'] ;
    $mother_name        = $_POST['mother_name'] ;
    $age                = $_POST['age'] ;
    $gender             = $_POST['gender'] ;
    $present_address    = $_POST['present_address'] ;
    $permanent_address  = $_POST['permanent_address'] ;
    $photo              = $_FILES['photo']['name'] ; 
    if($photo == null)
    {
        $photo    = $_POST['photo'] ;
    }
    $target             = "../images/criminal/".basename($photo) ;
    $nid_no             = $_POST['nid_no'] ;
    $mobile_no          = $_POST['mobile_no'] ;
    $identification     = $_POST['identification'] ;
    $crime_id           = $_POST['crime_id'] ;
    $other              = $_POST['other'] ;

    $sql = "UPDATE criminals SET name='".$name."', present_address = '".$present_address."', permanent_address='".$permanent_address."', photo='".$photo."',nid_no='".$nid_no."',mobile_no='".$mobile_no."', identification = '".$identification."',crime_id='".$crime_id."',other='".$other."', father_name='".$father_name."',mother_name='".$mother_name."',gender='".$gender."',age='".$age."' WHERE id = '".$id."'" ;

    $result = $db->query($sql) ;

    if($result)
    {
        if( move_uploaded_file($_FILES['photo']['tmp_name'] , $target))
        {
            redirectTo('index.php') ;
        }
    }

redirectTo('index.php') ;


 ?>