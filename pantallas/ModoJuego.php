<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="stilos.css">
    <style>
        /* Estilos CSS para los elementos de la página */
        title {
            color: rgb(71, 9, 12);
            font-size: 45px;
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
            font-size: 40px; /* Tamaño de fuente */
        }
    
        button:hover {
            background-color: transparent;
            border: 2px solid blue;
            color: blue;
        }
    </style>
</head>
<body>
   
    <div id="contenedor">
        
        <center>
        <title>ESCOGE COMO JUGAR</title>
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
</body>
</html>

