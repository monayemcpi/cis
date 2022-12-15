<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<?php 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM gd WHERE id = '".$id."'" ;
    $result = $db->query($sql) ;

    if($result):
        while($data = $result->fetch_assoc()):

            $subject    = $data['subject'] ;
            $date       = $data['date'] ;
            $avidance   = $data['avidance'] ;
            $details    = $data['details'] ;
            $name       = $data['name'] ;
            $address    = $data['address'] ;
            $mobile_no  = $data['mobile_no'] ;
        
        endwhile;
    endif;
 ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h3 class="page-header"><i class="fa fa-edit"></i> Edit GD</h3>
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
                            <h3 class="panel-title"><i class="fa fa-user"></i> Edit GD</h3>
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
                                            <label for="">Avidance </label>
                                            <img src="../images/gd/<?php echo  $avidance ; ?>" alt="" class="img-responsive" style="width:30%;">
                                            <input type="hidden" name="avidance" value="<?php echo  $avidance ; ?>">
                                            <input name="avidance" type="file">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">GD person name </label>
                                            <input value="<?php echo $name; ?>" name="name" type="text" class="form-control" placeholder="GD Person Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">GD person address </label>
                                            <input value="<?php echo $address; ?>" name="address" type="text" class="form-control" placeholder="GD Person Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="">GD person mobile no </label>
                                            <input value="<?php echo $mobile_no; ?>" name="mobile_no" type="number" class="form-control" placeholder="GD Person Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Details</label>
                                            <textarea name="details" id="summernote" class="form-control" rows="3" required="required">
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