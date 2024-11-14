<?php
// /public/index.php

require_once '../config/database.php';
require_once '../controllers/LoginController.php';
require_once '../models/User.php';

// Configurar la base de datos
$database = new Database();
$db = $database->connect();

// Instanciar el controlador de Login
$loginController = new LoginController($db);

// Manejo de la ruta
$action = isset($_GET['action']) ? $_GET['action'] : 'showLoginForm';

if ($action === 'login') {
    $loginController->login();
} elseif ($action === 'logout') {
    $loginController->logout();
} else {
    $loginController->showLoginForm();
}
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Full Sports</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-custom-dark {
            background-color: #0F172A;
        }

        .bg-custom-darker {
            background-color: #1E293B;
        }

        .bg-custom-purple {
            background-color: #7C3AED;
        }

        .hover\:bg-custom-purple:hover {
            background-color: #6D28D9;
        }

        .text-custom-purple {
            color: #7C3AED;
        }

        .focus\:ring-custom-purple:focus {
            --tw-ring-color: #7C3AED;
        }
    </style>
</head>

<body class="bg-custom-dark">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-md space-y-6 bg-custom-darker p-8 rounded-xl shadow-xl">
            <a href="../index.php" class="flex justify-center">
                <div class="w-16 h-16 bg-custom-purple rounded-full flex items-center justify-center overflow-hidden">
                    <img src="../public/img/logo.png" alt="Logo" class="object-contain w-12 h-12">
                </div>
            </a>

            <div class="space-y-2 text-center">
                <h1 class="text-3xl font-bold text-white">Iniciar Sesión</h1>
                <p class="text-gray-400">
                    No tienes una cuenta? <a href="./register.php"
                        class="text-custom-purple hover:underline">Registrarse</a>
                </p>
            </div>

            <!-- Alerts de éxito y error -->
            <div id="success-alert"
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative hidden"
                role="alert">
                <span class="block sm:inline" id="success-message"></span>
            </div>

            <div id="error-alert"
                class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative hidden" role="alert">
                <ul id="error-list"></ul>
            </div>

            <!-- Formulario de inicio de sesión -->
            <?php if (isset($errors)): ?>
                <ul style="color: red;">
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <form action="../views/dashboard/user_dashboard.php" method="POST">
                <div class="space-y-2">
                    <label for="email" class="text-sm font-medium text-gray-400">Email</label>
                    <input id="email" name="email" type="email" placeholder="Correo Electronico" required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent">
                </div>

                <div class="space-y-2">
                    <label for="password" class="text-sm font-medium text-gray-400">Contraseña</label>
                    <input id="password" name="password" type="password" placeholder="••••••••••••" required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent">
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <input id="remember" name="remember" type="checkbox" class="border-gray-700">
                        <label for="remember" class="text-sm text-gray-400">Recordarme</label>
                    </div>
                    <a href="./recuperar-pass.php" class="text-sm text-custom-purple hover:underline">
                        Olvidaste tu contraseña?
                    </a>
                </div>

                <button type="submit"
                    class="w-full bg-custom-purple hover:bg-custom-purple text-white py-2 rounded-md transition-colors">
                    Iniciar Sesión
                </button>
            </form>

            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-700"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-custom-darker text-gray-400">Continuar con</span>
                </div>
            </div>

            <div class="flex justify-center space-x-4">
                <a href="#"
                    class="p-2 bg-custom-dark text-gray-400 rounded-md hover:text-custom-purple transition-colors">
                    <i class="fab fa-facebook text-2xl"></i>
                </a>

                <a href="#"
                    class="p-2 bg-custom-dark text-gray-400 rounded-md hover:text-custom-purple transition-colors">
                    <i class="fab fa-google text-2xl"></i>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('login-form').addEventListener('submit', function (e) {
            e.preventDefault();
            // Aquí puedes enviar los datos del formulario al servidor usando AJAX
            document.getElementById('success-alert').classList.remove('hidden');
            document.getElementById('success-message').textContent = 'Inicio de sesión exitoso!';
        });
    </script>

    <?php include '../views/footer.php'; ?>
</body>

</html>