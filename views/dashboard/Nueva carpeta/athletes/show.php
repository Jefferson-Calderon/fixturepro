<?php
// resources/views/admin/athletes/show.php
$athlete = isset($athlete) ? $athlete : null; // Asegúrate de pasar el objeto $athlete al incluir este archivo
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Atleta</title>
    <link rel="stylesheet" href="resources/css/app.css"> <!-- Llama al archivo CSS de Tailwind o Bootstrap -->
</head>
<body>
    <h1 class="mb-4">Detalles del Atleta</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo htmlspecialchars($athlete->user->name); ?></h5>
            <p class="card-text"><strong>Equipo:</strong> <?php echo htmlspecialchars($athlete->team->name); ?></p>
            <p class="card-text"><strong>Fecha de Nacimiento:</strong> <?php echo htmlspecialchars($athlete->date_of_birth->format('d/m/Y')); ?></p>
            <p class="card-text"><strong>Género:</strong> <?php echo htmlspecialchars(ucfirst($athlete->gender)); ?></p>
            <p class="card-text"><strong>Altura:</strong> <?php echo htmlspecialchars($athlete->height ?? 'N/A'); ?> cm</p>
            <p class="card-text"><strong>Peso:</strong> <?php echo htmlspecialchars($athlete->weight ?? 'N/A'); ?> kg</p>
            <a href="admin_athletes_edit.php?id=<?php echo urlencode($athlete->id); ?>" class="btn btn-warning">Editar</a>
            <a href="admin_athletes_index.php" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</body>
</html>