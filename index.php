<?php


//confirm if submit button is clicked
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //confirm if file is selected
    if(isset($_FILES['profile_picture']['name'])){

        //executing save_profiles file        
        include("includes/save_profile.php");
         
        //redirecting to profiles page
        header("Location: profiles.php");
        die;
    }

}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Profile</title>
        <style>
          <?php include("css/styles.css"); ?>
        </style>
        <link rel="stylesheet" href="css/styles.css">
    </head>  
    <body>
        <!-- Form -->
        <h1>Create Your Profile</h1>
 
        <form action="index.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="phone">Phone Number:</label><br>
        <input type="text" id="phone" name="phone" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" required></textarea><br><br>

        <label for="profile_picture">Profile Picture:</label><br>
        <input type="file" id="profile_picture" name="profile_picture" accept="image/*" required><br><br>

        <input type="submit" value="Submit">
    </form>
    </body>
    </html>
