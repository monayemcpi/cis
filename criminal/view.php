<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<?php 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM criminals WHERE id = '".$id."'" ;
    $result = $db->query($sql) ;

    if($result):
        while($data = $result->fetch_assoc()):

            $name               = $data['name'] ;
            $present_address    = $data['present_address'] ;
            $permanent_address  = $data['permanent_address'] ;
            $photo              = $data['photo'];
            $nid_no             = $data['nid_no'] ;
            $mobile_no          = $data['mobile_no'] ;
            $identification     = $data['identification'] ;
            $crime_id           = $data['crime_id'] ;
            $other              = $data['other'] ;
            $father_name        = $data['father_name'] ;
            $mother_name        = $data['mother_name'] ;
            $age                = $data['age'] ;
            $gender             = $data['gender'] ;

        endwhile;
    endif;
 ?>


<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h3 class="page-header"> <i class="fa fa-user"></i> VIEW CRIMINAL </h3>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-4">
                <img src="../images/criminal/<?php echo $photo; ?>" alt="" class="img-responsive img-thumbnail criminal-image" style="width:60%;" > 
                </div>
                <div class="col-md-8">
                    <table class="table table-hover">
                       <tr>
                           <td>Name</td>
                           <td><?php echo $name; ?></td>
                       </tr>
                       <tr>
                           <td>Father Name</td>
                           <td><?php echo $father_name; ?></td>
                       </tr>
                       <tr>
                           <td>Mother Name</td>
                           <td><?php echo $mother_name; ?></td>
                       </tr>
                       <tr>
                           <td>Age</td>
                           <td><?php echo $age; ?></td>
                       </tr>
                       <tr>
                           <td>Gender</td>
                           <td><?php echo $gender; ?></td>
                       </tr>
                       <tr>
                           <td>Present Address</td>
                           <td><?php echo $present_address; ?></td>
                       </tr>
                       <tr>
                           <td>Permanent Address</td>
                           <td><?php echo $permanent_address; ?></td>
                       </tr>
                       <tr>
                           <td>NID</td>
                           <td><?php echo $nid_no; ?></td>
                       </tr>
                       <tr>
                           <td>Mobile no</td>
                           <td><?php echo $mobile_no; ?></td>
                       </tr>
                       <tr>
                           <td>Crime</td>
                           <td><?php echo getCrimeNameById($crime_id) ; ?></td>
                       </tr>
                       <tr>
                           <td>Other</td>
                           <td><?php echo $other; ?></td>
                       </tr>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include '../inc/footer.php' ; ?>