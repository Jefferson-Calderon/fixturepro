<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña - Full Sports</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-custom-dark { background-color: #0F172A; }
        .bg-custom-darker { background-color: #1E293B; }
        .bg-custom-purple { background-color: #7C3AED; }
        .hover\:bg-custom-purple:hover { background-color: #6D28D9; }
        .text-custom-purple { color: #7C3AED; }
        .focus\:ring-custom-purple:focus { --tw-ring-color: #7C3AED; }
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
                <h1 class="text-3xl font-bold text-white">Recuperar Contraseña</h1>
                <p class="text-gray-400">
                    Ingresa tu correo electrónico para recibir un código de verificación
                </p>
            </div>

            <form id="password-recovery-form" class="space-y-4">
                <div class="space-y-2">
                    <label for="email" class="text-sm font-medium text-gray-400">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent"
                        placeholder="Correo Electrónico"
                    >
                    <p id="email-error" class="text-red-500 text-xs mt-1 hidden"></p>
                </div>

                <button type="submit" class="w-full bg-custom-purple hover:bg-custom-purple text-white py-2 rounded-md transition-colors">
                    Enviar Código de Verificación
                </button>
            </form>

            <div class="text-center">
                <a href="../views/login.php." class="text-sm text-custom-purple hover:underline">
                    Volver al inicio de sesión
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('password-recovery-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('email').value;
            const emailError = document.getElementById('email-error');
            
            if (!email) {
                emailError.textContent = 'El campo de correo electrónico es obligatorio.';
                emailError.classList.remove('hidden');
            } else {
                emailError.classList.add('hidden');
                // Here you would typically send the email to your server
                // For demonstration, we'll just show an alert
                alert('Se ha enviado un código de verificación a ' + email);
            }
        });
    </script>
</body>
</html>