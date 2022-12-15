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
            <h3 class="page-header"><i class="fa fa-plus-circle"></i> Edit Criminal</h3>
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
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-user"></i> Edit Criminal</h3>
                        </div>
                        <div class="panel-body">
                            <form action="edit-criminal-process.php" method="POST" role="form" enctype="multipart/form-data">
                                <input type="hidden" value="<?php echo $id; ?>" name="id">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input name="name" value="<?php echo $name; ?> " type="text" class="form-control" id="" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Father Name</label>
                                            <input name="father_name" value="<?php echo $father_name; ?> "  type="text" class="form-control" id="" placeholder="Edit Father Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Mother Name</label>
                                            <input name="mother_name" value="<?php echo $mother_name; ?> "  type="text" class="form-control" id="" placeholder="Edit Mother Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gender</label>
                                            <select name="gender" id="input" class="form-control" required="required">
                                                <option value="<?php echo $gender;?>"><?php echo $gender; ?></option>
                                                <?php if($gender != "Male"): ?>
                                                <option value="Male" >Male</option>
                                                <?php elseif($gender != "Female"):?>
                                                <option value="Female">Female</option>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Age</label>
                                            <input name="age" value="<?php echo $age; ?> "  type="text" class="form-control" id="" placeholder="Edit Age">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Present Address</label>
                                            <input  value="<?php echo $present_address; ?>" name="present_address" type="text" class="form-control" id="" placeholder="Present Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Permanent Address</label>
                                            <input value="<?php echo $permanent_address; ?>" name="permanent_address" type="text" class="form-control" id="" placeholder="Permanent Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Photo</label>
                                            <p><img src="../images/criminal/<?php echo $photo; ?> " alt="" class="img-responsive img-thumbnail" style="width:20%;"></p>
                                            <input type="hidden" value="<?php echo $photo ; ?>" name="photo">
                                            <input type="file" name="photo">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Mobile #</label>
                                            <input value="<?php echo $mobile_no;?>" name="mobile_no" type="text" class="form-control" id="" placeholder="Enter Mobile no">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">NID #</label>
                                            <input value="<?php echo $nid_no; ?>" name="nid_no" type="text" class="form-control" id="" placeholder="Enter Password">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Identification</label>
                                            <input value="<?php echo $identification ; ?>" name="identification" type="text" class="form-control" id="" placeholder="Enter Identificatiion">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Crime</label>
                                            <?php echo  getCrimeListById( $crime_id ) ; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Other</label>
                                            <input value="<?php echo $other; ?>" name="other" type="text" class="form-control" id="" placeholder="Enter Other">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Edit Ciminal</button>
                                        <button type="reset" class="btn btn-danger"><i class="fa fa-refresh"></i> Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include '../inc/footer.php' ; ?>
