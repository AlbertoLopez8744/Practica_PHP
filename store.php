<?php
    include("conecction.php");
    echo "<h1> Hola Mundo PHP</h1>";
    if (!empty($_POST['nombre']) && !empty($_POST['correo'])){
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];

        echo "El nombre es: " . $nombre . "<br>";
        echo "El correo es: " . $correo . "<br>";

        $sql = "INSERT INTO usuarios (nombre, correo) VALUES ('$nombre','$correo')";
        //Utilizar exec dado que no se regresan resultados
        $conn->exec($sql);

    }else{
        echo "<h1>Falta Informacion</h1>";
    }
    header('Location: index.php');
?>