<?php
// views/admin/users/show.php
$user = isset($user) ? $user : null; // Asegúrate de pasar el objeto $user al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Usuario</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind -->
</head>
<body>
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Detalles del Usuario: <?php echo htmlspecialchars($user->name); ?>
    </h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Nombre</h3>
            <p><?php echo htmlspecialchars($user->name); ?></p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Email</h3>
            <p><?php echo htmlspecialchars($user->email); ?></p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Rol</h3>
            <p><?php echo htmlspecialchars($user->role->name); ?></p>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="admin_users_edit.php?id=<?php echo urlencode($user->id); ?>" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Editar Usuario
            </a>
        </div>
    </div>
</body>
</html>