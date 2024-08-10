<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO DE AUDITORIA</title>
    <nav>
        <div class="menu-icon">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <ul class="nav-links">
            <li><a href="http://localhost/hotel/restau/REST_CRUD/PROGRAMACION/SISTEM/index.php">Inicio</a></li>
            <li><a href="http://localhost/hotel/restau/REST_CRUD/PROGRAMACION/crud_app/index.php">Contactos</a></li>
            <li><a href="http://localhost/hotel/restau/REST_CRUD/PROGRAMACION/CRUD_R/index.php">Reservaciones</a></li>
            <li><a href="http://localhost/hotel/restau/REST_CRUD/PROGRAMACION/MEN%C3%9A/index.php">Restaurante</a></li>
            <li><a href="http://localhost/hotel/restau/REST_CRUD/PROGRAMACION/EMPLEADOS/index.php">Empleados</a></li>
<li>
<a href="http://localhost/hotel/auditoria/general.php">Auditoría</a>
    <ul class="submenu">
        <li><a href="http://localhost/hotel/auditoria/general.php">Auditoría General</a></li>
        <li><a href="http://localhost/hotel/auditoria/audit_log.php">Auditoría Contactos</a></li>
        <li><a href="http://localhost/hotel/auditoria/audit_log2.php">Auditoría Reservas</a></li>
        <li><a href="http://localhost/hotel/auditoria/audit_log3.php">Auditoría Menú</a></li>
        <li><a href="http://localhost/hotel/auditoria/audit_empleados.php">Auditoría Empleados</a></li>

    </ul>
</li>            <li><a href="http://localhost/hotel/restau/REST_CRUD/PROGRAMACION/reportes/index.php">Reportes</a></li>
        </ul>
    </nav>

    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

nav {
    background-color: #85600A;
    color: white;
    padding: 10px 0;
    text-align: center;
    position: relative;
    z-index: 1000;
}

.menu-icon {
    display: none;
}

.nav-links {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.nav-links li {
    position: relative;
    display: inline-block;
}

.nav-links a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 10px 20px;
    display: inline-block;
    transition: color 0.3s ease, background-color 0.3s ease;
}

.nav-links a:hover {
    color: #D1C37E;
    background-color: #6a4c26;
}

.submenu {
    display: none;
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #85600A;
    padding: 10px;
    list-style: none;
    margin: 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    transition: opacity 0.3s ease;
    opacity: 0;
    z-index: 999;
}

.submenu li {
    margin-bottom: 10px;
}

.submenu li:last-child {
    margin-bottom: 0;
}

.submenu li a {
    color: white;
    text-decoration: none;
    font-weight: normal;
    display: block;
}

.submenu li a:hover {
    color: #D1C37E;
}

.nav-links li:hover .submenu {
    display: block;
    opacity: 1;
}

.nav-links li:hover > a {
    color: #D1C37E;
}

        .add-button, .action-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #9F8C5A;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .add-button:hover, .action-button:hover {
            background-color: #000000;
            color: #FEFEFE;
            transform: scale(1.1);
        }
        .action-container {
            text-align: center; /* Centrar contenido en la columna de acciones */
        }
        .admin-buttons {
            text-align: center;
            margin-bottom: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Pacifico', cursive;
            font-size: 48px;
            color: #333;
            position: relative;
            animation: bounce 1s ease infinite;
        }
        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        table.loaded {
            opacity: 1;
            transform: translateY(0);
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        table th {
            background-color: #9F8C5A; /* Color de encabezado */
            color: white;
        }
        table tbody tr:nth-child(even) {
            background-color: #F9F1E5;
        }
        table tbody tr:hover {
            background-color: #D1C37E;
        }
        a.button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #9F8C5A;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
            position: auto;
            overflow: hidden;
        }
        a.button:hover {
            background-color: #000000;
            color: #FEFEFE;
            transform: scale(1.1);
        }
        a.button span {
            position: relative;
            z-index: 1;
        }
        a.button::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.3);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0);
            border-radius: 50%;
            transition: transform 0.4s ease;
            z-index: 0;
        }
        a.button:hover::before {
            transform: translate(-50%, -50%) scale(3);
        }
        .search-container {
            margin-bottom: 20px;
            width: 90%;
            max-width: 600px;
        }
        .search-container input[type="text"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        table td a {
            display: inline-block;
            padding: 8px 12px;
            margin-right: 5px;
            text-decoration: none;
            color: white;
            background-color: #66552B;
            border-radius: 3px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        table td a:hover {
            background-color: white;
            color: black;
            text-align: center; /* Centra el texto horizontalmente */
            vertical-align: middle; /* Centra el texto verticalmente */
        }
        .add-button, .action-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #9F8C5A;
            color: white;
            text-decoration: none;
            font-size: 16px;
            border-radius: 5px;
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .add-button:hover, .action-button:hover {
            background-color: #000000;
            color: #FEFEFE;
            transform: scale(1.1);
        }
        .action-container {
            text-align: center;
        }
        .admin-buttons {
            text-align: center;
            margin-bottom: 20px;
        }
        .pagination {
            text-align: center;
            margin: 20px 0;
        }
        .pagination a.button {
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <h1>REGISTRO DE AUDITORIA RESTAURANTE</h1>
    <button class="action-button" onclick="location.href='http://localhost/hotel/auditoria/general.php'">REGRESAR</button>

    <table class="loaded">
        <tr>
            <th>ID</th>
            <th>HORA DE ACCIÓN</th>
            <th>TIPO DE ACCION</th>
            <th>USUARIO</th>
            <th>CONSULTA</th>
        </tr>
        <?php
        include 'conexion3.php';
        ?>
    </table>
</body>
</html>