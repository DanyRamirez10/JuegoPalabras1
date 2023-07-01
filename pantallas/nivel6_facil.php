<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESCUCHA Y RESPONDE</title>
    
    <style>
        /* Estilos CSS para los elementos de la página */
        body {
            background-color: #C0C0C0; /* Color de fondo verde para toda la página */
        }

        h1 {
            color: rgb(91, 8, 12);
            font-size: 45px;
        }

        button {
            display: inline-block;
            width: 150px;
            height: 80px;
            background-color:#58D68D ; /* Fondo  para los botones  */
            border-radius: 10px;
            padding: 15px 30px;
            margin: 5px;
            color: #22083c;
            text-decoration: none;
            font-size: 20px; /* Tamaño de fuente */
            font-family: Arial Black, sans-serif; /* Cambia "Arial, sans-serif" por la fuente que desees utilizar */
        }
        img {
            width: 300px; /* Establecer el ancho deseado para la imagen */
            height: auto; /* Permitir que la altura se ajuste proporcionalmente */
            cursor: pointer;
        }
        button:hover {
            background-color: transparent;
            border: 2px solid blue;
            color: blue;
        }

        #texto {
            display: block;
            width: 300px;
            height: 50px;
            font-size: 18px;
            margin: 20px auto;
        }

        .boton-borrar {
            background-color: red;
            color: white;
            text-decoration: none;
        }

        .boton-siguiente {
            background-color: violet;
            color: white;
            text-decoration: none;
        }

        /* Establecer imagen de fondo para el botón "Atrás" */
        .boton-atras {
            background-image: url('Imagenes/atras.png'); /*  'ruta-de-la-imagen' con la ruta de tu imagen */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Establecer imagen de fondo para el botón "Siguiente" */
        .boton-siguiente {
            background-image: url('Imagenes/adelante.png'); /* 'ruta-de-la-imagen' con la ruta de tu imagen */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        /* Contenedor de los botones */
        .botones-container {
            display: flex;
            justify-content: space-between;
        }

        .estrella {
            animation: estrellaAnimacion 1s ease infinite;
            width: 60px;
        }
        .estrellas-container {
            position: absolute;
            top: 10%;
            right: 10px;
            transform: translatey(-50%);
        }
        @keyframes estrellaAnimacion {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.5);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <center>
        <h1>ESCUCHA Y RESPONDE</h1>
        <img src="Imagenes/mapa.png" alt="Imagen" onclick="reproducirSonido()">
        <audio id="sonido" src="Sonidos/mapa.mp3" preload="auto"></audio>
        <audio id="fallasteAudio" src="Sonidos/error.mp3" preload="auto"></audio>

        <script>
            function reproducirSonido() {
                var audio = document.getElementById("sonido");
                audio.play();
            }
        </script>

        <h1>COMPLETA LA PALABRA</h1>
        <input type="text" id="texto" placeholder="coloque las palabras aqui" readonly>
        
        <button onclick="borrarTexto()" class="boton-borrar">Borrar</button>

        <button onclick="agregarTexto('PO')">PO</button>
        <button onclick="agregarTexto('MA')">MA</button>
        <button onclick="agregarTexto('BO')">BO</button>
        <button onclick="agregarTexto('PA')">PA</button>
        
    </center>

    <script>
        function agregarTexto(texto) {
            var input = document.getElementById("texto");
            input.value += texto;

            // Verificar si la palabra completa ha sido formada
            if (input.value.toLowerCase() === "mapa") {
                var felicitacionesAudio = new Audio('Sonidos/felicidades.mp3');
                felicitacionesAudio.play();

                // Agregar estrellitas
                var estrellasContainer = document.createElement('div');
                estrellasContainer.classList.add('estrellas-container');
                for (var i = 0; i < 5; i++) {
                    var estrella = document.createElement('img');
                    estrella.src = 'Imagenes/estrellita.png';
                    estrella.classList.add('estrella');
                    estrellasContainer.appendChild(estrella);
                }

                var body = document.querySelector('body');
                body.appendChild(estrellasContainer);
            } else if (input.value.length >= 4) {
                var fallasteAudio = document.getElementById("fallasteAudio");
                fallasteAudio.play();
            }
        }

        function borrarTexto() {
            var input = document.getElementById("texto");
            input.value = "";
            // Eliminar el contenedor de las estrellas
        var estrellasContainer = document.querySelector('.estrellas-container');
         if (estrellasContainer) {
             estrellasContainer.parentNode.removeChild(estrellasContainer);
        }
        }
    </script>

    <div class="botones-container">
        <button onclick="location.href='NivelesP.php'" class="boton-atras">   </button>
        <button onclick="location.href='nivel2_facil.php'" class="boton-siguiente">    </button>
    </div>
</body>
</html>
