<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE_BUSINESS; ?> - Reportes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include __DIR__ . '/../layouts/sidebar.php'; ?>

<main>
    <nav class="breadcrumb">
        <span>Dashboard</span>
        <i class="fa-solid fa-chevron-right"></i>
        <span id="breadcrumb-page">Reportes</span>
    </nav>

    <div class="main-content">

        <ul class="nav nav-tabs mb-4" id="tablasTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="usuarios-tab" data-bs-toggle="tab" data-bs-target="#usuarios" type="button" role="tab">
                    <i class="fa-solid fa-user-shield me-1"></i> Usuarios
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="clientes-tab" data-bs-toggle="tab" data-bs-target="#clientes" type="button" role="tab">
                    <i class="fa-solid fa-users me-1"></i> Clientes
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="canchas-tab" data-bs-toggle="tab" data-bs-target="#canchas" type="button" role="tab">
                    <i class="fa-solid fa-futbol me-1"></i> Canchas
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="reservas-tab" data-bs-toggle="tab" data-bs-target="#reservas" type="button" role="tab">
                    <i class="fa-solid fa-calendar-check me-1"></i> Reservas
                </button>
            </li>
        </ul>

        <div class="tab-content" id="tablasTabsContent">

            <!-- USUARIOS -->
            <div class="tab-pane fade show active" id="usuarios" role="tabpanel">
                <div class="table-responsive">
                    <?php if (empty($usuarios)): ?>
                        <p>No hay usuarios registrados.</p>
                    <?php else: ?>
                        <table class="table table-bordered text-center align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre de usuario</th>
                                    <th>Rol</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($usuarios as $u): ?>
                                    <tr>
                                        <td><?php echo $u['id_usuario']; ?></td>
                                        <td><?php echo htmlspecialchars($u['nombre_usuario']); ?></td>
                                        <td>
                                            <?php if ($u['roles'] === 'admin'): ?>
                                                <span class="badge bg-danger">Admin</span>
                                            <?php else: ?>
                                                <span class="badge bg-secondary">Usuario</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>

            <!-- CLIENTES -->
            <div class="tab-pane fade" id="clientes" role="tabpanel">
                <div class="table-responsive">
                    <?php if (empty($clientes)): ?>
                        <p>No hay clientes registrados.</p>
                    <?php else: ?>
                        <table class="table table-bordered text-center align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Teléfono</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($clientes as $c): ?>
                                    <tr>
                                        <td><?php echo $c['id']; ?></td>
                                        <td><?php echo htmlspecialchars($c['nombre']); ?></td>
                                        <td><?php echo htmlspecialchars($c['telefono']); ?></td>
                                        <td><?php echo htmlspecialchars($c['email']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>

            <!-- CANCHAS -->
            <div class="tab-pane fade" id="canchas" role="tabpanel">
                <div class="table-responsive">
                    <?php if (empty($canchas)): ?>
                        <p>No hay canchas registradas.</p>
                    <?php else: ?>
                        <table class="table table-bordered text-center align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Precio/Hora</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($canchas as $c): ?>
                                    <tr>
                                        <td><?php echo $c['id']; ?></td>
                                        <td><?php echo htmlspecialchars($c['nombre']); ?></td>
                                        <td>S/ <?php echo number_format($c['precio_hora'], 2); ?></td>
                                        <td>
                                            <?php if ($c['estado'] === 'disponible'): ?>
                                                <span class="badge bg-success">Disponible</span>
                                            <?php else: ?>
                                                <span class="badge bg-warning text-dark">Mantenimiento</span>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>

            <!-- RESERVAS -->
            <div class="tab-pane fade" id="reservas" role="tabpanel">
                <div class="table-responsive">
                    <?php if (empty($reservas)): ?>
                        <p>No hay reservas registradas.</p>
                    <?php else: ?>
                        <table class="table table-bordered text-center align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Cancha</th>
                                    <th>Cliente</th>
                                    <th>Fecha y Hora</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($reservas as $r): ?>
                                    <tr>
                                        <td><?php echo $r['id']; ?></td>
                                        <td><?php echo htmlspecialchars($r['cancha_nombre']); ?></td>
                                        <td><?php echo htmlspecialchars($r['cliente_nombre']); ?></td>
                                        <td><?php echo htmlspecialchars($r['fecha_hora_inicio']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</main>

<script src="<?php echo BASE_URL; ?>/public/js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
