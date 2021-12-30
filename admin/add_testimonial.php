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
$query="SELECT * FROM `testimonial` WHERE `status`='1'";
$run=mysqli_query($conn,$query);
while ($data=mysqli_fetch_assoc($run)) {
  $testimonial[]=$data;
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
            <div class="card-header bg-secondary text-light"><h4>Add Testimonial</h4></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-5">
                  <form action="action.php" method="POST" enctype="multipart/form-data">
                     <div class="form-group row">
                          <div class="col-sm-12 mb-3">
                             <label class="label">Testimonial</label>
                             <textarea class="form-control" name="testimonial" rows="3" col="12"></textarea>
                          </div> 
                          <div class="col-sm-12 mb-3">
                            <label class="label">Name</label>
                            <input type="text" class="form-control" name="testi_name" placeholder="Enter Name">
                          </div>
                          
                      </div>
                    <input type="submit" name="addtestim" class="btn btn-success btn-sm" value="Submit">
                  </form> 
                </div>
                <div class="col-md-7">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-hovered table-bordered">
                      <thead>
                        <tr class="bg-dark text-light">
                          <th>#</th>
                          <th>Testimonial</th>
                          <th>Name</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($testimonial as $testimo) { ++$i; ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $testimo['testimonial']; ?></td>
                          <td><?php echo $testimo['testi_name']; ?></td>
                          <td>
                            <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-id="<?php echo $testimo['id'];?>" data-testimonial="<?php echo $testimo['testimonial'];?>" data-testi_name="<?php echo $testimo['testi_name'];?>" data-target=".bd-example-modal-lg"><i class="fa fa-edit"></i></button> 
                            <a class=" btn btn-sm btn-danger delete" data-id="<?php echo $testimo['id'] ?>"><i class="fa fa-trash-alt btn btn-sm btn-danger"></i></a></td>
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
  <!-- --------------------------------------------Modal----------------------------------------------- -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Testimonial</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="action.php" method="POST" enctype="multipart/form-data">
         <div class="form-group row">
              <div class="col-sm-12 mb-3">
                 <label class="label">Testimonial</label>
                  <!-- <input type="text" class="form-control" name="testimonial" id="testimonial" placeholder="Enter Testimonial"> -->
                 <textarea class="form-control" name="testimonial" id="testimonial" rows="3" col="12"> </textarea>
              </div> 
              <div class="col-sm-12 mb-3">
                <label class="label">Name</label>
                <input type="text" class="form-control" name="testi_name" id="testi_name" placeholder="Enter Name">
                <input type="hidden" class="form-control" name="id" id="id">
              </div>
              
          </div>
        <input type="submit" name="update_testimonial" class="btn btn-warning" value="Update">
      </form>
      </div>
   <!--    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Update</button>
      </div> -->
    </div>
  </div>
</div>
<!-- --------------------------------------------Modal End------------------------------------------- -->
</body>
<?php include 'footer-links.php'; ?>
<script type="text/javascript">
   

    $('.updt').click(function(e){
    var id = $(this).data('id');
    var testi_name = $(this).data('testi_name');
    var testimonial = $(this).data('testimonial');
    // alert(testimonial);
    $('#id').val(id);
    $('#testi_name').val(testi_name);
    $('#testimonial').val(testimonial); 
  });
    $('.delete').click(function(e){
        debugger;
        // var id=$(this).closest('tr').find('.delete').val();
         var id=$(this).attr('data-id');
        if(confirm('Are you Sure !')){
        $.ajax({
                type:'POST',
                url:'action.php',
               data:{id:id,del_testimonial:'del_testimonial'},
                success: function(result){
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