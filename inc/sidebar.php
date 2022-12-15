

<ul id="main-menu" class="nav">
    <li><a href="../dashboard/index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="../crime/index.php"><i class="fa fa-cog"></i> Crime</a></li>
    <li class="sidebar-dropdown-btn"><a href="#"><i class="fa fa-user"></i>  Criminal <i class="fa fa-angle-down pull-right"></i></a>
        <ul class=" nav-second-level nav">
            <li><a href="../criminal/create.php"> <i class="fa fa-circle-o"></i> Add Criminal</a></li>
            <li><a href="../criminal/index.php"><i class="fa fa-circle-o"></i> All Criminal</a></li>
        </ul>
    </li>
    <?php if(userRole() == "Administrator" || userRole() == "Police"): ?>
    <li class="sidebar-dropdown-btn"><a href="#"><i class="fa fa-file"></i>  GD <i class="fa fa-angle-down pull-right"></i></a>
        <ul class=" nav-second-level nav">
            <li><a href="../gd/create.php"> <i class="fa fa-circle-o"></i> Add GD</a></li>
            <li><a href="../gd/index.php"><i class="fa fa-circle-o"></i> All GD</a></li>
        </ul>
    </li>
    <li class="sidebar-dropdown-btn"><a href="#"><i class="fa fa-file"></i>  FIR <i class="fa fa-angle-down pull-right"></i></a>
        <ul class=" nav-second-level nav">
            <li><a href="../fir/create.php"> <i class="fa fa-circle-o"></i> Add FIR</a></li>
            <li><a href="../fir/index.php"><i class="fa fa-circle-o"></i> All FIR</a></li>
        </ul>
    </li>
    <?php endif;?>
    <?php if(userRole() == "Administrator"): ?>
    <li class="sidebar-dropdown-btn"><a href="#"><i class="fa fa-desktop"></i>  User <i class="fa fa-angle-down pull-right"></i></a>
        <ul class=" nav-second-level nav">
            <li><a href="../users/create.php"> <i class="fa fa-circle-o"></i> Add User</a></li>
            <li><a href="../users/index.php"><i class="fa fa-circle-o"></i> All User</a></li>
        </ul>
    </li>
    <?php endif; ?>
     <li class="sidebar-dropdown-btn"><a href="#"><i class="fa fa-file-o"></i>  Report <i class="fa fa-angle-down pull-right"></i></a>
        <ul class=" nav-second-level nav">
            <li><a href="../report/gd.php"> <i class="fa fa-circle-o"></i> GD Report</a></li>
            <li><a href="../report/fir.php"><i class="fa fa-circle-o"></i> FIR Report</a></li>
        </ul>
    </li>
</ul>