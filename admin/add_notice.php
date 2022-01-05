<?php 
session_start();
include_once('connection.php');
$msg = "";
  if (isset($_SESSION['msg'])) {
    $msg=$_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  if ($msg != "") {
    echo "<script> alert('$msg') </script>";
  }
  if($_SESSION['role']!='1'){
    header('location:index.php');
  }
$query="SELECT * FROM `add_notice` WHERE `status`='1'";
$run=mysqli_query($conn,$query);
while ($data=mysqli_fetch_assoc($run)) {
  $notice[]=$data;
}
// print_r($notice);die;
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include 'header-links.php'; ?>
  <title>ADD Notice | Diet</title>
</head>
<body>
  <?php include 'menu.php'; ?>
  <section class="page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-secondary text-light"><h4>Notice</h4></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="action.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="label">Add Notice</label>
                      <textarea class="form-control" name="notice" required=""></textarea>
                    </div>
                    <input type="submit" name="add_notice" class="btn btn-success btn-sm" value="Submit">
                  </form>
                </div>
                <div class="col-md-6">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-hovered table-bordered">
                      <thead>
                        <tr class="bg-dark text-light">
                          <th>#</th>
                          <th>Notice</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($notice as $notices) { ++$i; ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $notices['doc']; ?></td>
                          <td><a href="update_notice.php?id=<?php echo $notices['id']; ?>"><i class="fa fa-edit btn btn-sm btn-success"></i></a></td>
                          <td><a class="del" data-id="<?php echo $notices['id'] ?>"><i class="fa fa-trash-alt btn btn-sm btn-danger"></i></a></td>
                        </tr>  
                        <?php } ?>
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
  </section>
</body>
<?php include 'footer-links.php'; ?>
<script>
  $(document).ready(function(){
    $('#datatable').DataTable();
    $("body").on("click",".del",function(){
      var id=$(this).attr('data-id');
      if (confirm('You want to delete !!!')) {
        $.ajax({
          url:"action.php",
          type:"POST",
          data:{id:id,del_notice:'del_notice'},
          success: function(data){
            location.reload();
          }
        });
      }
      else{
        alert('Record Deletion Cancel!');
      }
    });
  });
</script>
</html>