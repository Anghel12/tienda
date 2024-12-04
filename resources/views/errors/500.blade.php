<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 500 - Error Interno del Servidor</title>
{{--     <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <style>
        body {
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #fff;
            font-family: Arial, sans-serif;
        }

        .container {
            text-align: center;
            padding: 30px;
            background-color: #1f1f1f;
            border: 1px solid #fff;
            border-radius: 8px;
            width: 80%;
            max-width: 500px;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #ff6b6b; /* Color rojo para destacar el mensaje */
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 20px;
            color: #aaa; /* Color gris para el texto descriptivo */
        }

        .btn {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            font-size: 1.1rem;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .card {
            border: 1px solid #fff;
            padding: 20px;
            border-radius: 10px;
            background-color: rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>
    <div class="container card">
        <h1>¡Ups! Algo salió mal en el servidor.</h1>
        <p>Lamentablemente, hemos encontrado un error en el servidor. Estamos trabajando para solucionarlo.</p>
        <p>Si el problema persiste, por favor contáctanos al <a href="mailto:soporte@tusitio.com" class="btn">soporte@tusitio.com</a>.</p>
        <a href="{{ url('/') }}" class="btn">Volver al inicio</a>
    </div>
</body>
</html>
