<?php

   include 'connection.php';

if(isset($_POST['submit'])){

   $name = $_POST['fullname'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);        
   $user_type = $_POST['role'];

   $select = " SELECT * FROM $table_users WHERE email = '$email' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      $insert = "INSERT INTO $table_users(fullname, phone, role, email, password) VALUES('$name','$phone','$user_type','$email','$pass')";
         mysqli_query($conn, $insert);
         header('location:register_form.php');
   }

};
$conn->close();
?>