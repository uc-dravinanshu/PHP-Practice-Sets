<?php
  $conn = mysqli_connect("localhost","root","","test") or die("connection failed");

  $query ="SELECT * FROM `students`";

  $res=mysqli_query($conn, $query);
    $output="";
 if(mysqli_num_rows($res)>0){
    $output = '<table class="table table-striped">
                <thead class="bg-dark text-center text-white">
                 <tr>
                   <th width="20%">Id</th>
                   <th width="80%">Name</th>
                 </tr>
                 </thead>
               ';
    while($data = mysqli_fetch_assoc($res)){
        $output.="<tr class='text-center'>
                    <td>{$data["id"]}</td>
                    <td>{$data["name"]}</td>
                  </tr>  
                ";
    }  
    $output.='</table>';
    
    mysqli_close($conn);

    echo $output;
 }else{
     echo "<h2>No record found</h2>";
 }

?>