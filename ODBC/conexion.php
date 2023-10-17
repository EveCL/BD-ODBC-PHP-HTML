<!DOCTYPE HTML>

<html lang="es">

 

<head>

    <title>PHP and ODBC: Ejemplo</title>

    <meta http-equiv="Content-type" content="text/html; charset-UTF-8">

</head>

 

<body>

    <table align="center" border="1" border-color: #96D4D4 style="width: 50%">

        <tr>

            <th>id</th>

            <th>Nombre</th>

            <th>Apellido</th>

            <th>Edad</th>

            <th>direccion</th>

            <th>Telefono</th>

            <th></th>

            <th></th>

        </tr>

        <?php

        $dsn = "demo";

        $user = "root";

        $password = "";

        $conn = odbc_connect($dsn, $user, $password);

        if (!$conn) {

            echo "<p>Conexion fallida: ";

            echo odbc_errormsg($conn);

            echo "</p>\n";

        }

 

        $sql = "SELECT * FROM estudiantes";

        $rs = odbc_exec($conn, $sql);

 

        while (odbc_fetch_row($rs)) {

            $id = odbc_result($rs, "id");

            $nombre = odbc_result($rs, "nombre");

            $apellido = odbc_result($rs, "apellido");

            $edad = odbc_result($rs, "edad");

            $direccion = odbc_result($rs, "direccion");

            $telefono = odbc_result($rs, "telefono");

 

            echo "<tr>";

            echo "<td>" . $id . "</td>";

            echo "<td>" . $nombre . "</td>";

            echo "<td>" . $apellido . "</td>";

            echo "<td>" . $edad . "</td>";

            echo "<td>" . $direccion . "</td>";

            echo "<td>" . $telefono . "</td>";

        ?>

            <th><a href="actualizar.php?id=<?php odbc_result($rs, "codigo") ?>" class="btn btn-info">Editar</a></th>

 

            <th><a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Eliminar</a></th>

        <?php

        }

        odbc_close($conn)

        ?>

    </table>

    <br>

 

    <div class="container">

        <div class="abs-center">

            <form action="insertar.php" class="border p-3 form" method="POST">

 

                <div class="form-group">

                    <label for="id">id</label>

                    <input type="text" id="id" name="id"><br><br>

                </div>

 

                <div class="form-group">

                    <label for="nombre">nombre</label>

                    <input type="text" id="nombre" name="nombre"><br><br>

                </div>

 

                <div class="form-group">

                    <label for="apellido">apellido</label>

                    <input type="text" name="apellido" id="apellido"><br><br>

                </div>

 

                <div class=" form-group">

                    <label for="edad">edad</label>

                    <input type="text" name="edad" id="edad"><br><br>

                </div>

 

                <div class=" form-group">

                    <label for="direccion">direccion</label>

                    <input type="text" name="direccion" id="direccion"><br><br>

                </div>

 

                <div class=" form-group">

                    <label for="telefono">teléfono</label>

                    <input type="text" name="telefono" id="telefono"><br><br>

                </div>

 

                <button type="submit" class="btn btn-primary">Enviar</button><br>

            </form>

        </div>

    </div>

 

</body>

 

</html>