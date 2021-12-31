<?php 
session_start();
include_once('connection.php');
$msg = "";
  if (isset($_SESSION['msg'])) {
    $msg=$_SESSION['msg'];
    unset($_SESSION['msg']);
  }
  if ($msg != "") {
    echo "<script>alert('$msg')</script>";
  }
  if($_SESSION['role']!='1'){
    header('location:index.php');
  }
$query="SELECT * FROM `sh_addcenter` WHERE `status`='1'";
$run=mysqli_query($conn,$query);
while ($data=mysqli_fetch_assoc($run)) {
  $center[]=$data;
}
 $query1="SELECT * FROM `course`";
  $run1=mysqli_query($conn,$query1);
  while ($data=mysqli_fetch_assoc($run1)) {
    $course[]=$data;
  }

  $query2="SELECT * FROM `student`";
  $run2=mysqli_query($conn,$query2);
  while ($data=mysqli_fetch_assoc($run2)) {
    $student[]=$data;
  }
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include 'header-links.php'; ?>
  <title>ADD Student |  Shivanya </title>
</head>
<body>
  <?php include 'menu.php'; ?>
  <section class="page">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header bg-secondary text-light"><h4>Add Student</h4></div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 mb-5" style=" box-shadow: 5px 10px 18px #888888;padding: 15px; border-radius: 15px;">
                  <form action="action.php" method="POST" enctype="multipart/form-data">
                     <div class="form-group row">
                         <div class="col-sm-6 mb-3">
                          <label class="label">Enroll No</label>
                         <input type="text" class="form-control" name="enroll_no" placeholder="Enter Enroll No">
                          </div> 
                          <div class="col-sm-6 mb-3">
                            <label class="label">Student Name</label>
                           <input type="text" class="form-control" name="std_name" placeholder="Enter Student Name">
                          </div> 
                          <div class="col-sm-6 mb-3">
                            <label class="label">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="label">Center Name</label>
                            <!-- <input type="text" class="form-control" name="cntr_name" placeholder="Enter Student Name"> -->
                            <select name="cntr_name" class="form-control">
                              <option value=" ">---SELECT---</option>
                              <?php
                              if(!empty($center)){
                                foreach ($center as $key => $value) {
                                  ?>
                                    <option value="<?php echo $value['cent_code']?>"><?php echo $value['cent_name']?></option>

                                  <?php
                                }
                              }
                              ?>
                            </select>
                          </div> 
                          <div class="col-sm-6 mb-3">
                            <label class="label">Course Name</label>
                            <!-- <input type="text" class="form-control" name="cntr_name" placeholder="Enter Student Name"> -->
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
                          <div class="col-sm-6 mb-3">
                            <label class="label">Contact No.</label>
                            <input type="text" class="form-control" name="mobile" placeholder="Enter Contact No.">
                          </div> 
                          <div class="col-sm-12 mb-3">
                            <label class="label">Address</label>
                            <textarea class="form-control" name="address" rows="3" col="12"></textarea>
                          </div>                                
                          
                          <div class="col-sm-6 mb-3">
                            <label class="label">Email</label>
                            <input type="mail" class="form-control" name="email" placeholder="Enter Email">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="label">Password</label>
                            <input type="text" class="form-control" name="pass" placeholder="Enter Password">
                          </div>
                      </div>
                    <input type="submit" name="add_student" class="btn btn-success btn-sm" value="Submit">
                  </form> 
                </div>
                <div class="col-md-12">
                  <div class="table-responsive">
                    <table id="datatable" class="table table-hovered table-bordered">
                      <thead>
                        <tr class="bg-dark text-light">
                          <th>#</th>
                          <th>Enroll No</th>
                          <th>Student Name</th>
                          <th>Date Of Birth</th>
                          <th>Center Name</th>
                          <th>Course Name</th>
                          <th>Address</th>
                          <th>Contact No.</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $i=0; foreach ($student as $studentlist) { ++$i; ?>
                        <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $studentlist['enroll_no']; ?></td>
                          <td><?php echo $studentlist['std_name']; ?></td>
                          <td><?php echo date('d-m-Y',strtotime($studentlist['dob'])); ?></td>
                          <td><?php echo $studentlist['cntr_name']; ?></td>
                          <td><?php echo $studentlist['course']; ?></td>
                          <td><?php echo $studentlist['address']; ?></td>
                          <td><?php echo $studentlist['mobile']; ?></td>
                          <td><?php echo $studentlist['email']; ?></td>
                          <td><?php echo $studentlist['pass']; ?></td>
                          <td>
                    <button type="button" class="btn btn-success btn-xs updt" data-toggle="modal" data-id="<?php echo $studentlist['id'];?>" data-enroll_no="<?php echo $studentlist['enroll_no'];?>" data-std_name="<?php echo $studentlist['std_name'];?>" data-dob="<?php echo $studentlist['dob'];?>" data-cntr_name="<?php echo $studentlist['cntr_name'];?>"  data-course="<?php echo $studentlist['course'];?>" data-address="<?php echo $studentlist['address'];?>" data-mobile="<?php echo $studentlist['mobile'];?>" data-email="<?php echo $studentlist['email'];?>" data-pass="<?php echo $studentlist['pass'];?>"  data-target=".bd-example-modal-lg"><i class="fa fa-edit"></i></button> 
                      <a class=" btn btn-sm btn-danger delete" data-id="<?php echo $studentlist['id'] ?>"><i class="fa fa-trash-alt btn btn-sm btn-danger"></i></a></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="action.php" method="POST" enctype="multipart/form-data">
                    
                     <div class="form-group row">
                         <div class="col-sm-6 mb-3">
                          <label class="label">Enroll No</label>
                         <input type="text" class="form-control" name="enroll_no" id="enroll_no" placeholder="Enter Enroll No">
                         <input type="hidden" name="id" id="id">
                          </div> 
                          <div class="col-sm-6 mb-3">
                            <label class="label">Student Name</label>
                           <input type="text" class="form-control" name="std_name" id="std_name" placeholder="Enter Student Name">
                          </div> 
                          <div class="col-sm-6 mb-3">
                            <label class="label">Date Of Birth</label>
                            <input type="date" class="form-control" name="dob" id="dob">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="label">Center Name</label>
                            <!-- <input type="text" class="form-control" name="cntr_name" placeholder="Enter Student Name"> -->
                            <select name="cntr_name" class="form-control" id="cntr_name">
                              <option value=" ">---SELECT---</option>
                              <?php
                              if(!empty($center)){
                                foreach ($center as $key => $value) {
                                  ?>
                                    <option value="<?php echo $value['cent_code']?>"><?php echo $value['cent_name']?></option>

                                  <?php
                                }
                              }
                              ?>
                            </select>
                          </div> 
                          <div class="col-sm-6 mb-3">
                            <label class="label">Course Name</label>
                            <!-- <input type="text" class="form-control" name="cntr_name" placeholder="Enter Student Name"> -->
                           <select name="course" class="form-control" id="course">
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
                          <div class="col-sm-6 mb-3">
                            <label class="label">Contact No.</label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Contact No.">
                          </div> 
                          <div class="col-sm-12 mb-3">
                            <label class="label">Address</label>
                            <textarea class="form-control" name="address" id="address" rows="3" col="12"></textarea>
                          </div>                                
                          
                          <div class="col-sm-6 mb-3">
                            <label class="label">Email</label>
                            <input type="mail" class="form-control" name="email" id="email" placeholder="Enter Email">
                          </div>
                          <div class="col-sm-6 mb-3">
                            <label class="label">Password</label>
                            <input type="text" class="form-control" name="pass" id="pass" placeholder="Enter Password">
                          </div>
                      </div>
                   <input type="submit" name="update_student" class="btn btn-warning" value="Update">
                 
                </div>
                      </div>
                    
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
    var enroll_no = $(this).data('enroll_no');
    var std_name = $(this).data('std_name');
    var dob = $(this).data('dob');
    var cntr_name = $(this).data('cntr_name');
    var course = $(this).data('course');
    var mobile = $(this).data('mobile');
    var address = $(this).data('address');
    var email = $(this).data('email');
    var pass = $(this).data('pass');
    
    $('#id').val(id);
    $('#enroll_no').val(enroll_no);
    $('#std_name').val(std_name);
    $('#dob').val(dob);
    $('#cntr_name').val(cntr_name);
    $('#course').val(course);
    $('#mobile').val(mobile);
    $('#address').val(address);
    $('#email').val(email);
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
               data:{id:id,del_student:'del_student'},
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