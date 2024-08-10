<?php
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "restaurant_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Consultar la tabla audit_log
        $sql = "SELECT id, action_time, action_type, user_host, query_text FROM audit_log";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Mostrar datos en la tabla
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["action_time"] . "</td>";
                echo "<td>" . $row["action_type"] . "</td>";
                echo "<td>" . $row["user_host"] . "</td>";
                echo "<td>" . $row["query_text"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No hay registros en la tabla de auditoría</td></tr>";
        }

        $conn->close();
        ?>