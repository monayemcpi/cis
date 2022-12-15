<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h3 class="page-header"> <i class="fa fa-dashboard"></i> GD REPORT </h3>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
        <div id="page-inner">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <form action="" method="GET" role="form" class="form-inline">
                                        <div class="form-group">
                                            <p>From</p>
                                            <input type="date" class="form-control" id="to_date" placeholder="Select Date">
                                        </div>
                                        <div class="form-group">
                                            <p>To</p>
                                            <input type="date" class="form-control" id="from_date" placeholder="Select Date">
                                        </div>
                                    </form>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="gd-report" id="DivIdToPrint"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<?php include '../inc/footer.php' ; ?>