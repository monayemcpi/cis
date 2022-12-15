<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<?php 

    $id = $_GET['id'] ;
    $sql = "SELECT * FROM users WHERE id='$id'";
    $result = $db->query($sql) ;
    while($data = $result->fetch_assoc()):

        $name   = $data['name'] ;
        $email  = $data['email'] ;
        $role   = $data['role'] ;

    endwhile;

 ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h2 class="page-header"><i class="fa fa-user"></i> Add User</h2>
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
                            <h3 class="panel-title"><i class="fa fa-user"></i> Edit User</h3>
                        </div>
                        <div class="panel-body">
                            <form action="" method="POST" role="form">
                                <input type="hidden" name="id" value="<?php echo $id ?>">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input name="name" type="text" class="form-control" id="" placeholder="Enter Name" value="<?php echo $name; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input name="email" type="email" class="form-control" id="" placeholder="Enter Email" value="<?php echo $email; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Role</label>
                                            <select name="role" id="inputRole" class="form-control" required="required">
                                                <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                                                <?php if($role != "Administrator"): ?>
                                                <option value="Administrator">Administrator</option>
                                                <?php endif;?>
                                                <?php if($role != "Police"): ?>
                                                <option value="Police">Police</option>
                                                <?php endif;?>
                                                <?php if($role != "User"): ?>
                                                <option value="User">User</option>
                                                <?php endif;?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Edit User</button>
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
<?php

if(isset($_POST['submit'])):
  $id       = $_POST['id'] ;
  $name     = $_POST['name'] ;
  $email    = $_POST['email'] ;
  $role     = $_POST['role'] ;
  $sql      = "UPDATE users SET name='$name',email='$email',role='$role' WHERE id = '$id'" ;
  $result   = $db->query($sql) ;

  if($result)
    redirectTo('../users/index.php') ;

endif;

?>