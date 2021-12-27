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
$query="SELECT * FROM `sh_addcenter` WHERE `status`='1'";
$run=mysqli_query($conn,$query);
while ($data=mysqli_fetch_assoc($run)) {
  $center[]=$data;
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
                <div class="col-md-4">
                  <form action="action.php" method="POST" enctype="multipart/form-data">
                     <div class="form-group row">
                         <div class="col-sm-12 mb-3">
                          <label class="label">Center Code</label>
                         <input type="text" class="form-control" name="cent_code" placeholder="Enter Center Code">
                          </div> 
                          <div class="col-sm-12 mb-3">
                            <label class="label">Center Name</label>
                           <input type="text" class="form-control" name="cent_name" placeholder="Enter Center Name">
                          </div> 
                          <div class="col-sm-12 mb-3">
                            <label class="label">Address</label>
                            <textarea class="form-control" name="address" rows="3" col="12"></textarea>
                          </div>   
                          <div class="col-sm-12 mb-3">
                            <label class="label">Contact No.</label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Center Name">
                          </div>                                
                          <div class="col-sm-12 mb-3">
                            <label class="label">Email</label>
                            <input type="mail" class="form-control" name="mail" placeholder="Enter Email">
                          </div>
                             <div class="col-sm-12 mb-3">
                            <label class="label">Password</label>
                            <input type="text" class="form-control" name="pass" placeholder="Enter Password">
                          </div>
                          <div class="col-sm-12 mb-3">
                            <label class="label">Role</label>
                            <select name="role" class="form-control">
                              <option >---Select---</option>
                              <option value="2">Center</option>
                            </select>
                          </div>
                      </div>
                    <input type="submit" name="add_center" class="btn btn-success btn-sm" value="Submit">
                  </form> 
                </div>
                <div class="col-md-8">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-hovered table-bordered">
                      <thead>
                        <tr class="bg-dark text-light">
                          <th>#</th>
                          <th>Center Code</th>
                          <th>Center Name</th>
                          <th>Address</th>
                          <th>Contact No.</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($center as $centerlist) { ++$i; ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $centerlist['cent_code']; ?></td>
                          <td><?php echo $centerlist['cent_name']; ?></td>
                          <td><?php echo $centerlist['address']; ?></td>
                          <td><?php echo $centerlist['mobile']; ?></td>
                          <td><?php echo $centerlist['email']; ?></td>
                          <td><?php echo $centerlist['password']; ?></td>
                          <td><a href="update_news.php?id=<?php echo $centerlist['id']; ?>"><i class="fa fa-edit btn btn-sm btn-success"></i></a>
                          <a class=" btn btn-sm btn-danger delete" data-id="<?php echo $centerlist['id'] ?>"><i class="fa fa-trash-alt btn btn-sm btn-danger"></i></a></td>
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
<script type="text/javascript">
   // $("body").on("click",".del",function(){
   //    debugger;
   //    var id=$(this).attr('data-id');
   //    if (confirm('You want to delete !!!')) {
   //      $.ajax({
   //        url:"action.php",
   //        type:"POST",
   //        data:{id:id,del_center:'del_center'},
   //        success: function(data){
   //          location.reload();
   //        }
   //      });
   //    }
   //    else{
   //      alert('Record Deletion Cancel!');
   //    }
   //  });

    $('.delete').click(function(e){
        debugger;
        // var id=$(this).closest('tr').find('.delete').val();
         var id=$(this).attr('data-id');
        if(confirm('Are you Sure !')){
        $.ajax({
                type:'POST',
                url:'action.php',
               data:{id:id,del_center:'del_center'},
                success: function(result){
                    alert(result);
                    console.log(result);
                    location.reload();
                    },
                    error: function(){
                    alert("error");
                    },
        });
    }
    return false;
    });
  $(document).ready(function(){
    $('#datatable').DataTable();



    // $("body").on("click",".del",function(){
    //   debugger;
    //   var id=$(this).attr('data-id');
    //   if (confirm('You want to delete !!!')) {
    //     $.ajax({
    //       url:"action.php",
    //       type:"POST",
    //       data:{id:id,del_center:'del_center'},
    //       success: function(data){
    //         location.reload();
    //       }
    //     });
    //   }
    //   else{
    //     alert('Record Deletion Cancel!');
    //   }
    // });

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