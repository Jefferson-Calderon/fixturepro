<?php
// resources/views/admin/tournaments/index.php
$tournaments = isset($tournaments) ? $tournaments : []; // Asegúrate de pasar el array de torneos al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Torneos</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind -->
</head>
<body>
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Torneos
    </h2>

    <div class="mb-4 flex justify-between items-center">
        <a href="admin_tournaments_create.php" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Crear Nuevo Torneo
        </a>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                        <th class="px-4 py-3">Nombre</th>
                        <th class="px-4 py-3">Fecha Inicio</th>
                        <th class="px-4 py-3">Fecha Fin</th>
                        <th class="px-4 py-3">Estado</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    <?php foreach ($tournaments as $tournament): ?>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="font-semibold"><?php echo htmlspecialchars($tournament->name); ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo htmlspecialchars($tournament->start_date->format('d/m/Y')); ?>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <?php echo htmlspecialchars($tournament->end_date->format('d/m/Y')); ?>
                            </td>
                            <td class="px-4 py-3 text-xs">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full">
                                    <?php echo htmlspecialchars($tournament->status); ?>
                                </span>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <a href="admin_tournaments_show.php?id=<?php echo urlencode($tournament->id); ?>" class="text-purple-600 hover:underline">Ver</a>
                                <a href="admin_tournaments_edit.php?id=<?php echo urlencode($tournament->id); ?>" class="text-purple-600 hover:underline ml-2">Editar</a>
                                <form action="admin_tournaments_destroy.php" method="POST" class="inline" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este torneo?')">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($tournament->id); ?>">
                                    <button type="submit" class="text-red-600 hover:underline ml-2">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t bg-gray-50">
            <!-- Implementa la paginación aquí si es necesario -->
        </div>
    </div>
</body>
</html>