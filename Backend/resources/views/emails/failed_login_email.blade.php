<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notificación de Intento de Inicio de Sesión</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }
        .content {
            padding: 20px;
        }
        .content p {
            font-size: 16px;
            line-height: 1.5;
            margin: 0 0 20px;
        }
        .content a {
            color: #007bff;
            text-decoration: none;
        }
        .footer {
            background-color: #f4f4f4;
            text-align: center;
            padding: 10px;
            font-size: 12px;
            color: #666666;
        }
        .footer a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Notificación de Seguridad</h1>
        </div>
        <div class="content">
            <p>Hola {{ $details[0]['name'] }},</p>
            <p>Recientemente se ha intentado iniciar sesión en tu cuenta.</p>
            <p>Por medidas de seguridad bloqueamos el usuario, para desbloquerlo haz clic en el siguiente enlace:</p>
            <p><a href="{{route("desbloquear.usuario", $details[0]["id"])}}">Desbloquear usuario</a></p>
        </div>
        <div class="footer">
            <p>Si necesitas ayuda, por favor contacta a nuestro <a href="">soporte</a>.</p>
        </div>
    </div>
</body>
</html>
