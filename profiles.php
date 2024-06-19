<?php


//this code handles the reading of profiles from the database
include("includes/connect.php");
$query = "select * from profiles order by id desc";
$DB = new Database();
$profile = $DB->read($query);
 
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Displaying Profiles</title>
        <style>
         <?php include("css/styles.css"); ?>
        </style>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>
        <h1>Displaying Profiles</h1>
        <div class = "profile">
            <!-- Displaying Profiles -->
        <?php
            
                foreach($profile as $PROFILE_ROW)
                {

                    echo "<div class = 'profile_content'></br><img src ='$PROFILE_ROW[profile_pic]' /><br>
                    <div class = 'user_info'><p>
                     <h2>Name:</h2> $PROFILE_ROW[name]</br>
                    <h2>Email:</h2> $PROFILE_ROW[email] </br> 
                     
                    <h2>Phone:</h2> $PROFILE_ROW[phone]  </br>
                    <h2>Address:</h2> $PROFILE_ROW[address] </br>
                    </p>
                    </div>
                    
                    <br style = 'clear:both;'>
                    </div><hr>
                    ";

                }
            


        ?> 
            
        </div>
 
       
    </body>
    </html>
