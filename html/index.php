
<?php

include('config.php');
session_start();
  if(!isset($_SESSION['userlogin'])){
     header("Location: login.php");

 }

 if(isset($_GET['logout'])){
   session_destroy();
   unset($_SESSION);
   header("Location: login.php");
    }

$sql= "SELECT * FROM users WHERE Id = ? LIMIT 1";

   $stmtselect = $db->prepare($sql);
   $userId=$_SESSION['loggedInId'];
   $rslt  = $stmtselect->execute([$userId]);
   $row = $stmtselect->fetch(PDO::FETCH_ASSOC);
   $username=$row['username'];
   $userfullname=$row['fullname'];
   $useremail=$row['email'];
   $userphonenumber=$row['phonenumber'];
   $userpw==$row['password'];

 if(isset($_POST['update']))
{

    $sqla="UPDATE `users` SET  `username`='$username', `fullname`='$fullname', `email`='$email', `phonenumber`='$phonenumber' WHERE `Id`='$userId' ";
    $quer=mysqli_query($db,$sqla);

     if($quer)
       {
         echo'<script type="text/javascript" > alert("details successfully updated")</script>';

        }
    else
      {
         echo'<script type="text/javascript" > alert("Error while updating")</script>';
         header("Location: index.php");
      }
}


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


 <div class="container h-100">

     <div class="d-flex justify-content-center h-100">
            <div class="user_card">

                    <div class="d-flex justify-content-center">
                           <div class="brand_logo_container">
                              <img src="https://static.vecteezy.com/system/resources/previews/005/015/926/non_2x/alphabet-letter-sh-logo-illustration-vector.jpg" class="brand_logo" alt="Super Hosting logo">

</div>
                        </div>
                        <div class="d-flex justify-content-center form_container">
                         <form   method="POST" action="#">


                            <h1>Edit profile</h1>
                         <hr class="mb-3">

          <label for="firstname"><b> Username </b> </label>
          <input class="form-control" id="username" type="text" name="username"  placeholder="<?php echo $username; ?>" >

                  <label for="lastname"><b> Full Name </b> </label>
          <input class="form-control" id="fullname"  type="text" name="fullname"  placeholder= "<?php echo $userfullname; ?>">

                  <label for="email"><b>Email Address</b> </label>
          <input class="form-control"  id="email" type="email" name="email"  placeholder="<?php echo $useremail; ?>" >

                  <label for="phonenumber"><b>Phone Number</b> </label>
          <input class="form-control"  id="phonenumber" type="text" name="phonenumber"   placeholder="<?php echo $userphonenumber; ?>">


          <hr class="mb-3">



</div>
                         <div class="d-flex justify-content-center mt-3 SignUp-container">
                              <input class="btn SignUp_btn" type="submit"  name="update" value="Update details"></div>

<div class="mt-2">
                              <div class="d-flex justify-content-center links">
                                  Would you like to logout? <a href="index.php?logout=true">  Logout</a>

                                  </div>
    </form>
        </div>
                </div>
         </div>

 </div>


 <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
 <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
<script> </script>






 </body>
 </html>



