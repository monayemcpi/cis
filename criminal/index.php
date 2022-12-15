<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h2 class="page-header"> <i class="fa fa-user"></i> All Criminal </h2>
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
                                            <th>Sl#</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Father Name</th>
                                            <th>Mother Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Present Address</th>
                                            <th>Permanent Address</th>
                                            <th>Mobile #</th>
                                            <th>NID #</th>
                                            <th>Identification</th>
                                            <th>Crime</th>
                                            <th>Other</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 

                                        $sql = "SELECT * FROM criminals" ;

                                        $result = $db->query($sql) ;

                                        $sl = 1 ;

                                        if($result):
                                            while($row = $result->fetch_assoc()):

                                                $id                 = $row['id'] ;
                                                $name               = $row['name'] ;
                                                $present_address    = $row['present_address'] ; 
                                                $permanent_address  = $row['permanent_address'] ;
                                                $mobile_no          = $row['mobile_no'] ;
                                                $photo              = $row['photo'] ;
                                                $identification     = $row['identification'] ;
                                                $crime_id           = $row['crime_id'] ;
                                                $nid_no             = $row['nid_no'] ;
                                                $other              = $row['other'] ;
                                                $father_name        = $row['father_name'] ;
                                                $mother_name        = $row['mother_name'] ;
                                                $age                = $row['age'] ;
                                                $gender             = $row['gender'] ;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo $sl++; ?>
                                            </td>
                                             <td>
                                               <img src="../images/criminal/<?php echo $photo; ?>" alt="" class="img-responsive img-thumbnail criminal-image" style="width:60%;" > 
                                            </td>
                                            <td>
                                                <?php echo $name; ?>
                                            </td>
                                            <td>
                                                <?php echo $father_name; ?>
                                            </td>
                                            <td>
                                                <?php echo $mother_name; ?>
                                            </td>
                                            <td>
                                                <?php echo $age; ?>
                                            </td>
                                            <td>
                                                <?php echo $gender; ?>
                                            </td>
                                            <td>
                                                <?php echo $present_address; ?>
                                            </td>
                                            <td>
                                                <?php echo $permanent_address; ?>
                                            </td>
                                            <td>
                                                <?php echo $mobile_no; ?>
                                            </td>
                                            <td>
                                                <?php echo $nid_no; ?>
                                            </td>
                                            <td>
                                                <?php echo $identification; ?>
                                            </td>
                                            <td>
                                                <?php echo getCrimeNameById($crime_id) ; ?>
                                            </td>
                                            <td>
                                                <?php echo $other; ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-primary btnEdit btn-xs" value="<?php echo $id; ?>"><i class="fa fa-edit"></i></button>
                                                <button type="button" class="btn btn-info btnView btn-xs" value="<?php echo $id; ?>"><i class="fa fa-eye"></i></button>
                                                <button type="button" class="btn btn-danger btnDelete btn-xs" value="<?php echo $id; ?>"><i class="fa fa-trash"></i></button>
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

    $('.btnView').click(function(){

    var id = $(this).val();
    window.location.href='view.php?id='+id ;

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
