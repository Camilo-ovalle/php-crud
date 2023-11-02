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
$id = $_POST['id'];

// Crear una sentencia preparada para la eliminación

$sql = "DELETE FROM user WHERE user_id = '$id'";

if(mysqli_query($conn,$sql)){

    echo "entrada eliminada correctamente";

}else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>