<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h2 class="page-header"> <i class="fa fa-user"></i> All FIR</h2>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table  id="dataTable" class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>FIR#</th>
                                            <th>Date</th>
                                            <th>Subject</th>
                                            <th>Crime</th>
                                            <th>Criminal</th>
                                            <th>FIR Person<br/> Name</th>
                                            <th>FIR Person <br/>Address</th>
                                            <th>FIR Person <br/> Mobile #</th>
                                            <th>Details</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $sql = "SELECT * FROM fir ORDER BY id DESC" ;

                                        $result = $db->query($sql) ;

                                        if($result):
                                            while($row = $result->fetch_assoc()):

                                                $id             = $row['id'] ;
                                                $date           = $row['date'] ;
                                                $subject        = $row['subject'] ;
                                                $crime_id       = $row['crime_id'] ;
                                                $criminal_id    = $row['criminal_id'] ;
                                                $subject        = $row['subject'] ;
                                                $name           = $row['name'] ;
                                                $address        = $row['address'] ;
                                                $mobile_no      = $row['mobile_no'] ;
                                                $details        = $row['details'] ;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $id; ?>
                                            </td>
                                            <td>
                                                <?php echo $date; ?>
                                            </td>
                                            <td>
                                                <?php echo $subject; ?>
                                            </td>
                                             <td>
                                                <?php echo getCrimeNameById( $crime_id ) ?>
                                            </td>
                                             <td>
                                                <?php echo getCriminalNameById($criminal_id ) ; ?>
                                            </td>
                                            <td>
                                                <?php echo $name; ?>
                                            </td>
                                             <td>
                                                <?php echo $address; ?>
                                            </td>
                                               <td>
                                                <?php echo $mobile_no; ?>
                                            </td>
                                            <td>
                                                <?php echo $details; ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-xs btnEdit" value="<?php echo $id; ?>"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger btn-xs btnDelete" value="<?php echo $id; ?>"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <?php        
                                    endwhile;
                                endif;
                                 ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include '../inc/footer.php' ; ?>

<script type="text/javascript">
    $(function(){

    $('.btnEdit').click(function(){

        var id = $(this).val();
      window.location.href='edit.php?id='+id ;

    })  

    $('.btnDelete').click(function(e){

        var id = $(this).val();

        if(confirm('Are you sure ?')){

         window.location.href='delete.php?id='+id ;
     }
  e.preventDefault() ;
 

})


})

</script>