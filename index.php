<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contacto</title>
</head>
<body>
    
    <div class="content">

        <form action="store.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="correo">Email:</label>
            <input type="email" name="correo" id="correo">
            <br>
            <button type="submit">Enviar</button>
        </form>
        
        <?php
            include("conecction.php");
            $sql = "SELECT * FROM usuarios";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
    
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
            echo "<table>
                <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                </thead>
                <tbody>";
            foreach ($stmt->fetchall() as $row) {
                echo "<tr> 
                    <td> " . $row['id'] . "</td><td> " . $row['nombre'] . "</td><td> " . $row['correo'] . "</td></tr>";
            }
            echo "</tbody>
            </table>"
        ?>

    </div>
</body>
</html>