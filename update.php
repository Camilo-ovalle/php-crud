<?php

$server = "localhost";
$user = "root";
$pass = "123456";
$db = "CRUD";
$port = "7777";

$conn = new mysqli($server, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Obtén los datos del formulario
$id = $_POST['id'];  // Asegúrate de que este campo esté presente en tu formulario
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// Crear una sentencia preparada para la actualización

$sql = "UPDATE user SET name = '$name', email = '$email', phone = '$phone' WHERE user_id = '$id'";

if(mysqli_query($conn,$sql)){

    echo "entrada actualizada correctamente";

}else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>
