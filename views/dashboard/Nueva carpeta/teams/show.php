<?php
// resources/views/admin/teams/show.php
$team = isset($team) ? $team : null; // Asegúrate de pasar el objeto $team al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Equipo</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind o Bootstrap -->
</head>
<body>
    <h1 class="mb-4">Detalles del Equipo</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($team->name); ?></h5>
            <?php if ($team->logo): ?>
                <img src="<?php echo htmlspecialchars('storage/' . $team->logo); ?>" alt="Team Logo" class="mb-3" style="max-width: 200px;">
            <?php endif; ?>
            <p class="card-text"><strong>Descripción:</strong> <?php echo htmlspecialchars($team->description ?? 'N/A'); ?></p>
            <p class="card-text"><strong>Capitán:</strong> <?php echo htmlspecialchars($team->captain->name); ?></p>
            <h6 class="mt-4">Atletas:</h6>
            <ul>
                <?php if (!empty($team->athletes)): ?>
                    <?php foreach ($team->athletes as $athlete): ?>
                        <li><?php echo htmlspecialchars($athlete->user->name); ?></li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>No hay atletas registrados en este equipo.</li>
                <?php endif; ?>
            </ul>
            <a href="admin_teams_edit.php?id=<?php echo urlencode($team->id); ?>" class="btn btn-warning">Editar</a>
            <a href="admin_teams_index.php" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</body>
</html>