<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center p-4 bg-success m-0 mt-2">PHP WITH AJAXA jQuery</h1>
                <p class="text-center bg-info p-4">
                    <button class="btn btn-danger" id="load-button">Load Data</button>
                </p>
                <table class="table table-striped" id="table-data">
                    <thead class="bg-dark text-center text-white">
                        <tr>
                        <th scope="col" widht="20%">Id</th>
                        <th scope="col" width="80%">Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function(){
        $("#load-button").on("click",function(e){
             $.ajax({
                url: "ajax-load.php",
                type: "POST",
                success: function(data){
                  $("#table-data").html(data);
                }
             });
        });
      });
    </script>
  </body>
</html>