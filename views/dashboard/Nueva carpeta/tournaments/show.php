<?php
// resources/views/admin/tournaments/show.php
$tournament = isset($tournament) ? $tournament : null; // Asegúrate de pasar el objeto $tournament al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Torneo</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind -->
</head>
<body>
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Detalles del Torneo: <?php echo htmlspecialchars($tournament->name); ?>
    </h2>

    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md">
        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Nombre</h3>
            <p><?php echo htmlspecialchars($tournament->name); ?></p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Descripción</h3>
            <p><?php echo htmlspecialchars($tournament->description ?? 'Sin descripción'); ?></p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Fecha de Inicio</h3>
            <p><?php echo htmlspecialchars($tournament->start_date->format('d/m/Y')); ?></p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Fecha de Fin</h3>
            <p><?php echo htmlspecialchars($tournament->end_date->format('d/m/Y')); ?></p>
        </div>

        <div class="mb-4">
            <h3 class="text-lg font-semibold text-gray-700">Estado</h3>
            <p><?php echo htmlspecialchars(ucfirst($tournament->status)); ?></p>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="admin_tournaments_edit.php?id=<?php echo urlencode($tournament->id); ?>" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                Editar Torneo
            </a>
        </div>
    </div>
</body>
</html>