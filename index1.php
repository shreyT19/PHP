<?php
$isInserted = false;
    if (isset($_POST['name'])) {

        $server = "localhost";
        $userName = "root";
        $password = "";

        
        $connection = mysqli_connect($server, $userName, $password);

        
        if (!$connection) {
        
            die("Error found" . mysqli_connect_error());
        }

        
        
        // echo "Connection established successfully";

        
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];

        
        $sql_command = "INSERT INTO `trip`.`trip` (`name`, `age`, `email`, `phone number`, `description`, `date`) 
                        VALUES ('$name', '$age', '$email', '$phone', '$desc', current_timestamp());";

        
        // echo $sql_command;
        // echo "<br>";

        
        if ($connection->query($sql_command) == true) {
            
            $isInserted = true;
        } else {
            
            echo "There was an error <br>";
            echo $connection->error;
        }

        
        $connection->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="style.css" />
        <title>PHP Project</title>
    </head>

  <body>
    <div class="container">
      <h1>Welcome to your first PHP page!</h1>
    <?php 
        if($isInserted){
            echo "<p class='submitMsg'>Your response has been recorded</p>";
        }else{
            echo "<p class='errorMsg'>There was an error !!</p>";
        }

    ?>
      

      <form action="index1.php" method="post">
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Enter your name"
        />
        <input type="text" name="age" id="age" placeholder="Enter your age" />
        <input
          type="email"
          name="email"
          id="email"
          placeholder="enter your email"
        />
        <input
          type="phone"
          name="phone"
          id="phone"
          placeholder="Enter phone number"
        />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="enter additional information"
        ></textarea>

        <div class="flex">
          <input type="submit" name="submit" value="Submit" />
          <input type="reset" value="Reset" />
        </div>
      </form>
    </div>

   
  </body>
</html>
