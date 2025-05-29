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
            <img src="img/his1.jpg" alt="Historia seleccionada">
            <h1>Caperucita Roja</h1>
            <p>Caperucita Roja es un cuento tradicional que narra la historia de una niña
                 que lleva una capa roja y recibe la misión de llevar comida a su abuela 
                 enferma que vive al otro lado del bosque. Su madre le advierte que no 
                 hable con extraños ni se desvíe del camino. Sin embargo, en el bosque, 
                 Caperucita se encuentra con un lobo astuto que, haciéndose amigo, 
                 la engaña para que le diga dónde está la casa de su abuela.</p>
            <p>El lobo llega primero, devora a la abuela y se disfraza de ella
                 para engañar a la niña. Al llegar, Caperucita se da cuenta del engaño, 
                 pero ya es casi tarde. Según la versión, un leñador o cazador aparece 
                  rescata a ambas, matando al lobo. La historia enseña la importancia de la obediencia, 
                  la precaución con los extraños y el peligro de la ingenuidad.</p>
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