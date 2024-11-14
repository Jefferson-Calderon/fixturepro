<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Código de Verificación</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin: 20px 0;
        }
        h2 {
            color: #4A90E2;
            text-align: center;
            margin-bottom: 20px;
        }
        .code {
            font-size: 36px;
            font-weight: bold;
            color: #7C3AED;
            text-align: center;
            padding: 20px;
            background-color: #f0f5ff;
            border-radius: 5px;
            margin: 20px 0;
            letter-spacing: 5px;
            border: 2px solid #7C3AED;
        }
        p {
            margin: 10px 0;
        }
        .button {
            display: inline-block;
            background-color: #4A90E2;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px auto;
            font-weight: bold;
        }
        .footer {
            font-size: 12px;
            color: #666;
            text-align: center;
            margin-top: 20px;
        }
        .footer a {
            color: #4A90E2;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Recuperación de Contraseña - Full Sports</h2>
        <p>Has solicitado restablecer tu contraseña. Utiliza el siguiente código de verificación:</p>

        <div class="code">
            {{ $code }}
        </div>

        <p>Este código expirará en 15 minutos por razones de seguridad.</p>
        <p>Si no has solicitado restablecer tu contraseña, puedes ignorar este correo.</p>

        <a href="{{ route('login') }}" class="button">Iniciar Sesión</a>

        <div class="footer">
            <p>Este es un correo automático, por favor no respondas a este mensaje.</p>
            <p>&copy; {{ date('Y') }} <a href="#">Full Sports</a>. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>