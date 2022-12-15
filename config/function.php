<?php 

include 'database.php' ;

function redirectTo($url)
{
   echo'<script> window.location="'.$url.'"; </script> ';
   exit;
}

function checkLogin()
{
	session_start() ;

	if(!isset($_SESSION['id']))
	{
		redirectTo('../login/index.php') ;
	}
}

function checkLoginHome()
{
	session_start() ;

	if(!isset($_SESSION['id']))
	{
		redirectTo('login/index.php') ;
	}
	else{
		redirectTo('dashboard/index.php') ;
	}
}

function getUserNameById($id)
{
    global $db ;

    $sql = "SELECT * FROM users WHERE id = '".$id."'  " ;

    $result = $db->query($sql) ;

    if($row = $result->fetch_assoc())
    {
        return $row['name'] ;
    }
}

function totalUser()
{
	global $db ;

	$sql = "SELECT COUNT(id) AS totalUser FROM users" ;

	$result = $db->query($sql) ;

	if($row = $result->fetch_assoc())
	{
		return  $row['totalUser'] ;
	}
}

function totalCrime()
{
	global $db ;

	$sql = "SELECT COUNT(id) AS totalUser FROM crimes" ;

	$result = $db->query($sql) ;

	if($row = $result->fetch_assoc())
	{
		return  $row['totalUser'] ;
	}
}

function totalgd()
{
	global $db ;

	$sql = "SELECT COUNT(id) AS totalUser FROM gd" ;

	$result = $db->query($sql) ;

	if($row = $result->fetch_assoc())
	{
		return  $row['totalUser'] ;
	}
}


function totalCriminal()
{
	global $db ;

	$sql = "SELECT COUNT(id) AS totalUser FROM criminals" ;

	$result = $db->query($sql) ;

	if($row = $result->fetch_assoc())
	{
		return  $row['totalUser'] ;
	}
}


function totalFir()
{
	global $db ;

	$sql = "SELECT COUNT(id) AS totalUser FROM fir" ;

	$result = $db->query($sql) ;

	if($row = $result->fetch_assoc())
	{
		return  $row['totalUser'] ;
	}
}

function getCrimeListById($selectId=null)
{
	global $db ;
	$sql = "SELECT * FROM crimes" ; 
	$html = '' ;
	$html .= '<select class="form-control" name="crime_id">' ;  
	$result = $db->query($sql) ; 

	while($value = $result->fetch_assoc())
	{
		if($value['id']==$selectId)
		{
			$html .= '<option value="'.$value['id'].'" selected>'.$value['name'].'</option>' ;  
		}
		else{
			$html .= '<option value="'.$value['id'].'">'.$value['name'].'</option>' ;  
		}
	}
	$html .= '</select>' ; 
	return $html ; 
}


function getCrimeNameById($id)
{
    global $db ;

    $sql = "SELECT * FROM crimes WHERE id = '".$id."'  " ;

    $result = $db->query($sql) ;

    if($row = $result->fetch_assoc())
    {
        return $row['name'] ;
    }
}


function getCriminalNameById($id)
{
    global $db ;

    $sql = "SELECT * FROM criminals WHERE id = '".$id."'  " ;

    $result = $db->query($sql) ;

    if($row = $result->fetch_assoc())
    {
        return $row['name'] ;
    }
}


function getCriminalListById($selectId=null)
{
	global $db ;
	$sql = "SELECT * FROM criminals" ; 
	$html = '' ;
	$html .= '<select class="form-control" name="criminal_id">' ;  
	$result = $db->query($sql) ; 

	while($value = $result->fetch_assoc())
	{
		if($value['id']==$selectId)
		{
			$html .= '<option value="'.$value['id'].'" selected>'.$value['name'].'</option>' ;  
		}
		else{
			$html .= '<option value="'.$value['id'].'">'.$value['name'].'</option>' ;  
		}
	}
	$html .= '</select>' ; 
	return $html ; 
}


function userRole()
{
	global $db ;

	$id = $_SESSION['id'] ;

	$role = '' ;

	$sql = "SELECT role FROM users WHERE id='$id'" ;

	$result = $db->query($sql) ;

	if($row = $result->fetch_assoc())
    {
         $role.= $row['role'] ;
    }

    return $role ;

}


 ?>