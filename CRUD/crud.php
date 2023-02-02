<?php
   require("db_config.php");

   //image upload function.
   function image_uploda($image){
     $img_loc = $image['tmp_name'];
     $new_name = "IMG_Name".random_int(11111,99999).$image['name'];

     $new_loc = Upload.$new_name;

     if(!move_uploaded_file($img_loc, $new_loc)){
         header("location:index.php?alert=image_upload");
         exit;
     }else{
        return $new_name;
     }
   }

    if(isset($_POST['addproduct'])){
        //print_r($_POST);
        //echo "<br/>";
        //print_r($_FILES['image']);
       
        foreach($_POST as $key => $value){
            $_POST[$key] = mysqli_real_escape_string($conn, $value);
        }
        $imgpath = image_uploda($_FILES['image']);

        $query ="INSERT INTO `products` (`name`, `price`, `description`, `image`) VALUES ('$_POST[name]','$_POST[price]','$_POST[desc]','$imgpath')";

        if(mysqli_query($conn, $query)){
            header("location:index.php?success=added");
        }else{
            header("location:index.php?alert=add_failed");
        }
    }

    //creating a functions for deleting a image.
    function image_remove($img){
       if(!unlink(Upload.$img)){
          header("location:index.php?alert=img_rem_fail");
          exit;
       }
    }

    //check if any index rem is coming =, this rem inedx basically for deleting the id.
    if(isset($_GET['rem']) && $_GET['rem']>0){
       $query="SELECT * FROM `products` WHERE `id`='$_GET[rem]'";
       $res = mysqli_query($conn, $query);

       $data = mysqli_fetch_assoc($res);

       image_remove($data['image']);

       $query="DELETE FROM `products` WHERE `id`='$_GET[rem]'";
       if(mysqli_query($conn, $query)){
        header("location:index.php?success=removed");
       }else{
        header("location:index.php?alert=removed_failed");
       }


    }


    //Update Product.
    if(isset($_POST['editproduct'])){
        foreach($_POST as $key => $value){
            $_POST[$key] = mysqli_real_escape_string($conn, $value);
        }
       
        //chech user image upload or not.
        if(file_exists($_FILES['image']['tmp_name']) || is_uploaded_file($_FILES['image']['tmp_name'])){
            $query="SELECT * FROM `products` WHERE `id`='$_POST[editid]'";
            $res = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($res);

            image_remove($data['image']);

            $img = image_uploda($_FILES['image']);

            $update="UPDATE `products` SET `name`='$_POST[name]',`price`='$_POST[price]',`description`='$_POST[desc]',`image`='$img' WHERE `id`='$_POST[editid]'";

        }else{
            $update="UPDATE `products` SET `name`='$_POST[name]',`price`='$_POST[price]',`description`='$_POST[desc]' WHERE `id`='$_POST[editid]'";
        }
        if(mysqli_query($conn, $update)){
            header("location:index.php?success=updated");
        }else{
            header("location:index.php?alert=update_failed");
        }
    }

?>