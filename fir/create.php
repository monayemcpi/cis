<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h3 class="page-header"><i class="fa fa-plus-circle"></i> Add FIR</h3>
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
                            <h3 class="panel-title"><i class="fa fa-user"></i> Add FIR</h3>
                        </div>
                        <div class="panel-body">
                            <form action="add-fir-process.php" method="POST" role="form" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Subject </label>
                                            <input name="subject" type="text" class="form-control" id="" placeholder="Enter Subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Date </label>
                                            <input name="date" type="date" class="form-control" id="datepicker" placeholder="Enter Date">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="">FIR Person Name </label>
                                            <input name="name" type="text" class="form-control" placeholder="FIR person name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">FIR Person Address </label>
                                            <input name="address" type="text" class="form-control" placeholder="FIR person address">
                                        </div>
                                        <div class="form-group">
                                            <label for="">FIR Person Mobile no </label>
                                            <input name="mobile_no" type="text" class="form-control" placeholder="FIR person mobile no">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Select Criminal </label>
                                            <?php echo getCriminalListById(); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Select Crime</label>
                                          <?php  echo getCrimeListById(); ?>
                                        </div>
                                         <div class="form-group">
                                            <label for="">Details</label>
                                            <textarea name="details" id="summernote" class="form-control" rows="3" required="required"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Add Fir</button>
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