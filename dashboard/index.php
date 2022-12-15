<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h3 class="page-header"> <i class="fa fa-dashboard"></i> Dashboard </h3>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="panel-right">
                            <h3><?php echo totalUser() ; ?></h3>
                            <strong> Total User</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa-plane fa-5x"></i>
                        </div>
                        <div class="panel-right">
                            <h3><?php echo totalCrime(); ?></h3>
                            <strong> No. Of Crime</strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="panel-right">
                            <h3><?php echo totalCriminal() ; ?> </h3>
                            <strong>Total Criminal </strong>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa-desktop fa-5x"></i>
                        </div>
                        <div class="panel-right">
                            <h3><?php echo totalgd(); ?> </h3>
                            <strong>GD</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary text-center no-boder blue">
                        <div class="panel-left pull-left blue">
                            <i class="fa fa-file-o fa-5x"></i>
                        </div>
                        <div class="panel-right">
                            <h3><?php echo totalFir() ; ?></h3>
                            <strong> Total FIR</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include '../inc/footer.php' ; ?>