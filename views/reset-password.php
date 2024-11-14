<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restablecer Contraseña - Full Sports</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --color-dark: #0F172A;
            --color-darker: #1E293B;
            --color-purple: #7C3AED;
            --color-purple-hover: #6D28D9;
        }
        .bg-custom-dark { background-color: var(--color-dark); }
        .bg-custom-darker { background-color: var(--color-darker); }
        .bg-custom-purple { background-color: var(--color-purple); }
        .hover\:bg-custom-purple:hover { background-color: var(--color-purple-hover); }
        .text-custom-purple { color: var(--color-purple); }
        .focus\:ring-custom-purple:focus { --tw-ring-color: var(--color-purple); }
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
                <h1 class="text-3xl font-bold text-white">Restablecer Contraseña</h1>
                <p class="text-gray-400">
                    Ingresa el código de verificación y tu nueva contraseña
                </p>
            </div>

            <form id="reset-password-form" class="space-y-4">
                <input type="hidden" id="email" name="email" value="">

                <div class="space-y-2">
                    <label for="code" class="text-sm font-medium text-gray-400">Código de Verificación</label>
                    <input
                        id="code"
                        name="code"
                        type="text"
                        required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent"
                        placeholder="Ingresa el código"
                    >
                    <p id="code-error" class="text-red-500 text-xs mt-1 hidden"></p>
                </div>

                <div class="space-y-2">
                    <label for="password" class="text-sm font-medium text-gray-400">Nueva Contraseña</label>
                    <input
                        id="password"
                        name="password"
                        type="password"
                        required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent"
                        placeholder="••••••••••••"
                    >
                    <p id="password-error" class="text-red-500 text-xs mt-1 hidden"></p>
                </div>

                <div class="space-y-2">
                    <label for="password_confirmation" class="text-sm font-medium text-gray-400">Confirmar Contraseña</label>
                    <input
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        required
                        class="w-full px-3 py-2 bg-custom-dark border border-gray-700 rounded-md text-white focus:outline-none focus:ring-2 focus:ring-custom-purple focus:border-transparent"
                        placeholder="••••••••••••"
                    >
                    <p id="password-confirmation-error" class="text-red-500 text-xs mt-1 hidden"></p>
                </div>

                <button type="submit" class="w-full bg-custom-purple hover:bg-custom-purple text-white py-2 rounded-md transition-colors">
                    Actualizar Contraseña
                </button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('reset-password-form').addEventListener('submit', function(e) {
            e.preventDefault();
            let isValid = true;

            // Code validation
            const code = document.getElementById('code');
            if (!code.value.trim()) {
                document.getElementById('code-error').textContent = 'El código de verificación es obligatorio.';
                document.getElementById('code-error').classList.remove('hidden');
                isValid = false;
            } else {
                document.getElementById('code-error').classList.add('hidden');
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

            if (isValid) {
                alert('Formulario enviado con éxito! En una aplicación real, esto se enviaría al servidor.');
                // Here you would typically send the form data to your server
            }
        });
    </script>
</body>
</html>