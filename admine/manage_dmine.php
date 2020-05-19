<?php 
include("include/connection.php");

if (isset($_POST['save'])) {
	/*echo "1111111111";die;*/
	 $email    =$_POST['admin_email'];
	 $fullname =$_POST['admin_fullname'];
	 $pass     =$_POST['admin_password'];

 $query= "INSERT INTO adminpro (admin_email,fullname,admin_password)
         VALUES ('$email','$fullname','$pass')";
 mysqli_query($conn,$query);        
	
}

if (isset($_POST['confirm'])) {
   $id       =$_POST['admin_id'];
   $email    =$_POST['eadmin_email'];
   $fullname =$_POST['eadmin_name'];
   $pass     =$_POST['eadmin_password'];

   $query = "UPDATE  adminpro set admin_email='$email' , admin_password='$pass' , fullname='$fullname' where admin_id=$id";
           mysqli_query($conn,$query);
header("location:manage_dmine.php");

}

if (isset($_GET['delete'])) {
     $query = "delete from adminpro where admin_id={$_GET['delete']}";
          mysqli_query($conn,$query);
}
?>
<?php include("include/header.php"); ?>



 <!-- modal Edit -->
 
       <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                     <div class="modal-header">
                      <hr>
                          <h5 class="modal-title" id="smallmodalLabel">Edit Admin</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                     </div>
                      <div class="modal-body">
                     <form action="" method="post" >
                           
                                  <input id="eid" name="admin_id" type="hidden" class="form-control">
                                  <div class="form-group has-success">
                                  <label>AdminName</label>
                                  <input name="eadmin_name" type="text" class="form-control" id="efullname">
                                 </div>
                                  <div class="form-group has-success">
                                  <label>AdminFullname</label>
                                  <input name="eadmin_email" type="text" class="form-control" id="email">
                                 </div>
                                  <div class="form-group has-success">
                                  <label>AdminPassword</label>
                                  <input name="eadmin_password" type="text" class="form-control" id="epass">
                                 </div>
                                
                                 
                            <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                  <button type="submit" name="confirm"  class="btn btn-primary" id="btn1" >Confirm</button>
                            </div>
                     </form>
                </div>
            </div>
     </div>
</div>
<!-- end modal Edit -->



<section id="main-content">
      <section class="wrapper">
  <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                ADD ADMINE
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" method="POST" action="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Admine FullName <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="cname" name="admin_fullname"  type="text" required />
                      </div>
                    </div>
                     <div id="done"></div>
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Admine E-Mail <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="admail" type="email" name="admin_email" required />
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Admine Password <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="password" name="admin_password" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit" name="save">Save</button>
                        <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Advanced Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                  	 <th><i class="fas fa-id-card"></i> ID</th>
                    <th><i class="icon_profile"></i> Full Name</th>
                   
                    <th><i class="icon_mail_alt"></i> Email</th>
                    <th><i class="fas fa-edit"></i> EDIT</th>
                    <th><i class="fas fa-trash-alt"></i></i> DELETE</th>
                   
                  </tr>
                 
                  <tr>
                  	 <?php
                           $query = "select * from adminpro" ;
                           $result=mysqli_query($conn,$query);
                           while ($adminpro=mysqli_fetch_assoc($result)) {?>

                    <td ><?php echo $adminpro['admin_id'];?></td>

                    <td                      id="jfullname<?php echo $adminpro['admin_id']; ?>"><?php echo $adminpro['fullname'] ?></td>

                    <td                       id="jemail<?php echo $adminpro['admin_id']; ?>"><?php echo $adminpro['admin_email'] ?></td>

                     <span  class="jpassword" id="jpass<?php echo $adminpro['admin_id']; ?>"><?php echo $adminpro['admin_password'] ?></span>

                    <td>  <button type="button"  class="btn btn-secondary mb-1 edit" data-toggle="modal" data-target="#smallmodal" 
                    value="<?php echo$adminpro['admin_id']; ?>" >
                          <span class="glyphicon glyphicon-edit"></span>
                           Edit </button>
                          </td></td>
                    <td> <?php echo "<a href='manage_dmine.php?delete={$adminpro['admin_id']}' class='btn btn-danger'>Delete</a>"?></td>
                  </tr>
                  <?php  } ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
    </section></section>
<script type="text/javascript">
    $("document").ready(function(){
            $(".jpassword").hide();
            //when click on button has class "edit" add value of(id and name ) for modal
            $(".edit").click(function(){
            	/*alert("done");*/
             var id=$(this).val();
             /*alert(id);*/
             $("#eid").val(id);

           var namead=$('#jfullname'+id).text();
          
             $('#efullname').val(namead);

           var mailad=$('#jemail'+id).text();
             $('#email').val(mailad);

           var passwordad=$('#jpass'+id).text();
             $('#epass').val(passwordad);
            
            
            });
        /*   $("#admail").change(function(){
           var admin_email =$("#admail").val();
           alert(admin_email);
           
          $.ajax(
                            {
                                type: "GET",
                                url: "names.php?admin_email="+admin_email,
                                success: function(data)
                                {                                    
                                    $("#done").html(data);                                    
                                }
                            });  
           


           });*/
            

      });
</script>
<?php include("include/footer.php"); ?>

