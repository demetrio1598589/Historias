<?php require_once 'check_session.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Historias</title>
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

    <main id="lista">
        <section class="portada-sencilla">
            <img src="img/banner.jpg" alt="Portada lista">
            <h1>Todas las Historias</h1>
            <p>Explora nuestra colección completa.</p>
        </section>

        <section class="lista-historias">
            <div class="item-lista">
                <img src="img/his1.jpg" alt="Historia 1">
                <div class="info-lista">
                    <h3>Caperucita Roja</h3>
                    <p>Una aventura emocionante en el bosque.</p>
                    <a href="historia1.php" class="btn-ver-mas">Ver más</a>
                </div>
            </div>
            <div class="item-lista">
                <img src="img/his2.webp" alt="Historia 1">
                <div class="info-lista">
                    <h3>Los tres cerditos</h3>
                    <p>3 cerditos son atacados por un lobo,</p>
                    <a href="historia2.php" class="btn-ver-mas">Ver más</a>
                </div>
            </div>
            <div class="item-lista">
                <img src="img/his3.jpg" alt="Historia 1">
                <div class="info-lista">
                    <h3>El zorro y el sabueso</h3>
                    <p>Una aventura entre un zorro y un perro pastor.</p>
                    <a href="historia3.php" class="btn-ver-mas">Ver más</a>
                </div>
            </div>
            <div class="item-lista">
                <img src="img/his4.webp" alt="Historia 1">
                <div class="info-lista">
                    <h3>El zorro y el condor</h3>
                    <p>Una aventura de los andes.</p>
                    <a href="historia4.php" class="btn-ver-mas">Ver más</a>
                </div>
            </div>
            <div class="item-lista">
                <img src="img/his5.jfif" alt="Historia 1">
                <div class="info-lista">
                    <h3>El castillo ambulante</h3>
                    <p>La aventura gira alrededor de un castillo andante.</p>
                    <a href="historia5.php" class="btn-ver-mas">Ver más</a>
                </div>
            </div>
            <div class="item-lista">
                <img src="img/his6.jfif" alt="Historia 1">
                <div class="info-lista">
                    <h3>El pabello rojo</h3>
                    <p>Historias particulares dentro de una familia adinerada.</p>
                    <a href="historia6.php" class="btn-ver-mas">Ver más</a>
                </div>
            </div>
            <div class="item-lista">
                <img src="img/capibara.png" alt="Historia 2">
                <div class="info-lista">
                    <h3>Encuentro con Capibara</h3>
                    <p>Visitamos a nuestro amigos mas populares de la red.</p>
                    <a href="video1.php" class="btn-ver-mas">Ver más</a>
                </div>
            </div>
            <div class="item-lista">
                <img src="img/rwby.jpg" alt="Historia 3">
                <div class="info-lista">
                    <h3>RWBY</h3>
                    <p>Una historia de aventura de nuestra linda heroina.</p>
                    <a href="video2.php" class="btn-ver-mas">Ver más</a>
                </div>
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