<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Full Sports</title>
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
                <h1 class="text-3xl font-bold text-white">Registrarse</h1>
                <p class="text-gray-400">
                    ¿Ya tienes una cuenta? <a href="./login.php" class="text-custom-purple hover:underline">Iniciar Sesión</a>
                </p>
            </div>

            <form id="register-form" class="space-y-4">
                <div class="space-y-2">
                    <label for="name" class="text-sm font-medium text-gray-400">Nombre</label>
                    <input
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu nombre completo"
                        required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent"
                    >
                    <p id="name-error" class="text-red-500 text-xs mt-1 hidden"></p>
                </div>

                <div class="space-y-2">
                    <label for="email" class="text-sm font-medium text-gray-400">Email</label>
                    <input
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Correo Electrónico"
                        required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent"
                    >
                    <p id="email-error" class="text-red-500 text-xs mt-1 hidden"></p>
                </div>

                <div class="space-y-2">
                    <label for="password" class="text-sm font-medium text-gray-400">Contraseña</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        placeholder="••••••••••••"
                        required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent"
                    >
                    <p id="password-error" class="text-red-500 text-xs mt-1 hidden"></p>
                </div>

                <div class="space-y-2">
                    <label for="password_confirmation" class="text-sm font-medium text-gray-400">Confirmar Contraseña</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="••••••••••••"
                        required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent"
                    >
                    <p id="password-confirmation-error" class="text-red-500 text-xs mt-1 hidden"></p>
                </div>

                <div class="flex items-center space-x-2">
                    <input id="terms" name="terms" type="checkbox" class="border-gray-700" required>
                    <label for="terms" class="text-sm text-gray-400">Acepto los <a href="#" class="text-custom-purple hover:underline">Términos y Condiciones</a></label>
                </div>

                <button type="submit" class="w-full bg-custom-purple hover:bg-custom-purple text-white py-2 rounded-md transition-colors">
                    Registrarse
                </button>
            </form>

            <div class="relative">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-700"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-custom-darker text-gray-400">O regístrate con</span>
                </div>
            </div>

            <div class="flex justify-center space-x-4">
                <a href="#" class="p-2 bg-custom-dark text-gray-400 rounded-md hover:text-custom-purple transition-colors">
                    <span class="sr-only">Registrarse con Facebook</span>
                    <i class="fab fa-facebook text-2xl" aria-hidden="true"></i>
                </a>
                <a href="#" class="p-2 bg-custom-dark text-gray-400 rounded-md hover:text-custom-purple transition-colors">
                    <span class="sr-only">Registrarse con Google</span>
                    <i class="fab fa-google text-2xl" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('register-form').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;

            // Name validation
            const name = document.getElementById('name');
            if (!name.value.trim()) {
                document.getElementById('name-error').textContent = 'El nombre es obligatorio.';
                document.getElementById('name-error').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('name-error').classList.add('hidden');
            }

            // Email validation
            const email = document.getElementById('email');
            if (!email.value.trim()) {
                document.getElementById('email-error').textContent = 'El email es obligatorio.';
                document.getElementById('email-error').classList.remove('hidden');
                isValid = false;
            } else if (!/\S+@\S+\.\S+/.test(email.value)) {
                document.getElementById('email-error').textContent = 'Por favor, introduce un email válido.';
                document.getElementById('email-error').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('email-error').classList.add('hidden');
            }

            // Password validation
            const password = document.getElementById('password');
            const passwordConfirmation = document.getElementById('password_confirmation');
            if (!password.value) {
                document.getElementById('password-error').textContent = 'La contraseña es obligatoria.';
                document.getElementById('password-error').classList.remove('hidden');
                isValid = false;
            } else if (password.value.length < 8) {
                document.getElementById('password-error').textContent = 'La contraseña debe tener al menos 8 caracteres.';
                document.getElementById('password-error').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('password-error').classList.add('hidden');
            }

            if (password.value !== passwordConfirmation.value) {
                document.getElementById('password-confirmation-error').textContent = 'Las contraseñas no coinciden.';
                document.getElementById('password-confirmation-error').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('password-confirmation-error').classList.add('hidden');
            }

            // Terms validation
            const terms = document.getElementById('terms');
            if (!terms.checked) {
                alert('Debes aceptar los términos y condiciones para registrarte.');
                isValid = false;
            }

            if (isValid) {
                alert('Formulario enviado con éxito!');
                // Here you would typically send the form data to your server
            }
        });
    </script>
</body>
</html>