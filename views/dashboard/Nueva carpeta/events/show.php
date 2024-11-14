<?php
// resources/views/admin/events/show.php
$event = isset($event) ? $event : null; // Asegúrate de pasar el objeto $event al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Evento</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind o Bootstrap -->
</head>
<body>
    <h1 class="mb-4">Detalles del Evento</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($event->name); ?></h5>
            <p class="card-text"><strong>Descripción:</strong> <?php echo htmlspecialchars($event->description ?? 'N/A'); ?></p>
            <p class="card-text"><strong>Torneo:</strong> <?php echo htmlspecialchars($event->tournament->name); ?></p>
            <p class="card-text"><strong>Fecha de Inicio:</strong> <?php echo htmlspecialchars($event->start_time->format('d/m/Y H:i')); ?></p>
            <p class="card-text"><strong>Fecha de Fin:</strong> <?php echo htmlspecialchars($event->end_time->format('d/m/Y H:i')); ?></p>
            <p class="card-text"><strong>Ubicación:</strong> <?php echo htmlspecialchars($event->location); ?></p>
            <h6 class="mt-4">Atletas Participantes:</h6>
            <ul>
                <?php if (!empty($event->athletes)): ?>
                    <?php foreach ($event->athletes as $athlete): ?>
                        <li><?php echo htmlspecialchars($athlete->user->name); ?> (<?php echo htmlspecialchars($athlete->team->name); ?>)</li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>No hay atletas registrados para este evento.</li>
                <?php endif; ?>
            </ul>
            <a href="admin_events_edit.php?id=<?php echo urlencode($event->id); ?>" class="btn btn-warning">Editar</a>
            <a href="admin_events_index.php" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</body>
</html>