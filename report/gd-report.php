<?php 	include '../config/function.php' ; ?>
<?php 	

	$to   = $_POST['to_date'] ;

	$from = $_POST['from_date'] ;

	$sql = "SELECT * FROM gd WHERE date BETWEEN '".$to."' AND '".$from."'"  ;

    $result = $db->query($sql) ;

    if($result->num_rows):

    $html= '';

    $html.='<input type="button" id="btn" value="Print" onclick="printDiv();" class="btn btn-success pull-right print-btn"><br><br>' ;
    $html.='<table class="table table-bordered">' ;

    $html.='<tr>
                <th>GD#</th>
                <th>Date</th>
                <th>Subject</th>
                <th>GD Person
                    <br/> Name</th>
                <th>GD Person
                    <br/>Address</th>
                <th>GD Person
                    <br/> Mobile #</th>
                <th>Details</th>
            </tr>' ;

      while($row = $result->fetch_assoc())
        {

            $id         = $row['id'] ;
            $date       = $row['date'] ;
            $subject    = $row['subject'] ;
            $name       = $row['name'] ;
            $address    = $row['address'] ;
            $mobile_no  = $row['mobile_no'] ;
            $avidance   = $row['avidance'] ;
            $details    = $row['details'] ;

            $html.='<tr>';
            $html.='<td>'.$id.'</td>' ;
            $html.='<td>'.$date.'</td>' ;
            $html.='<td>'.$subject.'</td>' ;
            $html.='<td>'.$name.'</td>' ;
            $html.='<td>'.$address.'</td>' ;
            $html.='<td>'.$mobile_no.'</td>' ;
            $html.='<td>'.$details.'</td>' ;
            $html.='</tr>' ;

        }

    $html.='</table>' ;

    echo $html;

    else:
        
        echo 'No record found !' ;

    endif;


 ?>