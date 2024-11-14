<?php
// resources/views/admin/tournaments/edit.php
$tournament = isset($tournament) ? $tournament : null; // Asegúrate de pasar el objeto $tournament al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Torneo</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind -->
</head>
<body>
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Editar Torneo: <?php echo htmlspecialchars($tournament->name); ?>
    </h2>

    <form action="admin_tournaments_update.php?id=<?php echo urlencode($tournament->id); ?>" method="POST" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>"> <!-- Asumiendo que tienes un token CSRF -->

        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
            <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($tournament->name); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="description" id="description" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"><?php echo htmlspecialchars($tournament->description); ?></textarea>
        </div>

        <div class="mb-4">
            <label for="start_date" class="block text-sm font-medium text-gray-700">Fecha de Inicio</label>
            <input type="date" name="start_date" id="start_date" value="<?php echo htmlspecialchars($tournament->start_date->format('Y-m-d')); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mb-4">
            <label for="end_date" class="block text-sm font-medium text-gray-700">Fecha de Fin</label>
            <input type="date" name="end_date" id="end_date" value="<?php echo htmlspecialchars($tournament->end_date->format('Y-m-d')); ?>" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700">Estado</label>
            <select name="status" id="status" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                <option value="draft" <?php echo $tournament->status == 'draft' ? 'selected' : ''; ?>>Borrador</option>
                <option value="active" <?php echo $tournament->status == 'active' ? 'selected' : ''; ?>>Activo</option>
                <option value="completed" <?php echo $tournament->status == 'completed' ? 'selected' : ''; ?>>Completado</option>
                <option value="cancelled" <?php echo $tournament->status == 'cancelled' ? 'selected' : ''; ?>>Cancelado</option>
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <button type="submit" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Actualizar Torneo
            </button>
        </div>
    </form>
</body>
</html>