<?php require_once 'check_session.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
        <meta http-equiv="keyword" content="Historias, Lectura, Entretenimiento">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Esta en una pagina donde encontraras historias cortas para leer y disfrutar.">
        <meta name="keywords" content="Historias, Lectura, Entretenimiento">
        <meta name="DQC Kalel Corp" content="Mis historias favoritas">
    <title>Historias Perdidas</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header común a todas las páginas -->
    <header>
        <div class="container">
            <nav class="navbar">
                <ul class="nav-left">
                    <li><a href="<?php echo HOME_URL; ?>"><i class="fas fa-home"></i> Inicio</a></li>
                    <li><a href="<?php echo HISTORIAS_URL; ?>lista.php"><i class="fas fa-list"></i> Lista</a></li>
                    <li><a href="<?php echo HISTORIAS_URL; ?>nosotros.php"><i class="fas fa-book-open"></i> Acerca de nosotros</a></li>
                </ul>
                <?php if(isset($_SESSION['usuario'])): ?>
                    <ul class="nav-right">
                        <li>
                            <span><i class="fas fa-user"></i> 
                                <?php echo htmlspecialchars($_SESSION['nombre']); ?>
                                <?php if (!empty($_SESSION['apellidos'])): ?>
                                    <?php echo ' ' . htmlspecialchars($_SESSION['apellidos']); ?>
                                <?php endif; ?>
                            </span>
                            <a href="<?php echo LOGOUT_URL; ?>" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <!-- Contenido de la página de Inicio -->
    <main id="inicio">
        <section class="portada">
            <img src="img/Portada1.jpg" alt="Portada principal">
            <h1>Bienvenido a Historias Web</h1>
            <p>Descubre las mejores historias cortas para leer en tu tiempo libre.</p>
        </section>

        <section class="historias-grid">
            <div class="historia">
                <img src="img/his1.jpg" alt="Historia 1">
                <h3>Caperucita roja</h3>
                <p>Una aventura emocionante en el bosque.</p>
                <a href="historia1.php">Leer más</a>
            </div>
            <div class="historia">
                <img src="img/his2.webp" alt="Historia 2">
                <h3>los 3 cerditos</h3>
                <p>Una aventura de  cerditos.</p>
                <a href="historia2.php">Leer más</a>
            </div>
            <div class="historia">
                <img src="img/his3.jpg" alt="Historia 3">
                <h3>El zorro y el sabueso</h3>
                <p>Una historia fuera de lugar.</p>
                <a href="historia3.php">Leer más</a>
            </div>
            <div class="historia">
                <img src="img/his4.webp" alt="Historia 4">
                <h3>El zorro y el condor.</h3>
                <p>Un viaje al espacio lleno de peligros.</p>
                <a href="historia4.php">Leer más</a>
            </div>
            <div class="historia">
                <img src="img/his5.jfif" alt="Historia 5">
                <h3>El casillo ambulante</h3>
                <p>Una aventura alrededor de un castilllo.</p>
                <a href="historia5.php">Leer más</a>
            </div>
            <div class="historia">
                <img src="img/his6.jfif" alt="Historia 6">
                <h3>Historia del pabellon rojo</h3>
                <p>Un secreto familiar oculto por años.</p>
                <a href="historia6.php">Leer más</a>
            </div>
        </section>

        <section class="formulario">
            <h2>Suscríbete para más historias</h2>
            <form>
                <input type="text" placeholder="Nombre" required>
                <input type="email" placeholder="Correo electrónico" required>
                <input type="Mensaje" placeholder="Mensaje corto" required>
      <!-- <textarea name="mensaje" placeholder="Mensaje"></textarea> -->
                <button type="submit">Suscribirse</button>
            </form>
        </section>
    </main>

    <!-- Footer común a todas las páginas -->
    <footer>
        <p>&copy; 2025 Historias Web. Todos los derechos reservados.</p>
        <p>Demetrio Quispe Chavez ©</p>
        <div class="redes-sociales">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>
</body>
</html>