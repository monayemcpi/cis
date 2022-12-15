<?php include '../inc/header-login.php' ; ?>
<div id="wrapper">
    <div class="container">
        <section class="login-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"> <i class="fa fa-sign-in"></i> Login</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <form action="login-process.php" method="POST" role="form">
                                        <div class="form-group">
                                            <div class="input-group input-group-md">
                                                <span class="input-group-addon" id="sizing-addon1"> <i class="fa fa-envelope"></i> </span>
                                                <input type="email" class="form-control" placeholder="Enter Email" aria-describedby="sizing-addon1" name="email" required="required">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-md">
                                                <span class="input-group-addon" id="sizing-addon1"> <i class="fa fa-key"></i> </span>
                                                <input type="password" class="form-control" placeholder="Enter Password" aria-describedby="sizing-addon1" name="password" required="required">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary"> <i class="fa fa-sign-in"></i> Login</button>
                                        <button type="reset" class="btn btn-danger"> <i class="fa fa-reload"></i> Reset</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<?php include '../inc/footer.php' ; ?>