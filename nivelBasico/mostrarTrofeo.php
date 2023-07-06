<!DOCTYPE html>
<html>
<head>
  <style>
    /* Estilos adicionales */
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
    .image-container {
      position: relative;
    }
    
    .image-text {
      position: absolute;
      top: 30%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 36px;
      color: rgb(255, 255, 255);
      text-shadow: 2px 2px 4px rgba(1, 2, 0, 0.5);
      white-space: nowrap;
    }
    
    .back-button {
      position: absolute;
      top: 10px;
      left: 10px;
      background-color: rgba(255, 255, 255, 0.5);
      border: none;
      padding: 10px 20px;
      font-size: 18px;
      cursor: pointer;
    }
    
    .back-button:hover {
      background-color: rgba(255, 255, 255, 0.8);
    }
  </style>
</head>
<body onload="playAudio()">
  <div class="image-container">
  <button onclick="location.href='NivelesP.php'" class="boton-atras">   </button>
    <img src="../imagenes/profeo3.gif" alt="Imagen de transición">
    <div class="image-text">Felicidades.... Completaste el nivel</div>
    <audio id="audioPlayer">
      <source src="../sonidos/ringtones.mp3" type="audio/mpeg">
      Tu navegador no admite el elemento de audio.
    </audio>
  </div>
  
  <script>
    function playAudio() {
      var audioPlayer = document.getElementById("audioPlayer");
      audioPlayer.play();
    }
    
    function goBack() {
      window.history.back();
    }
  </script>
</body>
</html>

