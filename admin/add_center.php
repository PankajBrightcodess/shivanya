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
$query="SELECT * FROM `fun_aboutus` WHERE `status`='1'";
$run=mysqli_query($conn,$query);
while ($data=mysqli_fetch_assoc($run)) {
  $news[]=$data;
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include 'header-links.php'; ?>
  <title>ADD Center |  Shivanya </title>
</head>
<body>
  <?php include 'menu.php'; ?>
  <section class="page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-secondary text-light"><h4>Add Center</h4></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <form action="action.php" method="POST" enctype="multipart/form-data">
                     <div class="form-group row">
                                   <div class="col-sm-12 mb-3">
                                    <label class="label">Heading</label>
                                   <input type="text" class="form-control" name="heading" placeholder="Enter Heading">
                                    </div> 
                                    <div class="col-sm-12">
                                      <label class="label">Description</label>
                                    <textarea class="form-control" name="description" id="editor1" rows="8" col="12"></textarea>
                                    </div>                                    
                      </div>
                    <input type="submit" name="add_aboutus" class="btn btn-success btn-sm" value="Submit">
                  </form>
                </div>
                <div class="col-md-6">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-hovered table-bordered">
                      <thead>
                        <tr class="bg-dark text-light">
                          <th>#</th>
                          <th>Heading</th>
                          <th>Description</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($news as $newss) { ++$i; ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $newss['heading']; ?></td>
                          <td><?php echo $newss['description']; ?></td>
                          <td><a href="update_news.php?id=<?php echo $newss['id']; ?>"><i class="fa fa-edit btn btn-sm btn-success"></i></a></td>
                          <td><a class="del" data-id="<?php echo $newss['id'] ?>"><i class="fa fa-trash-alt btn btn-sm btn-danger"></i></a></td>
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
          data:{id:id,del_aboutus:'del_aboutus'},
          success: function(data){
            location.reload();
          }
        });
      }
      else{
        alert('Record Deletion Cancel!');
      }
    });

    var table=$('.data-table').DataTable({
      scrollCollapse: true,
      autoWidth: false,
      responsive: true,
      columnDefs: [{
        targets: "no-sort",
        orderable: false,
      }],
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      "language": {
        "info": "_START_-_END_ of _TOTAL_ entries",
        searchPlaceholder: "Search"
      },
    });


let editor;
    ClassicEditor
        .create(document.querySelector('#editor1'), {

        })
        .then(newEditor => {
            editor = newEditor;
            //console.log(editor.config._config.toolbar); 
        }, editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

        $('.hoverable').mouseenter(function(){
            //$('[data-toggle="popover"]').popover();
            $(this).popover('show');                    
        }); 

        $('.hoverable').mouseleave(function(){
            $(this).popover('hide');
        });

        function convertToSlug(Text) {
  return Text.toLowerCase()
             .replace(/[^\w ]+/g, '')
             .replace(/ +/g, '-');
}





  });





</script>
</html>