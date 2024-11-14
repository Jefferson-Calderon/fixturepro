<?php
// resources/views/admin/teams/edit.php
$team = isset($team) ? $team : null; // Asegúrate de pasar el objeto $team al incluir este archivo
$users = isset($users) ? $users : []; // Asegúrate de pasar el array de usuarios al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Equipo</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind -->
</head>
<body>
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Editar Equipo: <?php echo htmlspecialchars($team->name); ?>
    </h2>

    <form action="admin_teams_update.php?id=<?php echo urlencode($team->id); ?>" method="POST" enctype="multipart/form-data" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>"> <!-- Asumiendo que tienes un token CSRF -->

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($team->name); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mb-4">
            <label for="logo" class="block text-sm font-medium text-gray-700">Logo</label>
            <input type="file" name="logo" id="logo" class="mt-1 block w-full">
            <?php if ($team->logo): ?>
                <img src="<?php echo htmlspecialchars('storage/' . $team->logo); ?>" alt="Team Logo" class="mt-2" style="max-width: 200px;">
            <?php endif; ?>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"><?php echo htmlspecialchars($team->description); ?></textarea>
        </div>

        <div class="mb-4">
            <label for="captain_id" class="block text-sm font-medium text-gray-700">Capitán</label>
            <select name="captain_id" id="captain_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                <?php foreach ($users as $user): ?>
                    <option value="<?php echo htmlspecialchars($user->id); ?>" <?php echo $team->captain_id == $user->id ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($user->name); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Actualizar Equipo
            </button>
        </div>
    </form>
</body>
</html>