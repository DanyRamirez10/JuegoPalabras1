<html>
<head>
    <title>ESCOGE UN NIVEL</title> <!-- Título de la página -->
</head>
<style>
    /* Estilos CSS para los elementos de la página */
    title {
        color: rgb(71, 9, 12);
        font-size: 45px;
    }

    button {
        display: block;
        width: 200px;
        background-color: rgb(127, 206, 25);
        border-radius: 20px;
        padding: 40px 43px;
        margin: 20px 13px;
        color: #320841;
        text-decoration: none;
        font-size: 30px; /* Tamaño de fuente más grande */
        font-family: Arial, sans-serif; /* Fuente del texto */
        font-weight: bold; /* Grosor del texto */
        text-transform: uppercase; /* Transformar el texto a mayúsculas */
    }
    body {
        background-image: url("Imagenes/fondoninos.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    button:hover {
        background-color: transparent;
        border: 2px solid blue;
        color: blue;
    }
    /* Establecer imagen de fondo para el botón "Atrás" */
    .boton-atras {
            background-image: url('Imagenes/atrasNiveles.png'); /*  'ruta-de-la-imagen' con la ruta de tu imagen */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 50px 63px;
            margin: 20px 13px;
    }
    h1 {
        text-align: center; /* Centrar el texto del título */
    }
</style>
<body> <!-- Cuerpo de la página -->
<h1>ESCOGE UN NIVEL</h1> <!-- Título visible en la página -->
<Center>
    
    <br>
    <button onclick="location.href='../nivelBasicopalabra/pelota.php'">Nivel Facil</button> <!-- Botón para ir a otra página -->
    <button onclick="location.href='../nivelnormalpalabra/campana.php'">Nivel Normal</button> <!-- Botón para ir a otra página -->
    <button onclick="location.href='../nivelDificilP/juego.php'">Nivel Dificil</button> <!-- Botón para ir a otra página -->

</Center>
<div class="botones-container">
     <button onclick="location.href='ModoJuego.php'" class="boton-atras">     </button><!-- Botón para ir a otra página -->
</body> <!-- Cuerpo de la página -->
</html>

