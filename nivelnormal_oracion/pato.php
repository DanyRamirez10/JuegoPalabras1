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
            background-image: url('../imagenes/fondo2.jpg'); /* Ruta de la imagen de fondo */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #C0C0C0; /* Color de fondo verde para toda la página */
        }

        h1 {
            color: rgb(91, 8, 12);
            font-size: 45px;
        }

        button {
            display: inline-block;
            width: 185px;/*tamañono del boton*/
            height: 80px;
            background-color: white; /* Fondo  para los botones  */
            border-radius: 10px;
            padding: 7px 30px;
            margin: 5px;
            color: #22083c;
            text-decoration: none;
            font-size: 60px; /* Tamaño de fuente */
            font-family: 'Vladimir Script'; /* Cambia por la fuente que desees utilizar */
            font-weight: bold; /* Texto en negrita */
            text-align: center; /* Centrar el texto */
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
            transform: scale(1.1); /* Escala el botón al 110% en hover */
        }

        #texto {
            display: block;
            width: 500px;
            height: 50px;
            font-size: 18px;
            margin: 20px auto;
            font-weight: bold;
            font-family: 'Vladimir Script';
            font-size: 50px;
            white-space: pre-wrap; /* Permite conservar los saltos de línea */
        }

        .boton-borrar {
        background-image: url('../imagenes/borrar.png'); /* Ruta de la imagen que deseas utilizar */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        margin-right: 10px;

    }

        /* Establecer imagen de fondo para el botón "Atrás" */
        .boton-atras {
            background-image: url('../imagenes/atras.png'); /*  'ruta-de-la-imagen' con la ruta de tu imagen */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin-right: 10px;
            
        }

        /* Establecer imagen de fondo para el botón "Siguiente" */
        .boton-siguiente {
            background-image: url('../imagenes/adelante.png'); /* 'ruta-de-la-imagen'*/
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin-left: auto; /* Mueve el botón hacia la derecha */
        }
        /* Contenedor de los botones */
        .botones-container {
            display: flex;
            justify-content: space-between;
            justify-content: flex-start; /* Alinear los botones a la izquierda */
           /* align-items: center; /* Alinear verticalmente al centro */
        }

        .estrella {
            animation: estrellaAnimacion 1s ease infinite;
            background-image: url('../imagenes/estrellita.png'); /* Ruta de la imagen de la estrella */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            width: 60px; /* Ajusta el tamaño de la estrella según tus preferencias */
            height: 60px; /* Ajusta el tamaño de la estrella según tus preferencias */
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
                .puntaje-container {
            position: absolute;
            top: 20%;
            left: 10px;
            transform: translatey(-50%);
            color: white;
        }

        .puntaje-container p {
            font-size: 30px;
            margin: 0;
        }

    </style>
</head>
<body>
    <center>
        <h1>ESCUCHA Y RESPONDE</h1>
        <img src="../imagenes/pato2.png" alt="Imagen" onclick="reproducirSonido()">
        <audio id="sonido" src="../sonidos/mimameama.mp3" preload="auto"></audio>
        <audio id="fallasteAudio" src="../sonidos/error2.mp3" preload="auto"></audio>

        <script>
            function reproducirSonido() {
                var audio = document.getElementById("sonido");
                audio.play();
            }
        </script>

        <h1>COMPLETA LA PALABRA</h1>
        <input type="text" id="texto" placeholder="coloque las palabras aqui" readonly>
        
        

        <div id="buttonContainer"></div>
        
    </center>

    <script>
        var buttons = [
            { label: "El", onclick: "agregarTexto('El')" },
            { label: "lastimó", onclick: "agregarTexto('lastimó')" },
            { label: "pato", onclick: "agregarTexto('pato')" },
            { label: "patita",onclick: "agregarTexto('patita')" },
            { label: "se", onclick: "agregarTexto('se')" },
            { label: "la", onclick: "agregarTexto('la')" }
        ];

        function shuffle(array) {
            var currentIndex = array.length, temporaryValue, randomIndex;
        
            while (0 !== currentIndex) {
                randomIndex = Math.floor(Math.random() * currentIndex);
                currentIndex -= 1;
        
                temporaryValue = array[currentIndex];
                array[currentIndex] = array[randomIndex];
                array[randomIndex] = temporaryValue;
            }
        
            return array;
        }
        
        function createButtons() {
            var buttonContainer = document.getElementById("buttonContainer");
            buttonContainer.innerHTML = "";

            var shuffledButtons = shuffle(buttons);

            shuffledButtons.forEach(function(buttonData) {
                var button = document.createElement("button");
                button.textContent = buttonData.label;
                button.onclick = new Function(buttonData.onclick);
                buttonContainer.appendChild(button);
            });
        }

        function agregarTexto(texto) {
            var input = document.getElementById("texto");
            input.value += texto;

            // Verificar si la palabra completa ha sido formada
            //if (input.value.toLowerCase() === "elpatoselastimólapatita") {
                if (input.value.toLowerCase() === "elpatoselastimólapatita") {

                var palabras = ["El", "pato", "se", "lastimó","la","patita"];
                var fraseSeparada = palabras.join(" ");

                var felicitacionesAudio = new Audio('../sonidos/felicidades.mp3');
                felicitacionesAudio.play();

                // Mostrar la frase separada en la pantalla
                input.value = fraseSeparada;

                // Habilitar el botón "Siguiente"
                var botonSiguiente = document.getElementById("botonSiguiente");
                botonSiguiente.disabled = false;

                 // Mostrar las estrellas durante 3 segundos
                var estrellasContainer = document.createElement('div');
                estrellasContainer.classList.add('estrellas-container');
                for (var i = 0; i < 5; i++) {
                var estrella = document.createElement('div');
                estrella.classList.add('estrella');
                estrellasContainer.appendChild(estrella);
                }

                var body = document.querySelector('body');
                body.appendChild(estrellasContainer);

                setTimeout(function() {
                estrellasContainer.remove();
                }, 3000);

            // Mostrar el puntaje
            var puntajeContainer = document.createElement('div');
            puntajeContainer.classList.add('puntaje-container');
            var puntajeTexto = document.createElement('p');
            puntajeTexto.textContent = 'Puntaje: 5/5'; // Aquí puedes mostrar el puntaje actual
            puntajeContainer.appendChild(puntajeTexto);
            body.appendChild(puntajeContainer);

                var body = document.querySelector('body');
                body.appendChild(estrellasContainer);
            } else if (input.value.length >= 22) {
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

            // Deshabilitar el botón "Siguiente"
            var botonSiguiente = document.getElementById("botonSiguiente");
            botonSiguiente.disabled = true;
        }
        createButtons();
    </script>

    <div class="botones-container">
        <button onclick="location.href='../pantallas/NivelesO.php'" class="boton-atras"></button>
        <button onclick="borrarTexto()" class="boton-borrar"></button>
        <button id="botonSiguiente" onclick="location.href='nivel2_facil'" class="boton-siguiente" disabled></button>
    </div>
</body>
</html>