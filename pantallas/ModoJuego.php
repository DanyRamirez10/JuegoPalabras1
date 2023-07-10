<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stilos.css">
    <style>
        /* Estilos CSS para los elementos de la página */
        .title-container {
            text-align: center;
            background-color: yellowgreen;
            padding: 10px;
            margin: 10px auto;
            border-radius: 10px;
            max-width: 450px;
        }
        
        h1 {
            font-size: 40px;
            color: rgb(71, 9, 12);
            margin-top: 0;
        }
        body {
            background-image: url('Imagenes/ninos.png');
            background-size: 60%;/* valor para reducir imagen*/
            background-repeat: no-repeat;
            background-position: center;
            
        }
    
        button {
            display: block;
            width: 300px;
            background-color: rgb(127, 206, 256);
            border-radius: 20px;
            padding: 30px 30px;
            margin: 40px 13px;
            color: #22083c;
            text-decoration: none;
            font-size: 55px; /* Tamaño de fuente */
            font-family: 'Vladimir Script'; /* Cambia por la fuente que desees utilizar */
            font-weight: bold; /* Texto en negrita */
            text-align: center; /* Centrar el texto */
        
        }
    
        button:hover {
            background-color: transparent;
            border: 2px solid blue;
            color: blue;
        }
        .mute-button {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #3FF4E1 ;
            border: none;
            font-size: 50px;
            cursor: pointer;
    
        
        }
    </style>
    <title>ESCOGE COMO JUGAR</title>
</head>
<body>
<audio id="bg-audio" src="../sonidos/audioInicial.mp3" autoplay loop></audio>

<div class="title-container">
    <h1>BIENVENIDO ESCOGE COMO JUGAR</h1>
</div>

<div id="contenedor">
    <center>
        <br>
        <button onclick="location.href='NivelesP.php'">Crear Palabras</button>
    </center>  
</div>
<div id="contenedor">
    <center>
        <br>
        <button onclick="location.href='NivelesO.php'">Crear Oraciones</button>
    </center>  
</div>

<button id="mute-button" class="mute-button" onclick="toggleAudio()">🔊</button>

<script>
    var audio = document.getElementById('bg-audio');
    var muteButton = document.getElementById('mute-button');
    
    function toggleAudio() {
        if (audio.paused) {
            audio.play();
            muteButton.textContent = '🔊';
        } else {
            audio.pause();
            muteButton.textContent = '🔇';
        }
    }
</script>
</body>
</html>

