<?php
// resources/views/admin/athletes/index.php
$athletes = isset($athletes) ? $athletes : []; // Asegúrate de pasar el array de atletas al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atletas</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind -->
</head>
<body>
    <h2 class="my-6 text-2xl font-semibold text-gray-700">
        Atletas
    </h2>

    <div class="mb-4 flex justify-between items-center">
        <a href="admin_athletes_create.php" class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            Crear Nuevo Atleta
        </a>
    </div>

    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b bg-gray-50">
                        <th class="px-4 py-3">ID</th>
                        <th class="px-4 py-3">Nombre</th>
                        <th class="px-4 py-3">Equipo</th>
                        <th class="px-4 py-3">Género</th>
                        <th class="px-4 py-3">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y">
                    <?php foreach ($athletes as $athlete): ?>
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 text-sm"><?php echo htmlspecialchars($athlete->id); ?></td>
                            <td class="px-4 py-3 text-sm"><?php echo htmlspecialchars($athlete->user->name); ?></td>
                            <td class="px-4 py-3 text-sm"><?php echo htmlspecialchars($athlete->team->name); ?></td>
                            <td class="px-4 py-3 text-sm"><?php echo htmlspecialchars(ucfirst($athlete->gender)); ?></td>
                            <td class="px-4 py-3 text-sm">
                                <a href="admin_athletes_show.php?id=<?php echo urlencode($athlete->id); ?>" class="text-purple-600 hover:underline">Ver</a>
                                <a href="admin_athletes_edit.php?id=<?php echo urlencode($athlete->id); ?>" class="text-purple-600 hover:underline ml-2">Editar</a>
                                <form action="admin_athletes_destroy.php" method="POST" class="inline" onsubmit="return confirm('¿Estás seguro?')">
                                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>"> <!-- Asumiendo que tienes un token CSRF -->
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($athlete->id); ?>">
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