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
  $id = $_SESSION['id'];
  $query="SELECT * FROM `addpayment` WHERE `payment_status`='1' AND `category`='franchise'";
  $run=mysqli_query($conn,$query);
  while ($data=mysqli_fetch_assoc($run)) {
    $center[]=$data;
  }
  // echo '<pre>';
  // print_r($center);die;
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include '../admin/header-links.php'; ?>
  <title>New Center List |  Shivanya </title>
</head>
<body>
  <?php include 'menu.php'; ?>
  <section class="page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-secondary text-light"><h4>Centre Franchise List</h4></div>
            <div class="card-body">
              <div class="row">
  				     <div class="col-md-12">
                 		<table id="datatable" class="table table-hovered table-bordered">
                        <thead>
                          <tr class="bg-dark text-light">
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>Institute Name </th>
                            <th>Amount</th>
                            <th>Payment Status</th>
                            
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=0; foreach ($center as $franchise) { ++$i; ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $franchise['name']; ?></td>
                            <td><?php echo $franchise['email']; ?></td>
                            <td><?php echo $franchise['phone']; ?></td>
                            <td><?php echo $franchise['ins_name']; ?></td>
                            <td><?php echo $franchise['amount'].'/-'; ?></td>
                            <td><span style="background: green; color: white; border-radius: 20px; padding: 10px;">Paid</span></td>
                            
                            <td>
                                <a class=" btn btn-sm btn-danger delete" data-id="<?php echo $franchise['id'] ?>"><i class="fa fa-trash-alt btn btn-sm btn-danger"></i></a>
                            </td>
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
  </section>
  <!-- --------------------------------------------Modal----------------------------------------------- -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> -->


<!-- --------------------------------------------Modal End------------------------------------------- -->
</body>
<?php include '../admin/footer-links.php'; ?>
<script type="text/javascript">
   

    $('.updt').click(function(e){
    var id = $(this).data('id');
    var cent_code = $(this).data('cent_code');
    var cent_name = $(this).data('cent_name');
    var address = $(this).data('address');
    var mobile = $(this).data('mobile');
    var mail = $(this).data('email');
    var pass = $(this).data('password');
    
    $('#id').val(id);
    $('#cent_code').val(cent_code);
    $('#cent_name').val(cent_name);
    $('#address').val(address);
    $('#mobile').val(mobile);
    $('#mail').val(mail);
    $('#pass').val(pass);
    
  });
$('.delete').click(function(e){
        debugger;
        // var id=$(this).closest('tr').find('.delete').val();
         var id=$(this).attr('data-id');
        if(confirm('Are you Sure !')){
        $.ajax({
                type:'POST',
                url:'action.php',
               data:{id:id,del_finallist:'del_finallist'},
                success: function(result){
                    // alert(result);
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