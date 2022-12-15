<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h3 class="page-header"><i class="fa fa-plus-circle"></i> Add Criminal</h3>
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
                            <h3 class="panel-title"><i class="fa fa-user"></i> Add Criminal</h3>
                        </div>
                        <div class="panel-body">
                            <form action="add-ciminal-process.php" method="POST" role="form" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input name="name" type="text" class="form-control" id="" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Father's Name</label>
                                            <input name="father_name" type="text" class="form-control" id="" placeholder="Enter Father's Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Mother's Name</label>
                                            <input name="mother_name" type="text" class="form-control" id="" placeholder="Enter Mother's Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Gender</label>
                                            <select name="gender" id="input" class="form-control" required="required">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Age</label>
                                            <input name="age" type="text" class="form-control" id="" placeholder="Enter Age">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Present Address</label>
                                            <input name="present_address" type="text" class="form-control" id="" placeholder="Present Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Permanent Address</label>
                                            <input name="permanent_address" type="text" class="form-control" id="" placeholder="Permanent Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Photo</label>
                                            <input type="file"  required="required" name="photo">
                                        </div>
                                         <div class="form-group">
                                            <label for="">Mobile #</label>
                                            <input name="mobile_no" type="text" class="form-control" id="mobileNo" placeholder="Enter Mobile no">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">NID #</label>
                                            <input name="nid_no" type="number" class="form-control" id="nid" placeholder="Enter NID">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Identification</label>
                                            <input name="identification" type="text" class="form-control" id="" placeholder="Enter Identificatiion">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Crime</label>
                                            <?php echo getCrimeListById() ; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Other</label>
                                            <input name="other" type="text" class="form-control" id="" placeholder="Enter Other">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Add Ciminal</button>
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
<script>
$(function(){

$('#nid').change(function(){

    var nidNo = $(this).val() ;

    if(! isNumeric(nidNo))
    {
        alert("Please Enter number") ;
        $(this).val = "" ;
    }

})

})

</script>

<?php include '../inc/footer.php' ; ?>
