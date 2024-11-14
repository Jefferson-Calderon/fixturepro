<?php
// resources/views/admin/users/edit.php
$user = isset($user) ? $user : null; // Asegúrate de pasar el objeto $user al incluir este archivo
$roles = isset($roles) ? $roles : []; // Asegúrate de pasar el array de roles al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind -->
</head>
<body>
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Editar Usuario: <?php echo htmlspecialchars($user->name); ?>
    </h2>

    <form action="admin_users_update.php?id=<?php echo urlencode($user->id); ?>" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>"> <!-- Asumiendo que tienes un token CSRF -->

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($user->name); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($user->email); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mb-4">
            <label for="role" class="block text-sm font-medium text-gray-700">Rol</label>
            <select name="role_id" id="role" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                <?php foreach ($roles as $role): ?>
                    <option value="<?php echo htmlspecialchars($role->id); ?>" <?php echo $user->role_id == $role->id ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($role->name); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Actualizar Usuario
            </button>
        </div>
    </form>
</body>
</html>