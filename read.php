<?php

$server ="localhost";
$user = "root";
$pass = "123456";
$db = "CRUD";
$port = "7777";

$conn = new mysqli($server,$user,$pass,$db,$port);

if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$consulta = "SELECT * FROM user";

$resultado = mysqli_query($conn,$consulta);

if(mysqli_num_rows($resultado)>0){

    echo "<table border='1'>
    <tr>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Telefono</th>
    </tr>";

    foreach($resultado as $row){
        echo "<tr>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['phone']."</td>
        </tr>";
    }
}else{
    echo "0 results";
}

mysqli_close($conn);

?>