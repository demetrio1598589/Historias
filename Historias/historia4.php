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
        <img src="img/his4.webp" alt="El zorro y el cóndor">
        <h1>El Zorro y el Cóndor</h1>
        <p>En los altos Andes, donde las montañas tocan el cielo y los vientos soplan fuertes, vivía un zorro astuto y curioso. 
            Siempre caminaba con la nariz al aire, buscando algo que comer o algún animal del que aprovecharse. 
            Un día, observó en lo alto de una roca a un majestuoso cóndor, que volaba libre por los cielos, bajando solo para buscar alimento.</p>

        <p>El zorro, viendo lo bien que vivía el cóndor, pensó en un plan para engañarlo. Se acercó amistosamente y le dijo: 
            “Hermano cóndor, ¡qué suerte tienes de volar tan alto y ver el mundo desde arriba! 
            ¿No te gustaría compartir conmigo un poco de tu comida? Yo, que solo ando a ras de suelo, no tengo tantas oportunidades como tú”.</p>

        <p>El cóndor, aunque desconfiado, aceptó invitarlo a compartir su próxima presa. Voló hacia una montaña lejana y, 
            usando su aguda vista, encontró un animal caído. Bajó, lo recogió con sus poderosas garras y luego regresó al acantilado donde lo esperaba el zorro. 
            “Aquí tienes, comparte conmigo”, le dijo. Pero el zorro, en lugar de agradecer, devoró más de la mitad sin dejar casi nada para el cóndor.</p>

        <p>El cóndor, sabiendo que no podía confiar del todo en su nuevo “amigo”, decidió ponerlo a prueba. En la siguiente ocasión, 
            le propuso al zorro volar con él para ver el mundo desde las alturas. “Súbete a mi lomo”, le dijo. El zorro, emocionado, aceptó sin pensarlo. 
            “¡Por fin volaré como tú!”, gritó mientras se aferraba con fuerza a las plumas del ave.</p>

        <p>El cóndor ascendió con fuerza, cruzando nubes y nevados, mientras el zorro, abajo, miraba cada vez más asustado. 
            “¡Bájame, esto es muy alto!”, gritó. Pero el cóndor no respondía, solo seguía volando. Cuando ya estaban muy arriba, 
            el cóndor dio una vuelta y dejó caer al zorro en un peñasco, no tan alto como para matarlo, pero lo suficiente como para darle un buen susto. 
            “Así aprendes a no abusar de los demás”, le dijo desde el aire.</p>

        <p>Magullado y avergonzado, el zorro regresó al valle. Desde ese día, cada vez que veía una sombra grande sobrevolar el cielo, 
            se escondía rápidamente entre las rocas. Comprendió que no debía subestimar la sabiduría de otros ni aprovecharse de quienes le tendían la mano.</p>

        <p>“El Zorro y el Cóndor” es una historia que ha sido contada por generaciones en los pueblos andinos. 
            Nos recuerda que la astucia no debe usarse para dañar, que la confianza es un tesoro y que cada ser tiene sus propias habilidades 
            y formas de vida que merecen respeto. El zorro aprendió, quizás de la forma más dura, que no siempre se puede ser el más listo.</p>

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