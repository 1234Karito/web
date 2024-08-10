<nav>
    <div class="menu-icon">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="nav-links">
        <li><a href="../SISTEM/index.php">Inicio</a></li>
        <li><a href="../CONTACTOS/index.php">Contactos</a></li>
        <li><a href="#">Reservaciones</a></li>
        <li><a href="#">Restaurante</a></li>
        <li><a href="#">Auditoría</a></li>
        <li><a href="#">Reportes</a></li>
    </ul>
</nav>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

nav {
    background-color: #333;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: relative;
    width: 100%;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra opcional */
    z-index: 1000; /* Asegúrate de que la barra de navegación esté por encima de otros contenidos */
}

nav .menu-icon {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

nav .menu-icon .bar {
    height: 3px;
    width: 25px;
    background-color: #fff;
    margin: 4px 0;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: space-around;
    width: 100%;
    padding-left: 0; /* Elimina el padding por defecto */
}

nav ul li {
    margin: 0;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    padding: 8px 16px;
    display: block;
    transition: background-color 0.3s;
}

nav ul li a:hover {
    background-color: #555;
}

@media (max-width: 768px) {
    nav ul {
        display: none;
        flex-direction: column;
        width: 100%;
        position: absolute;
        top: 60px;
        left: 0;
        background-color: #333;
    }

    nav ul.nav-active {
        display: flex;
    }

    nav ul li {
        text-align: center;
        margin: 10px 0;
    }

    nav .menu-icon {
        display: flex;
    }
}

</style>