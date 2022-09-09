<?php
require_once('config.php');
?>



<!DOCTYPE html>
<html>
 <head>
     <title>Super Hosting Registration</title>
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/styleReg.css">
 </head>
 <body>

 <form id="Form1" action="registration.php" method="post"></form>
 <div class="container h-100">

     <div class="d-flex justify-content-center h-100">
            <div class="user_card">

                    <div class="d-flex justify-content-center">
                           <div class="brand_logo_container">
                              <img src="https://static.vecteezy.com/system/resources/previews/005/015/926/non_2x/alphabet-letter-sh-logo-illustration-vector.jpg" class="brand_logo" alt="Super Hosting logo">
                                  </div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                         <form  action="registration.php" method="post">
                            <h1>Registration</h1>
                         <hr class="mb-3">

          <label for="firstname"><b> Username </b> </label>
          <input class="form-control" id="username" type="text" name="username" required>

                  <label for="lastname"><b> Full Name </b> </label>
          <input class="form-control" id="fullname"  type="text" name="fullname"  required>

                  <label for="email"><b>Email Address</b> </label>
          <input class="form-control"  id="email" type="email" name="email"  required>

                  <label for="phonenumber"><b>Phone Number</b> </label>
          <input class="form-control"  id="phonenumber" type="text" name="phonenumber"  required>

                  <label for="password"><b>Password</b> </label>

          <input class="form-control" id="password"  type="password" name="password"  required>
          <hr class="mb-3">



</div>
                         <div class="d-flex justify-content-center mt-3 SignUp-container">
                              <input class="btn SignUp_btn" type="submit" id="registration"  name="create" value="SignUp"></div>

<div class="mt-2">
                              <div class="d-flex justify-content-center links">
                                  Have an account? <a href="login.php" class="ml-4">Login</a>
                                  </div>
            </form>
        </div>
                </div>
         </div>

 </div>


 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    $(function(){
       $('#registration').click(function(e){

           var valid= this.form.checkValidity();
           if(valid){
           var username   = $('#username').val();
           var fullname    = $('#fullname').val();
           var email       = $('#email').val();
           var phonenumber = $('#phonenumber').val();
           var password    = $('#password').val();

       e.preventDefault();

             $.ajax({
               type: 'POST',
               url: 'process.php',
               data: {username: username, fullname: fullname, email: email, phonenumber: phonenumber,password:password},
               success: function(data){

                                         Swal.fire({

                                              'title':'Successful',
                                              'text': data,
                                              'type': 'success'

                                                    })
                                       } ,
                                      error: function(data){
                                        Swal.fire({

                                              'title':'Error',
                                              'text': data,
                                              'type': 'error'
											   })


                                    }
                });
              }
          });
     });

</script>



 </body>
 </html>



