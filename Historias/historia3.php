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
            <img src="img/his3.jpg" alt="Historia seleccionada">
            <h1>El zorro y el sabueso</h1>
            <p>"El Zorro y el Sabueso" es una historia emotiva sobre la amistad entre Tod, 
                un zorro criado por humanos, y Copper, un perro sabueso entrenado para cazar zorros. 
                Cuando eran cachorros, fueron inseparables y compartieron juegos y aventuras. 
                Sin embargo, al crecer, sus naturalezas opuestas y sus instintos los separan: 
                Copper debe cazar a Tod porque es su deber, y Tod debe huir para sobrevivir. 
                La historia explora temas como la amistad, la lealtad, 
                el destino y el conflicto entre la naturaleza y la crianza. 
                Muestra cómo las circunstancias y los roles sociales pueden 
                desafiar incluso las relaciones más fuertes.</p>
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