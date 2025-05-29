<?php require_once 'check_session.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Individual</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
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

    <main id="historia-individual">
        <section class="historia-completa">
            <img src="img/his2.webp" alt="Historia seleccionada">
            <h1>Los 3 cerditos</h1>
            <p>Este cuento relata la vida de tres cerditos hermanos que 
                deciden construir sus casas para protegerse del lobo feroz que amenaza con comérselos. 
                El primer cerdito construye su casa de paja porque quiere terminar rápido y jugar, 
                el segundo la hace de madera, y el tercero, más prudente, de ladrillos. </p>
            <p>
                Cuando el lobo llega, sopla y destruye las casas de paja y madera, 
                pero no logra derribar la de ladrillos. Los dos primeros cerditos 
                huyen a la casa del tercero y juntos logran salvarse. 
                El cuento destaca valores como la importancia del esfuerzo, la planificación, la perseverancia y la responsabilidad. 
                También muestra que la pereza y la falta de previsión pueden traer consecuencias negativas.
            </p>
            <p>El cuento ha sido adaptado en numerosas ocasiones,
                 convirtiéndose en un clásico de la literatura infantil. 
                 Su mensaje perdura a través de generaciones, recordando a los niños 
                 la importancia de seguir las instrucciones de sus padres y ser cautelosos 
                 con quienes no conocen.</p>
            <div class="botones-navegacion">
                <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
                    <i class="fas fa-arrow-up"></i> Arriba
                </button>
                <button onclick="window.location.href='<?php echo HOME_URL; ?>';">
                    <i class="fas fa-home"></i> Portada
                </button>
            </div>
        </section>
    </main>

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