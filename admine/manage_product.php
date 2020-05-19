<?php 
include("include/connection.php");

if(isset($_POST['save'])){

      $name      =$_POST['product_name'];
      $price     =$_POST['product_price'];
      $desc      =$_POST['product_desc'];
      $catid     =$_POST['catogrypro_name'];
      $image_name=$_FILES['product_image']['name'];
      $temp      =$_FILES['product_image']['tmp_name'];
      $path      ="uploadproduct/";
      move_uploaded_file($temp,$path.$image_name);
      /*echo "<pre>";
      print_r($_FILES);
      die;*/
        $query="insert into productpro (pro_name,pro_price,pro_image,pro_desc,cat_id) 
        values('$name','$price','$image_name','$desc',$catid)";
        mysqli_query($conn,$query);
        header("location:manage_product.php"); 
}


if (isset($_GET['delete'])) {
     $query = "delete from productpro where pro_id={$_GET['delete']}";
          mysqli_query($conn,$query);

}

if (isset ($_POST['update'])) {

      $id        =$_POST['idpro'];
      $name      =$_POST['eproduct_name'];
      $price     =$_POST['eproduct_price'];
      $desc      =$_POST['eproduct_description'];
      $catidd    =$_POST['ecat']; 
      $error     =$_FILES['eproduct_image']['error'];         
      if($error == 0)
      {
            $image_name=$_FILES['eproduct_image']['name'];
            $temp      =$_FILES['eproduct_image']['tmp_name'];
            $path      ="uploadproduct/";
            move_uploaded_file($temp,$path.$image_name);
            $query = "UPDATE productpro set pro_name ='$name',pro_price='$price',pro_image='$image_name',pro_desc ='$desc' ,cat_id='$catidd'  where pro_id=$id"; 
            
             mysqli_query($conn,$query);

            } else{
              $query = "UPDATE productpro set pro_name ='$name',pro_price='$price',pro_desc ='$desc' ,cat_id='$catidd'  where pro_id=$id"; 
               mysqli_query($conn,$query);
               
            }

             header("location:manage_product.php");

}
?>


<?php include("include/header.php"); ?>
 <!-- modal Edit -->
 
       <div class="modal fade" id="smallmodal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                     <div class="modal-header">
                      <hr>
                          <h5 class="modal-title" id="smallmodalLabel">Edit Product</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                     </div>
                      <div class="modal-body">
                     <form action="" method="post" enctype="multipart/form-data">
                           
                                  <input id="eid" name="idpro" type="hidden" class="form-control">
                                  <div class="form-group has-success">
                                  <label>Product Name</label>
                                  <input id="eproname" name="eproduct_name" type="text" class="form-control" id="efullname">
                                 </div>
                                  <div class="form-group has-success">
                                  <label>product Price</label>
                                  <input id="eproprice" name="eproduct_price" type="text" class="form-control" id="efullname">
                                 </div>
                                  <div class="form-group has-success">
                                  <label>Product Description</label>
                                  <input id="eprodesc" name="eproduct_description" type="text" class="form-control" id="efullname">
                                 </div>
                                 <div class="form-group has-success">
                                  <label>Category Name</label>
                                 <select  name='ecat'id='bbb' >
                                  <?php 
                                   $query = "select * from categorypro" ;
                                   $result=mysqli_query($conn,$query);
                                   while ($category=mysqli_fetch_assoc($result)) {
                                   echo "<option class='form-control'   value='{$category['cat_id']}' >{$category['cat_name']}</option>";
                                  }
                                  ?>
                                "</select>
                                 </div>
                                  <div class="form-group has-success">
                                  <img id="firstimage" src="" name="sameproduct_image" width="50" height="50">
                                  <label>Category Image</label>
                                  <input name="eproduct_image" type="file" class="form-control" >
                                 </div>
                                 
                                
                                 
                            <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancel</button>
                                  <button type="submit" name="update"  class="btn btn-primary"  >Confirm</button>
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
                      <label for="cname" class="control-label col-lg-2">Product Name <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="caname" name="product_name"  type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Product Price <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="caname" name="product_price"  type="text" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Product Description <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control" id="caname" name="product_desc"  type="text" required />
                      </div>
                    </div>
                     
                    <div class="form-group ">
                      <label  class="control-label col-lg-2">Product Image <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="caimage" type="file" name="product_image" required />
                      </div>
                    </div>

                    <div class="form-group">
                  
                    <label class="control-label col-lg-2">Category Name <span class="required">*</span></label>
                    <!-- Add categoryId automatically to database when select categoryName --> 
                     <select  name='catogrypro_name' >
                      <?php 
                       $query = "select * from categorypro" ;
                       $result=mysqli_query($conn,$query);
                       while ($category=mysqli_fetch_assoc($result)) {
                       echo "<option class='form-control'  value='{$category['cat_id']}' >{$category['cat_name']}</option>";
                      }
                      ?>
                    "</select>
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
                    <th><i class="fab fa-product-hunt"></i>Product Name</th>
                   <th><i class="fas fa-dollar-sign"></i>Product Price</th>
                   <th><i class="fas fa-hand-point-right"></i>Product description</th>
                   <th><i class="fas fa-object-group"></i>Category Name</th>
                    <th><i class="fas fa-camera"></i>Product Image</th>
                    <th><i class="fas fa-edit"></i> EDIT</th>
                    <th><i class="fas fa-trash-alt"></i></i> DELETE</th>
                   
                  </tr>
                 
                  <tr>
                  	 
                          <?php
                           $query  = "select * from productpro inner join categorypro on categorypro.cat_id =productpro.cat_id";
                           $result=mysqli_query($conn,$query);
                           while ($productpro=mysqli_fetch_assoc($result)) {?>

                    <td ><?php echo $productpro['pro_id'];?></td>

                    <td id="jname<?php echo $productpro['pro_id']; ?>"><?php echo $productpro['pro_name'] ?></td>
                    <td id="jprice<?php echo $productpro['pro_id']; ?>"><?php echo $productpro['pro_price'] ?></td>
                    <td id="jdesc<?php echo $productpro['pro_id']; ?>"><?php echo $productpro['pro_desc'] ?></td>
                    <td id="jcatnam<?php echo $productpro['pro_id']; ?>"><?php echo $productpro['cat_name'] ?></td>

                   <td>
                      <img id="imgvalue<?php echo $productpro['pro_id'] ?>" height="50" width="50" src='<?php echo "uploadproduct/{$productpro['pro_image']}"; ?>'>
                              </td>

                    <td>  <button type="button"  class="btn btn-secondary mb-1 edit" data-toggle="modal" data-target="#smallmodal" 
                    value="<?php echo $productpro['pro_id']; ?>" >
                          <span class="glyphicon glyphicon-edit"></span>
                           Edit </button>
                          </td>

                    <td> <?php echo "<a href='manage_product.php?delete={$productpro['pro_id']}' class='btn btn-danger'>Delete</a>";?></td>
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

           var proname=$('#jname'+id).text();
             $('#eproname').val(proname);  
             var proprice=$('#jprice'+id).text();
             $('#eproprice').val(proprice);
             var prodesc=$('#jdesc'+id).text();
             $('#eprodesc').val(prodesc);
             var catname=$('#jcatnam'+id).text();
           /*  alert(catname);*/
             $('#bbb').val(catname);
            var srcc=$('#imgvalue'+id).attr('src');
           
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

