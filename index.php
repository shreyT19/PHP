
    <?php
        $serverName = "localhost";
        $userName = "root";
        $password = "";

        $connection = mysqli_connect($serverName, $userName, $password);

        if(!$connection){
            exit("Connection failed: ".mysqli_connect_error());
        }

        $name = $_POST['name'];
        $age =$_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];
       
        $sql =  "INSERT INTO `trip` (`name`, `age`, `email`, `phone number`, `description`, `date`) VALUES ('$name', '$age', '$email', '$phone', '$desc', current_timestamp());";

        echo $sql;
    ?>



