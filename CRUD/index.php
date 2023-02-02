<?php  require("db_config.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">  
    
  </head>
  <body class="bg-light">
     <div class="container bg-dark text-white p-3 rounded my-4">
       <div class="d-flex align-items-center justify-content-between px-3">
        <h2>
           <a href="index.php" class="text-white text-decoration-none"><i class="bi bi-bar-chart-fill"></i> TJ Product Strore</a>
        </h2>
       
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProduct">
        <i class="bi bi-plus-square-dotted"></i> Add Product
        </button>
       </div>
     </div>

      <!------------for Alert ----------------->
      <?php
       if(isset($_GET['alert'])){
         if($_GET['alert'] =='image_upload'){
            echo <<<alert
              <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>image Upload Failed Server Down</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            alert;
         }
         if($_GET['alert'] =='img_rem_fail'){
          echo <<<alert
            <div class="container alert alert-danger alert-dismissible text-center" role="alert">
              <strong>image Removal Failed Server Down</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          alert;
         }
         if($_GET['alert'] =='add_failed'){
            echo <<<alert
              <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Cannot Add Product Server Down</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            alert;
          }
          if($_GET['alert'] =='removed_failed'){
            echo <<<alert
              <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Cannot Remove Product Server Down</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            alert;
          }
          if($_GET['alert'] =='update_failed'){
            echo <<<alert
              <div class="container alert alert-danger alert-dismissible text-center" role="alert">
                <strong>Cannot Update Product Server Down</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            alert;
          }
       }else if(isset($_GET['success'])){
          if($_GET['success'] =='updated'){
            echo <<<alert
              <div class="container alert alert-success alert-dismissible text-center" role="alert">
                <strong>Product Updated Successfully...!!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            alert;
        }
        if($_GET['success'] =='added'){
          echo <<<alert
            <div class="container alert alert-success alert-dismissible text-center" role="alert">
              <strong>Product Added Successfully...!!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          alert;
        }
        if($_GET['success'] =='removed'){
          echo <<<alert
            <div class="container alert alert-success alert-dismissible text-center" role="alert">
              <strong>Product Removed Successfully...!!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          alert;
        }
       }


      ?>


     <!--------------------for table Display The Data------------>
     <div class="container mt-3">
        <table class="table table-hover text-center">
            <thead class="bg-dark text-white">
                <tr>
                    <th width="7%" scope="col" class="rounded-start">Sr.No</th>
                    <th width="17%" scope="col">Image</th>
                    <th width="16%" scope="col">Name</th>
                    <th width="10%" scope="col">Price</th>
                    <th width="30%" scope="col">Description</th>
                    <th width="20%" scope="col" class="rounded-end">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
              <?php
                $query ="SELECT * FROM `products`";
                $res = mysqli_query($conn, $query);
                
                $fetch_src=image;
                
                $i=1;
                while($row = mysqli_fetch_assoc($res)){
                   echo <<<product
                     <tr class="align-middle">
                       <td>$i</td>
                       <td>
                         <img src="$fetch_src/$row[image]" class="img-fluid" >
                       </td>
                       <td>$row[name]</td>
                       <td>₹$row[price]</td>
                       <td>$row[description]</td>
                       <td><a href="index.php?edit=$row[id]" class="btn btn-primary shadow-none form-control mb-3 py-2 fw-bold"><i class="bi bi-pencil-square"></i> Update</a>
                           <button type="button" onclick="confirm_rem($row[id])" class="btn btn-danger form-control shadow-none mb-3 py-2 fw-bold"><i class="bi bi-trash-fill"></i> Delete</button>
                       </td>
                     </tr>
                   product;
                   $i++;
                }
              ?>
            </tbody>
        </table>
     </div>


     <!--------------Modal button-------------------->
        <div class="modal fade" id="addProduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="crud.php" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-4 fw-bold"><i class="bi bi-plus-circle"></i> Add Product</h1>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                          <span class="input-group-text fw-bold">Name</span>
                          <input type="text" name="name" class="form-control shadow-none" placeholder="product name" required/>
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text fw-bold">Price</span>
                          <input type="text" name="price" class="form-control shadow-none" placeholder="product price" required/>
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text fw-bold">Description</span>
                          <textarea class="form-control shadow-none" name="desc" placeholder="type description of products" required></textarea>
                        </div>
                        <div class="input-group mb-3">
                          <label class="input-group-text">Image</label>
                           <input type="file" name="image" accept=".jpg, .png, .svg, .webp" class="form-control shadow-none" required/>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="addproduct" class="btn btn-success">Add</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>

       <!------------------ for Edit / Update Modal ------------------->
        <div class="modal fade" id="editproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="crud.php" method="post" enctype="multipart/form-data">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-4 fw-bold"><i class="bi bi-plus-circle"></i> Update Product</h1>
                    </div>
                    <div class="modal-body">
                        <div class="input-group mb-3">
                          <span class="input-group-text fw-bold">Name</span>
                          <input type="text" name="name" id="editname" class="form-control shadow-none" placeholder="product name" required/>
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text fw-bold">Price</span>
                          <input type="text" name="price" id="editprice" class="form-control shadow-none" placeholder="product price" required/>
                        </div>
                        <div class="input-group mb-3">
                          <span class="input-group-text fw-bold">Description</span>
                          <textarea class="form-control shadow-none" name="desc" id="editdesc" placeholder="type description of products" required></textarea>
                        </div>
                        <img src="" id="editimg" class="img-fluid mb-3"/><br/>
                        <div class="input-group mb-3">
                          <label class="input-group-text">Image</label>
                           <input type="file" name="image"  accept=".jpg, .png, .svg, .webp" class="form-control shadow-none"/>
                        </div>
                        <input type="hidden" name="editid" id="editid"/>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" name="editproduct" class="btn btn-success">Update</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <!--------this php script write always below in the update product modal---------->
     <?php
       if(isset($_GET['edit']) && $_GET['edit']>0){
          //select all data where table ki id aur url ke thow jo id bheja hai usake behalf pr.
           $query="SELECT * FROM `products` WHERE `id`='$_GET[edit]'";
           $res = mysqli_query($conn, $query);
           $fetch = mysqli_fetch_assoc($res);

            //how to access bootstrap modal throw vanilla javascript.
            //go to bootstrap modal.
            echo "
              <script>
                const myModal = new bootstrap.Modal('#editproduct', {
                  keyboard: false
                })
                document.querySelector('#editname').value=`$fetch[name]`;
                document.querySelector('#editprice').value=`$fetch[price]`;
                document.querySelector('#editdesc').value=`$fetch[description]`;
                document.querySelector('#editimg').src=`$fetch_src/$fetch[image]`;
                document.querySelector('#editid').value=`$fetch[id]`;
                myModal.show();
              </script>
             "; 
       }
     ?>
     
    <script>
        //onclick function for deleting the products.
        function confirm_rem(id){ 
           if(confirm("Are you sure..!! You want to delete this itemas??")){
             window.location.href="crud.php?rem="+id;
           }
        }
    </script>    
    
  </body>
</html>