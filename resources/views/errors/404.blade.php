<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #a3d8f4; /* Fondo azul claro */
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }

        h1 {
            font-size: 6em;
            margin: 0;
            color: #ff3c3c;
        }

        p {
            font-size: 1.5em;
            margin: 10px 0 20px;
        }

        .ball {
            width: 150px;
            height: 150px;
            background-image: url('https://cdn-icons-png.flaticon.com/512/861/861512.png');
            background-size: contain;
            background-repeat: no-repeat;
            margin-bottom: 20px;
        }

        a {
            padding: 12px 25px;
            background-color: #007bff;
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="ball"></div>
    <h1>404</h1>
    <p>¡Ups! El balón se fue fuera de la cancha.<br>La página que buscas no existe.</p>
    <a href="../index.html">Regresar al inicio</a>
</body>
</html>
