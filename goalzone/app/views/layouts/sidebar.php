<?php
    $rutaActual = explode('/', trim($_GET['url'] ?? 'dashboard', '/'))[0] ?: 'dashboard';
?>

<div class="topbar">
    <div class="title-business">
        <span><?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></span>
    </div>
    <div class="btn-menu">
        <button class="hamburger" aria-label="Abrir menú">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>
</div>

<div class="overlay"></div>

<aside class="sidebar">
    <div class="sidebar-logo">GoalZone &mdash; <?php echo htmlspecialchars($usuario['nombre_usuario'] ?? 'Usuario'); ?></div>
    <ul>
        <li>
            <a href="<?php echo BASE_URL; ?>/dashboard"
                class="<?php echo $rutaActual === 'dashboard' ? 'activo' : ''; ?>">
                <i class="fa-solid fa-house"></i>
                <span>Inicio</span>
            </a>
        </li>

        <li class="nav-dropdown <?php echo $rutaActual === 'empleados' ? 'abierto' : ''; ?>">
            <div class="nav-dropdown-toggle <?php echo $rutaActual === 'empleados' ? 'activo' : ''; ?>">
                <i class="fa-solid fa-chart-bar"></i>
                <span>Reportes</span>
                <i class="fa-solid fa-chevron-down dropdown-arrow"></i>
            </div>
            <ul class="nav-dropdown-menu">
                <li>
                    <a href="<?php echo BASE_URL; ?>/empleados#usuarios">
                        <i class="fa-solid fa-user-shield"></i>
                        <span>Usuarios</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/empleados#clientes">
                        <i class="fa-solid fa-users"></i>
                        <span>Clientes</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/empleados#canchas">
                        <i class="fa-solid fa-futbol"></i>
                        <span>Canchas</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL; ?>/empleados#reservas">
                        <i class="fa-solid fa-calendar-check"></i>
                        <span>Reservas</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-logout">
            <a href="<?php echo BASE_URL; ?>/logout" id="btn-logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Cerrar sesión</span>
            </a>
        </li>
    </ul>
</aside>
