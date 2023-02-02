///AJAX Request for retriving data (select Display the data).
let tbody = document.getElementById("tbody");
    
function ShowData(){
  tbody.innerHTML= "";
   const xhr = new XMLHttpRequest();
     xhr.open("GET","retrieve.php",true);

      //it response type json but console tak aate-2 it converts JavaScript Object. 
      xhr.responseType = "json";
      xhr.onload = () => {

        if(xhr.status ==200){
            //console.log(xhr.response);

            //chek data is comming or not.
            if(xhr.response){
                x = xhr.response;
            }else{
            x = "";
            }
            for(i=0; i<x.length; i++){
                tbody.innerHTML +="<tr><td>"+ x[i].id + "</td><td>"+ x[i].name + "</td><td>"+ x[i].email + "</td><td>"+ x[i].password +"</td><td><button class='btn btn-sm btn-warning mb-2 btn-edit' data-sid="+ x[i].id +">Edit</button> <buttton class='btn btn-sm btn-danger mb-2 btn-del' data-sid="+ x[i].id +">Delete</button></td></tr>";
            }
        }else{
            console.log("problem face...!!");
        }
      student_delete();
      student_edit();
     }
     xhr.send();
}
 ShowData();


// Add Data - (AJAX Request for Insert Data).
let btnadd = document.getElementById("btnadd");
   btnadd.addEventListener("click", add_student);

   //function add_student.
   function add_student(e){
    e.preventDefault();
    console.log("ADD Button Clicked");
    
    let stid = document.getElementById("stuid").value;
    let nm = document.getElementById("nameid").value;
    let em =document.getElementById("emailid").value;
    let pw = document.getElementById("passwordid").value;

    //console.log(nm);
    //console.log(em);
    //console.log(pw);

       //First:  create- xhr object.
       const xhr = new XMLHttpRequest();
          //open method open prepare a request to send a server.
          xhr.open("POST","insert.php",true);
          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");


          //onload method handle the response.
          xhr.onload = () => {
            if(xhr.status==200){
               //response handling code.
                //console.log(xhr.responseText);
               document.getElementById("msg").innerHTML=
                  "<div class='text-center alert alert-dark mt-3 fw-bold fs-5' rol='alert'>"+
                      xhr.responseText+
                  "</div>";
                document.getElementById("myform").reset(); 
                ShowData();    
            }else{
                console.log("Problem found --- Page Not Found");
            }
          }
          //collect the input data make into JavaScript Object. 
          const mydata = { id:stid, name:nm, email:em, password:pw };
          //console.log(mydata);
           
          //converts JavaScript object into JSON string
          const data = JSON.stringify(mydata);
          console.log(data);

        //send request data from server.
        xhr.send(data);

   }

   //ajax. delete records.
   function student_delete(){
   let x = document.getElementsByClassName("btn-del");
        //console.log(x);
        //console.log(x.length);
       for(let i=0; i<x.length; i++){
                 //console.log(x[i].getAttribute("data-sid"));
        x[i].addEventListener("click",function(){
          id = x[i].getAttribute("data-sid");
                //console.log("delete clikced",id);
          const xhr = new XMLHttpRequest();
            xhr.open("POST","delete.php",true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                
            xhr.onload = () =>{
                if(xhr.status == 200){
                  //response handling.
                  document.getElementById("msg").innerHTML=
                  "<div class='text-center alert alert-dark mt-3 fw-bold fs-5' rol='alert'>"+
                      xhr.responseText+
                  "</div>";
                ShowData(); 
                }else{
                   console.log("problem face");
                }
                }
                const mydata = {sid:id};
                const data = JSON.stringify(mydata);
            xhr.send(data);
        });
       }
   }   

   //for: ajax call for edit record.
   function student_edit(){
    let x = document.getElementsByClassName("btn-edit");
    
    let stid = document.getElementById("stuid");
    let nm = document.getElementById("nameid");
    let em = document.getElementById("emailid");
    let pw = document.getElementById("passwordid");
         //console.log(x);
         //console.log(x.length);

        for(let i=0; i<x.length; i++){
                  //console.log(x[i].getAttribute("data-sid"));
         x[i].addEventListener("click",function(){
           id = x[i].getAttribute("data-sid");
                 //console.log("delete clikced",id);
           const xhr = new XMLHttpRequest();
             xhr.open("POST","edit.php",true);
             xhr.responseType = "json";
             xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                 
             xhr.onload = () =>{
                 if(xhr.status == 200){
                   //response handling.
                   //console.log(xhr.response);
                   //console.log(xhr.response.id);
                   stid.value = xhr.response.id;
                   nm.value = xhr.response.name;
                   em.value = xhr.response.email;
                   pw.value = xhr.response.password;
                 }else{
                    console.log("problem face");
                 }
                 }
                 const mydata = {sid:id};
                 const data = JSON.stringify(mydata);
             xhr.send(data);
         });
        }
    } 
   
  
