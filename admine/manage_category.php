<?php 
include("include/connection.php");

if (isset($_POST['save'])) {
	/*echo "1111111111";die;*/
	 $name  =  $_POST['category_name'];
	 $image  =  $_FILES['category_image']['name'];
   $temp   =  $_FILES['category_image']['tmp_name'];
          $path   = "uploadcat/";
          move_uploaded_file($temp,$path.$image);
            /*echo "<pre>";
            print_r($_FILES);
            die;*/
          $query  = "insert into categorypro(cat_name,cat_image) values('$name','$image')";
          /*echo $query;die;*/
          mysqli_query($conn,$query);
          header("location:manage_category.php");

        
	
}



if (isset($_GET['delete'])) {
     $query = "delete from categorypro where cat_id={$_GET['delete']}";
          mysqli_query($conn,$query);
}

  if (isset($_POST['confirm'])) {
         $name  = $_POST["ecategory_name"];
         $id    = $_POST["ecategory_id"];
         $error = $_FILES['ecat_image']['error'];
         if($error == 0){
         $image_name=$_FILES['ecat_image']['name'];
         $temp      =$_FILES['ecat_image']['tmp_name'];
         $path      ="uploadcat/";
         move_uploaded_file($temp,$path.$image_name);
         $query = "update  categorypro set cat_name='$name',cat_image='$image_name' where cat_id=$id";
        
         mysqli_query($conn,$query);
       }else{
         $query = "update  categorypro set cat_name='$name' where cat_id=$id";
           mysqli_query($conn,$query);
       }
         header("location:manage_category.php");
 } 
?>
<?php include("include/header.php"); ?>



 <!-- modal Edit -->
 
       <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                     <div class="modal-header">
                      <hr>
                          <h5 class="modal-title" id="smallmodalLabel">Edit Category</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                     </div>
                      <div class="modal-body">
                     <form action="" method="post" enctype="multipart/form-data">
                           
                                  <input id="eid" name="ecategory_id" type="hidden" class="form-control">
                                  <div class="form-group has-success">
                                  <label>Category Name</label>
                                  <input id="ecatename" name="ecategory_name" type="text" class="form-control" id="efullname">
                                 </div>
                                  <div class="form-group has-success">
                                  <img id="firstimage" src="" name="sameproduct_image" width="50" height="50">
                                  <label>Category Image</label>
                                  <input name="ecat_image" type="file" class="form-control" id="email">
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
                ADD Category
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Category Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="caname" name="category_name"  type="text" required />
                      </div>
                    </div>
                     <div id="done"></div>
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Category Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="caimage" type="file" name="category_image" required />
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
                    <th><i class="fas fa-object-group"></i>Category Name</th>
                   
                    <th><i class="fas fa-camera"></i>Image</th>
                    <th><i class="fas fa-edit"></i> EDIT</th>
                    <th><i class="fas fa-trash-alt"></i></i> DELETE</th>
                   
                  </tr>
                 
                  <tr>
                  	 
                          <?php
                           $query = "select * from categorypro" ;
                           $result=mysqli_query($conn,$query);
                           while ($categorypro=mysqli_fetch_assoc($result)) {?>

                    <td ><?php echo $categorypro['cat_id'];?></td>

                    <td id="jname<?php echo $categorypro['cat_id']; ?>"><?php echo $categorypro['cat_name'] ?></td>

                   <td>
                                <img id="imgvalue<?php echo $categorypro['cat_id'] ?>" height="50" width="50" src='<?php echo "uploadcat/{$categorypro['cat_image']}"; ?>'>
                              </td>

                    <td>  <button type="button"  class="btn btn-secondary mb-1 edit" data-toggle="modal" data-target="#smallmodal" 
                    value="<?php echo $categorypro['cat_id']; ?>" >
                          <span class="glyphicon glyphicon-edit"></span>
                           Edit </button>
                          </td></td>
                    <td> <?php echo "<a href='manage_category.php?delete={$categorypro['cat_id']}' class='btn btn-danger'>Delete</a>";?></td>
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
           
            //when click on button has class "edit" add value of(id and name ) for modal
            $(".edit").click(function(){
            	/*alert("done");*/
             var id=$(this).val();
            
             $("#eid").val(id);

           var catname=$('#jname'+id).text();
             $('#ecatename').val(catname);  
            var srcc=$('#imgvalue'+id).attr('src');
            /*alert(srcc);*/
            $("#firstimage").attr("src",srcc);
            
            
            });
          /*  $("#admail").change(function(){
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

