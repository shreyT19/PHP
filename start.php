<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
</head>
<body>
    <div class="container">This is my first php website</div>
    <?php 
        // echo "Hello World and this is printed using php" ;
        
        // echo "<br>"; 

        // $var1 = 69;
        // $var2 = 31;

        // echo "The value of addition is ";

        // echo $var1+$var2;

        // $boolCheck = (false xor true);
        // echo var_dump($boolCheck);
        // echo "<br>";

        // $var1 = "This is a string";
        // echo var_dump($var1);
        // echo "<br>";
        // define('PI', 3.14);
        // echo PI;

        $arr = array("this", 1, "an", "array");
        // echo ($arr[1]);
        
        // $a=0;
        // while($a<count($arr)){
        //     echo "<br>";
        //     echo $arr[$a];
        //     $a++;
        // }

        // for($a=0;$a<count($arr);$a++){
        //     echo "<br>";
        //     echo $arr[$a];
        // }


        // forEach($arr as $value){
        //     echo "<br>";
        //     echo $value;
        // }

        $str = "This is a string";
        str_replace("is", "at", $str);

        echo $str;
        echo "<br>";
        echo strlen($str);
        echo "<br>";
        echo str_word_count($str);
        echo "<br>";
        echo strrev($str);

        echo "<br>";
        echo strpos($str, "is");

    ?>
    <br>
   
</body>
</html>