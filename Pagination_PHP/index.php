<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagination In PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <!--------Pagination In PHP--------------->
    <div class="container ">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <h3 class="text-center">Pagination In PHP & MYSQL</h3>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Sr. No</th>
                        <th scope="col">Values</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         require("db_connect.php");

                         $query_all="SELECT * FROM `data`";
                         $rs_all = mysqli_query($con,$query_all);
                         $total_records = mysqli_num_rows($rs_all);
                         if($total_records==0){
                            echo "<tr><td colspan='2'>No Records Founds</td></tr>";
                            exit;
                         }
                         $limit = 5; #limit means ending point ki hame 1 page me only 5 record show karana hai. 
                         $page=1; #by default we live in first page.
                         if(isset($_GET['page'])){
                            $page = $_GET['page']; #if any one comes from page no URL.
                         }

                         #set the starting to ending point.
                         #hame kaha se kaha tak ka record dikhana hai.

                         $start = ($page-1)*$limit;
                         /*
                         //page 1 0skip, 5 limit -5
                         //page 2 = 2-1=1, 1*5=5 means 5skip record and show 5 record.
                         //page 3 3-1=2, 2*5=10 means 10skip record and show 5 record.
                         //page 4 4-1=3, 3*5=15 means 15skip record and show 5 record.
                         //page 5 5-1=4  4*5=20 means 20skip record and show 5 record per page.
                         */
                        $query_limit = "SELECT * FROM `data` LIMIT $start, $limit";
                        //here $start is here offset means kitane records hame chhodane hai.
                        //here $limit is means kitane records hame dikhane hai.

                        $rs_limit=mysqli_query($con, $query_limit);

                         $i=$start+1;
                         while($data = mysqli_fetch_assoc($rs_limit)){
                            echo 
                                 "<tr>
                                   <th>$i</th>
                                   <th>$data[name]</th>
                                 </tr>";
                                 $i++;
                         }

                         ?>
                    </tbody>
                </table>
                <?php
                  $total_pages = ceil($total_records/$limit);
                  //echo "<h6>Pages:$total_pages</h6>";   
                  echo "<h6>Pages:$page/$total_pages</h6>"; 
                  
                  $pagination ="<nav>
                                  <ul class='pagination'>";
                                if($total_records>$limit){
                                    $disabled = ($page==1)?"disabled":"";
                                    $prev = $page-1;
                                    $pagination .="<li class='page-item $disabled'><a class='page-link' href='index.php?page=1'>First</li>";
                                    $pagination .="<li class='page-item $disabled'><a class='page-link' href='?page=$prev'>prev</li>";

                                    #for last Next Last disabled.
                                    $disabled = ($page==$total_pages)?"disabled":"";
                                    $next=$page+1;

                                    $pagination .="<li class='page-item $disabled'><a class='page-link' href='index.php?page=$next'>Next</li>";
                                    $pagination .="<li class='page-item $disabled'><a class='page-link' href='?page=$total_pages'>Last</li>";
                                                    
                                }
                  $pagination .="</ul></nav>";

                  echo $pagination;
             
                 ?>
            </div>
        </div>
    </div>
    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</html>