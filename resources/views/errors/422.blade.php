<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - 422</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f39c12;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        h1 {
            font-size: 5rem;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.5rem;
            margin-bottom: 40px;
        }
        .error-container {
            background-color: #e67e22;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
        }
        .error-code {
            font-size: 6rem;
            font-weight: bold;
            color: #c0392b;
        }
        .error-message {
            font-size: 1.2rem;
            color: #ecf0f1;
            margin-top: 10px;
        }
        .btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #2980b9;
            color: white;
            font-size: 1.2rem;
            border-radius: 30px;
            text-decoration: none;
            margin-top: 30px;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background-color: #1abc9c;
            transform: scale(1.05);
        }
        .btn:active {
            background-color: #16a085;
            transform: scale(1);
        }
    </style>
</head>
<body>

    <div class="error-container">
        <div class="error-code">422</div>
        <p class="error-message">La solicitud no fue procesada correctamente. Verifica los datos enviados.</p>
        <a href="/" class="btn">Volver al Inicio</a>
    </div>

</body>
</html>
