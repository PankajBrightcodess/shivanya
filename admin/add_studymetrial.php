<?php 
session_start();
  include_once('../admin/connection.php');
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
  $query="SELECT * FROM `course`";
  $run=mysqli_query($conn,$query);
  while ($data=mysqli_fetch_assoc($run)) {
    $course[]=$data;
  }

  $query="SELECT * FROM `material_upload`";
  $run=mysqli_query($conn,$query);
  while ($data=mysqli_fetch_assoc($run)) {
    $material[]=$data;
  }
  // echo '<pre>';
  // print_R($material);die;
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include '../admin/header-links.php'; ?>
  <title>ADD Study Material |  Shivanya </title>
</head>
<body>
  <?php include 'menu.php'; ?>
  <section class="page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-secondary text-light"><h4>Add Study Material</h4></div>
            <div class="card-body">
              <div class="row">
               <div class="col-md-5">
					<!-- <div class="col-md-12 dashboard mb-3">
						<h1 style="color:#403226; margin-top: 2rem; text-align: center;"><?php print_r($_SESSION['id'])?></h1>
					</div> -->
					<form method="POST" action="action.php" enctype="multipart/form-data"> 
						<div class="col-md-12 mb-3">
							<label>Course</label>
							<select name="course" class="form-control">
                <option value="">---SELECT---</option>
                <?php
                  if(!empty($course)){
                    foreach ($course as $key => $value) {
                      ?>
                      <option value="<?php echo $value['short_name'];?>"><?php echo $value['course_name'],' ('.$value['short_name'].')'?></option>
                      <?php
                    }
                  }
                ?>
              </select>
						</div>
						<div class="col-md-12 mb-3">
							<label>Topic name </label>
							<input type="text" name="topic_name" class="form-control" placeholder="Enter Topic Name">
							<!-- <input type="hidden" name="topic_name" value="" class="form-control"> -->
						</div>
						<div class="col-md-12 mb-3">
							<label>Upload Material(.jpg format) </label>
							<input type="file" name="upload_image" accept="image/*" class="form-control">
						</div>
            <div class="col-md-12 mb-3">
              <label>Upload Material(.pdf format) </label>
              <input type="file" name="upload_pdf" accept="pdf/PDF"  class="form-control">
            </div>
             <div class="col-md-12 mb-3">
              <label>Video Link</label>
              <input type="file" name="video_link" accept="video/*"  class="form-control">
              <!-- <input type="text" name="video_link" placeholder="Enter Video Link" class="form-control"> -->
            </div>
						<div class="col-md-12">
							<input type="submit" name="material_upload" class="btn btn-sm btn-success">
						</div>
					</form>
					
				</div>
				<div class="col-md-7">
               		<table id="datatable" class="table table-hovered table-bordered">
                      <thead>
                        <tr class="bg-dark text-light">
                          <th>#</th>
                          <th>Course</th>
                          <th>Topic Name</th>
                          <th>Download image</th>
                          <th>Download Pdf</th>
                          <th>Upload Video Link</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($material as $materials) { ++$i; ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $materials['course']; ?></td>
                          <td><?php echo $materials['topic_name']; ?></td>
                          <td>
                            <?php
                            if($_SESSION['role']=='1' && $materials['upload_image']!=''){
                                    ?><a href="../study_material/image/<?php echo $materials['upload_image']; ?>" class="btn btn-sm btn-warning">Image Download</a></td><?php
                             }
                            ?>
                          </td>
                          <td>
                            <?php
                            if($_SESSION['role']=='1' && $materials['upload_pdf']!=''){
                                    ?><a href="../study_material/pdf/<?php echo $materials['upload_pdf']; ?>" class="btn btn-sm btn-success">Pdf Download</a></td><?php
                             }
                            ?></td>
                          <td>
                            <?php
                              if(!empty($materials['video'])){
                                ?>
                                  <video width="320" height="240" controls>
                                     <source src="../study_material/video/<?php echo $materials['video']; ?>" type="video/mp4">
                                   </video>
                                <?php
                              }
                              else{
                                ?><h6>Comming Soon...</h6><?php
                              }
                            ?>
                            </td>

                          <td>
                              <a class=" btn btn-sm btn-danger delete" data-id="<?php echo $materials['id'] ?>"><i class="fa fa-trash-alt btn btn-sm btn-danger"></i></a></td>
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
               data:{id:id,del_material:'del_material'},
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