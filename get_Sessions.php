<?php
    session_start();
    if(isset($_SESSION['username'])){
    $name = $_SESSION['username'];
    $cat = $_SESSION['favCat'];
    echo "Your name is $name";
    echo "<br>";
    echo "Your favorite category is $cat";
}else{
    echo "Please log in first";
}

?>