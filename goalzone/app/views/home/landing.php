<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoalZone Deportivo</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/public/css/landing.css">
    <style>
        /* Imagen deportiva en lugar del video */
        .hero-bg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 1;
            background-image: url('https://images.unsplash.com/photo-1546519638-68e109498ffc?w=1600&q=80');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
    <div id="fadeOverlay"></div>

    <?php include __DIR__ . '/../layouts/header.php'; ?>

    <!-- Hero con imagen deportiva de fondo -->
    <section class="stage">

        <div class="hero-bg"></div>

        <!-- Navbar -->
        <nav class="navbar" id="navbar">
            <a class="brand" href="#">GoalZone</a>
            <button class="menu-btn" id="menuBtn" aria-label="Abrir menú">
                <i class="bi bi-list"></i>
            </button>
        </nav>

        <!-- Contenido hero -->
        <div class="hero-content">
            <button class="cta-btn demo-trigger" id="verDemo">Ver demo</button>
        </div>

        <!-- Scroll indicator -->
        <div class="scroll-indicator" id="scrollIndicator">
            <span>Scroll</span>
            <div class="scroll-line"></div>
        </div>

    </section>

    <!-- Sección proyectos -->
    <section class="projects-section">

        <div class="project-card">
            <div class="project-img-wrap">
                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?w=800&q=80" alt="Gestión de empleados" class="project-img">
            </div>
            <h3 class="project-title">Gestión de Empleados</h3>
            <p class="project-desc">Consulta el listado completo del personal de GoalZone Deportivo: datos personales, cargo y fecha de registro, todo en un solo lugar.</p>
            <a href="<?php echo BASE_URL; ?>/login" class="project-link">Ingresar al sistema <i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="project-card">
            <div class="project-img-wrap">
                <img src="https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=800&q=80" alt="Panel de Control" class="project-img project-img--admin">
            </div>
            <h3 class="project-title">Panel de Control</h3>
            <p class="project-desc">Accede al dashboard administrativo para gestionar la información del complejo deportivo de forma rápida y segura.</p>
            <a href="<?php echo BASE_URL; ?>/login" class="project-link">Acceder <i class="bi bi-arrow-right"></i></a>
        </div>

    </section>

    <!-- Footer -->
    <?php include __DIR__ . '/../layouts/footer.php'; ?>
    <script src="<?php echo BASE_URL; ?>/public/js/landing.js"></script>
</body>
</html>
