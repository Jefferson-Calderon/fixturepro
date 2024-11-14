<?php
// resources/views/admin/events/index.php
$events = isset($events) ? $events : []; // Asegúrate de pasar el array de eventos al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind o Bootstrap -->
</head>
<body>
    <h1 class="mb-4">Eventos</h1>
    <a href="admin_events_create.php" class="btn btn-primary mb-3">Crear Nuevo Evento</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Torneo</th>
                <th>Fecha de Inicio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
                <tr>
                    <td><?php echo htmlspecialchars($event->id); ?></td>
                    <td><?php echo htmlspecialchars($event->name); ?></td>
                    <td><?php echo htmlspecialchars($event->tournament->name); ?></td>
                    <td><?php echo htmlspecialchars($event->start_time->format('d/m/Y H:i')); ?></td>
                    <td>
                        <a href="admin_events_show.php?id=<?php echo urlencode($event->id); ?>" class="btn btn-sm btn-info">Ver</a>
                        <a href="admin_events_edit.php?id=<?php echo urlencode($event->id); ?>" class="btn btn-sm btn-warning">Editar</a>
                        <form action="admin_events_destroy.php" method="POST" class="d-inline" onsubmit="return confirm('¿Estás seguro?')">
                            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrf_token); ?>"> <!-- Asumiendo que tienes un token CSRF -->
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($event->id); ?>">
                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Implementa la paginación aquí si es necesario -->
</body>
</html>