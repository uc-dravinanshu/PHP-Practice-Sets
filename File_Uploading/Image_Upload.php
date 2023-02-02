<?php
require("db_connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Image_Upload.css">
    <title>Document</title>
</head>
<body>
    <h1>How To Upload and Image in PHP</h1>
    <div class="myform">
        <form action="#" method="post" enctype="multipart/form-data">
            <div class="input_field">
                <label>Your Name:</label>
                <input type="text" name="username" required/>
            </div>
            <div class="input_field">
                <label>Select an Image:</label>
                <input type="file" name="profile" required/>
            </div>
            <div class="submit-btn">
                <input type="submit" value="UPLOAD" name="upload"/>
            </div>
        </form>
    </div>
    <?php
      if(isset($_POST['upload'])){
        #echo "clicked";
        $img_loc=$_FILES['profile']['tmp_name'];
         $img_name=$_FILES['profile']['name'];
         $uname = $_POST['username'];
         $img_ext=pathinfo($img_name,PATHINFO_EXTENSION);
          $img_size =$_FILES['profile']['size']/(1024*1024); #1mb hua size 
         $img_des="Uploaded Images/".$uname.".".$img_ext;

         if(($img_ext!='jpg') && ($img_ext!='png') && $img_ext!='jpeg' && ($img_ext!='webp')){
            echo "<script>alert('Invalid Image Extension');</script>";
            exit();
         }
         #condition if image size is >1mb.
         if($img_size>1){
            echo "<script>alert('Images size is greater than 1 MB');</script>"; 
            exit();
         }

         $query = "INSERT INTO `user_data` (`UserName`, `Profile`) VALUES ('$uname','$img_des')";
        if(mysqli_query($con,$query)){
            move_uploaded_file($img_loc,$img_des);
            echo "<script>alert('Successful');</script>"; 
        }else{
            echo "<script>alert('Unsuccessful');</script>"; 
        }

        }
    ?>
</body>
</html>