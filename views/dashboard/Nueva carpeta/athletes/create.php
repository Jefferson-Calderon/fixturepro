<?php
// resources/views/admin/athletes/create.php
$users = isset($users) ? $users : []; // Asegúrate de pasar el array de usuarios al incluir este archivo
$teams = isset($teams) ? $teams : []; // Asegúrate de pasar el array de equipos al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Atleta</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind -->
</head>
<body>
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Crear Nuevo Atleta
    </h2>

    <form action="admin_athletes_store.php" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>"> <!-- Asumiendo que tienes un token CSRF -->

        <div class="mb-4">
            <label for="user_id" class="block text-sm font-medium text-gray-700">Usuario</label>
            <select name="user_id" id="user_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                <?php foreach ($users as $user): ?>
                    <option value="<?php echo htmlspecialchars($user->id); ?>"><?php echo htmlspecialchars($user->name); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4">
            <label for="team_id" class="block text-sm font-medium text-gray-700">Equipo</label>
            <select name="team_id" id="team_id" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                <?php foreach ($teams as $team): ?>
                    <option value="<?php echo htmlspecialchars($team->id); ?>"><?php echo htmlspecialchars($team->name); ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-4">
            <label for="date_of_birth" class="block text-sm font-medium text-gray-700">Fecha de Nacimiento</label>
            <input type="date" name="date_of_birth" id="date_of_birth" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium text-gray-700">Género</label>
            <select name="gender" id="gender" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                <option value="male">Masculino</option>
                <option value="female">Femenino</option>
                <option value="other">Otro</option>
            </select>
        </div>

        <div class="mb-4">
            <label for="height" class="block text-sm font-medium text-gray-700">Altura (cm)</label>
            <input type="number" step="0.01" name="height" id="height" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="mb-4">
            <label for="weight" class="block text-sm font-medium text-gray-700">Peso (kg)</label>
            <input type="number" step="0.01" name="weight" id="weight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Crear Atleta
            </button>
        </div>
    </form>
</body>
</html>