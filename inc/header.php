<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="WEB PROJECT">
    <meta name="MONAYEM" content="FF INFO ABOUT 1971">
    <title>CIS</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/datatables.min.css" rel="stylesheet">
    <link href="../css/summernote.css" rel="stylesheet">
    <link href="../css/jquery-ui.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
</head>

<body>
    <!-- Start Header -->
    <header class="header-main">
        <nav class="navbar navbar-default navbar-fixed-top top-navbar" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">CRIMINAL INFORMATION SYSTEM (CIS)</a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo getUserNameById($_SESSION['id']) ; ?><i class="fa fa-angle-down"> </i></a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="../login/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->