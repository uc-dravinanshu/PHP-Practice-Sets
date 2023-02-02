//Ajax request for insert data.
   $(document).ready(function(){

    //AJAX request retrieve data on the browser.
    function showData(){
        output = "";
      $.ajax({
          url:"retrieve.php",
          method:"POST",
          dataType: "json",
          success:function(data) {
              console.log(data);
            if(data) {
                x = data;
            }else{
                 x = "";
            }
            for(i=0; i<x.length; i++){
              //console.log(x[i]);
              output +="<tr><td>"+x[i].id+"</td><td>"+x[i].name+"</td><td>"+x[i].email+"</td><td>"+x[i].password+"</td><td><button class='btn btn-sm btn-success btn-edit' data-sid="+x[i].id+ ">Edit</button> &nbsp; <button class='btn btn-sm btn-danger btn-del' data-sid="+x[i].id+ ">Delete</button></td></tr>";
            }
            $("#tbody").html(output);
          },
      });
    }
    showData();

    //first: target the submit button id.
    $("#btnadd").click(function(event){
        event.preventDefault();
        //console.log("save btn clicked");

        //second: captured input field data in form in jQuery.
        let stuid = $("#stuid").val(); 
         let stuName = $("#nameid").val(); 
         let stuEmail = $("#emailid").val();
         let stuPass = $("#passwordid").val();

        // console.log(stuName);                            //for debugging purpose.
        // console.log(stuEmail);
        // console.log(stuPass);

        //third: send date in server.
        mydata = { id:stuid, name:stuName, email:stuEmail, password:stuPass };       //JS object form me send.
        console.log(mydata);
        
        //fourth: ajax called.  
        $.ajax({
            url:"insert.php",
            method:"POST",
            data: JSON.stringify(mydata),          //we send data JS string format me.
            success: function(data){
                //response handler, which is comming from server.
               // console.log(data);
               // $("#myform").trigger("reset");
               $("#myform")[0].reset();
               showData();
               message = "<div class='alert alert-primary mt-3'>"+data+"</div>";
               $("#msg").html(message);
            },
        });

     });

     // Ajaxa Data delete data on the browser.
        $("tbody").on("click", ".btn-del", function(){
           console.log("delete btn clicked");
           let id = $(this).attr("data-sid");          //attr get the attribute.
           //console.log(id);
             mydata = {sid:id};
             mythis = this;
           $.ajax({
                url: "delete.php",
                method: "POST",
                data: JSON.stringify(mydata),   //data send json format.
                success: function(data){
                    //console.log(data);
                  if(data == 1){
                    message = "<div class='alert alert-info mt-3'> student deleted successfully</div>";
                   //showData();
                   $(mythis).closest("tr").fadeOut();   //it remove the which row who is deleted.
                  }else if(data == 0){
                    message = "<div class='alert alert-danger mt-3'>Unable to deleted</div>";         
                  }
                  $("#msg").html(message);  
                },
           });
        }); 

    //ajax call for Edit.
       $("tbody").on("click", ".btn-edit", function(){
          console.log("clikced");
          let id = $(this).attr("data-sid");
          console.log(id);
          mydata = {sid:id};
          $.ajax({
               url: "edit.php",
               method: "POST",
               dataType: "json",
               data: JSON.stringify(mydata),
               success: function(data){
                //console.log(data);
                $("#stuid").val(data.id);
                $("#nameid").val(data.name);
                $("#emailid").val(data.email);
                $("#passwordid").val(data.password);
               },
          });
       });    
   });
   
 
   

 
