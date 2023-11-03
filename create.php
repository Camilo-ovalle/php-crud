<?php

$server ="172.172.92.27";
$user = "Camilo";
$pass = "CA1015OV";
$db = "CRUD";
$port = "3306";

$conn = new mysqli($server,$user,$pass,$db,$port);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$sql = "INSERT INTO user (name, email, phone) VALUES ('$name', '$email', '$phone')";


if(mysqli_query($conn,$sql)){

    echo "Nueva entrada creada correctamente";

}else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>
