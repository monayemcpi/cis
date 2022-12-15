<?php include '../config/function.php' ; ?>
<?php checkLogin() ; ?>
<?php include '../inc/header.php' ; ?>
<div id="wrapper">
    <aside class="sidebar">
        <?php include '../inc/sidebar.php' ; ?>
    </aside>
    <main class="main-section" id="page-wrapper">
        <div class="header">
            <h3 class="page-header"> <i class="fa fa-cog"></i> Crime</h3>
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
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn btn-primary pull-right" data-toggle="modal" href='#addCrimeModal'><i class="fa fa-plus-circle"></i> Add Crime</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="dataTable" class="table table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Id#</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 

                                        $sql = "SELECT * FROM crimes" ;

                                        $result = $db->query($sql) ;
                                        $sl = 1 ;

                                        if($result):
                                            while($row = $result->fetch_assoc()):

                                                $id    = $row['id'] ;
                                                $name  = $row['name'] ;
                                        ?>
                                                <tr>
                                                    <td><?php echo $id ; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td>
                                                       <button type="button" class="btn btn-inline  btn-primary btn-sm btnEdit" data-toggle="modal" href='#editModal'><i class="fa fa-edit"></i> Edit</button>
                                                       <button type="button" class="btn btn-danger btn-sm btnDelete"><i class="fa fa-trash"></i> Delete</button>
                                                    </td>
                                                </tr>
                                                <?php  
                                    endwhile;
                                endif;
                                 ?>
                                            </tbody>
                                        </table>
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
<!-- Start Insert Modal -->
<div class="modal fade" id="addCrimeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="create.php" method="GET">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-plus"></i> Add Crime</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon1"> <i class="fa fa-desktop"></i> </span>
                            <input type="text" class="form-control" placeholder="Enter Crime Name" aria-describedby="sizing-addon1" name="name" required="required">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Add Crime </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-close"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Insert Modal -->
<!-- Start Edit Modal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
           <form action="edit.php" method="GET">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Crime</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group input-group-md">
                            <span class="input-group-addon" id="sizing-addon1"> <i class="fa fa-desktop"></i> </span>
                            <input type="hidden" id="id" name="id">
                            <input type="text" class="form-control" placeholder="Edit Crime Name" aria-describedby="sizing-addon1" name="name" required="required" id="editName">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Crime </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="fa fa-close"></i> Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Edit Modal -->
<script type="text/javascript">
    
$(document).ready(function(){

 $('.btnEdit').click(function(){

    var id   = $(this).parent().parent().find('td').eq(0).text() ;
    var name = $(this).parent().parent().find('td').eq(1).text() ;

    $('#editName').val(name) ;
    $('#id').val(id) ;

 })

 $('.btnDelete').click(function(e) {
     
var id   = $(this).parent().parent().find('td').eq(0).text() ;
     if(confirm('Are you sure ?')){

         
         window.location.href='delete.php?id='+id ;
     }
  e.preventDefault() ;


 });

})

</script>