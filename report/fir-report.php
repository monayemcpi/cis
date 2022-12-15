<?php 	include '../config/function.php' ; ?>
<?php 	

	$to   = $_POST['to_date'] ;

	$from = $_POST['from_date'] ;

	$sql = "SELECT * FROM fir WHERE date BETWEEN '".$to."' AND '".$from."'"  ;

    $result = $db->query($sql) ;

    if($result->num_rows):
    
    $html= '';

    $html.='<input type="button" id="btn" value="Print" onclick="printDiv();" class="btn btn-success pull-right print-btn"><br><br>' ;
    $html.='<div class="table-responsive">';
    $html.='<table class="table">' ;

    $html.='<tr>
                <th>FIR#</th>
                <th>Date</th>
                <th>Subject</th>
                <th>FIR Person Name</th>
                <th>FIR Person Address</th>
                <th>FIR Person Mobile #</th>
                <th>Criminal</th>
                <th>Crime</th>
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
            $crime      = getCrimeNameById($row['crime_id']) ;
            $criminal   = getCriminalNameById($row['criminal_id']) ;
            $details    = $row['details'] ;

            $html.='<tr>';
            $html.='<td>'.$id.'</td>' ;
            $html.='<td>'.$date.'</td>' ;
            $html.='<td>'.$subject.'</td>' ;
            $html.='<td>'.$name.'</td>' ;
            $html.='<td>'.$address.'</td>' ;
            $html.='<td>'.$mobile_no.'</td>' ;
            $html.='<td>'.$crime.'</td>' ;
            $html.='<td>'.$criminal.'</td>' ;
            $html.='<td>'.$details.'</td>' ;
            $html.='</tr>' ;
        }

    $html.='</table>' ;
    $html.='</div>' ;

    echo $html;

    else:     

        echo "No Record Found !" ;

    endif;

 ?>