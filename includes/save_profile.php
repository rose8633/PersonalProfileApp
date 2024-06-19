<?php
          
          // Handles images 
          $folder = "images/";

          $image =  $_FILES['profile_picture']['name'];

          $filename = $folder . $image;
              
          move_uploaded_file($_FILES['profile_picture']['tmp_name'], $filename);

          // Initialize variables
          $name = $_POST['name'];
          $email = $_POST['email'];
          
          $phone_number =  $_POST['phone'];
          $address =  $_POST['address'];
          $profile_picture =  $filename;
          
          //Adding the variables to the database
          include("includes/connect.php");
          $query = "insert into profiles (name, email, phone, address, profile_pic)
          values 
          ('$name','$email','$phone_number','$address','$profile_picture')";
  
          $DB = new Database();
          $DB->write($query);
?>