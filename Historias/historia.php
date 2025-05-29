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
            <img src="img/portada.png" alt="Historia seleccionada">
            <h1>Acerca de nosotros</h1>
            <p>
                En Historias web, creemos en el poder mágico de los cuentos para niños. 
                Nuestra misión es acercar a los más pequeños al maravilloso mundo de la imaginación, 
                los valores y la creatividad a través de historias divertidas, educativas y llenas de enseñanzas.
            </p>
            <p>
                Sabemos que los cuentos no solo entretienen, sino que también forman carácter, 
                despiertan la curiosidad y fomentan el amor por la lectura desde temprana edad. 
                Por eso, seleccionamos cuidadosamente cada relato para ofrecer una experiencia 
                única que acompañe a niños y familias en su crecimiento.
            </p>
            <p>Aquí encontrarás una variedad de cuentos clásicos y originales, 
                ilustrados y fáciles de entender, ideales para leer en casa, 
                en la escuela o antes de dormir. Queremos ser un espacio seguro, 
                creativo y alegre donde los niños puedan soñar, aprender y 
                descubrir valores como la amistad, la honestidad, el respeto y la valentía.
            </p>
            <p>
                Únete a nuestra comunidad y deja que la magia de los cuentos transforme cada día en una aventura inolvidable.
            </p>
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