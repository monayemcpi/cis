<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php 

    $name = $_GET['name'] ;

    if(isset($name)){

        $sql    = "INSERT INTO crimes(name) VALUES('$name')" ;
       
        $result = $db->query($sql) ;        

        if($result)
        {
            redirectTo('index.php') ;
        }
    }
 ?>