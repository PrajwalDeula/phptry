<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = "";
    $nameErr = "";
    if(empty($_POST["name"])){
        $nameErr = "This field is empty";

    }
    else{
        $name = test_input($_POST["name"]);

    }
    
    function test_input($data){
$data = htmlspecialchars($data);
$data = trim($data);
$data = stripslashes($data);
return $data;
}
}

?>