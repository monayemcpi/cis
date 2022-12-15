<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<?php 

	$id = $_GET['id'] ;

	$sql = "SELECT * FROM fir WHERE id='$id'" ;

	$result = $db->query($sql) ;

	while($data = $result->fetch_assoc()):

		$date 	 		= $data['date'] ;
		$subject 		= $data['subject'] ;
		$crime_id   	= $data['crime_id'];
		$criminal_id   	= $data['criminal_id'];
		$name 			= $data['name'] ;
		$address 		= $data['address'] ;
		$mobile_no 		= $data['mobile_no'] ;
		$details 		= $data['details'] ;

	endwhile;

 ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h3 class="page-header"><i class="fa fa-edit"></i> Edit FIR</h3>
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
                            <h3 class="panel-title"><i class="fa fa-user"></i> Edit FIR</h3>
                        </div>
                        <div class="panel-body">
                            <form action="update.php" method="POST" role="form" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Subject </label>
                                            <input value="<?php echo $subject; ?>"  name="subject" type="text" class="form-control" id="" placeholder="Enter Subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Date </label>
                                            <input value="<?php echo $date; ?>" name="date" type="date" class="form-control" id="datepicker" placeholder="Enter Subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Crime</label>
                                            <?php echo  getCrimeListById($crime_id) ; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Criminal</label>
                                            <?php echo  getCriminalListById($criminal_id) ; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">FIR Person Name </label>
                                            <input value="<?php echo $name; ?>" name="name" type="text" class="form-control" placeholder="FIR person Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">FIR Person Address </label>
                                            <input value="<?php echo $address; ?>" name="address" type="text" class="form-control" placeholder="FIR person address">
                                        </div>
                                        <div class="form-group">
                                            <label for="">FIR Person Mobile no </label>
                                            <input value="<?php echo $mobile_no; ?>" name="mobile_no" type="number" class="form-control" placeholder="FIR mobile no">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Details</label>
                                            <textarea name="details" id="summernote" class="form-control" rows="3" required="required" placeholder="Enter details">
                                                <?php echo $details; ?>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit GD</button>
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

