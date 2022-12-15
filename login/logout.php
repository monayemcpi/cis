<?php 

include '../config/function.php' ;

session_start() ;

$_SESSION['id'] = null ;

session_destroy() ;

redirectTo('index.php') ;

?>