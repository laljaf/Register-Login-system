<?php
require_once('config.php');
?>

<?php


  if(isset($_POST)){


       $username=$_POST['username'];
       $fullname   =$_POST['fullname'];
       $email      =$_POST['email'];
       $phonenumber=$_POST['phonenumber'];
       $password   =sha1($_POST['password']);


      $sql = "INSERT INTO users (username, fullname, email, phonenumber, password ) VALUES(?,?,?,?,?)";
      $stmtinsert = $db->prepare($sql);
      $names=array($username, $fullname, $email, $phonenumber, $password);

      $result = $stmtinsert->execute($names);

      if($result)
           {
            echo 'New user has registered.';
            }
      else {
      echo 'An error has occured, user was not registered.';
            }



     }else{
               echo 'Fill required fields';
            }





