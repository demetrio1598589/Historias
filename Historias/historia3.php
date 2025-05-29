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
        <img src="img/his3.jpg" alt="El Zorro y el Sabueso">
        <h1>El Zorro y el Sabueso</h1>
        <p>Había una vez un pequeño zorro llamado Tod que quedó huérfano cuando era apenas un cachorro. 
            Una amable viuda lo encontró y lo crió como si fuera una mascota. Tod creció en un entorno seguro y rodeado de cariño humano. 
            En una granja cercana vivía un perro sabueso llamado Copper, también joven, juguetón y curioso. A pesar de sus diferencias, 
            los dos se conocieron en el campo y rápidamente se hicieron grandes amigos.</p>

        <p>Durante su infancia, Tod y Copper eran inseparables. Jugaban entre los árboles, corrían por los campos y compartían momentos de pura alegría. 
            No les importaba que uno fuera zorro y el otro sabueso, solo sabían que eran amigos. Su vínculo era sincero y desinteresado, 
            formado por la inocencia de la juventud.</p>

        <p>Pero el tiempo pasó, y con él vinieron los cambios. Copper fue llevado por su dueño a un largo viaje para ser entrenado como perro de caza. 
            Mientras tanto, Tod creció y volvió a la vida silvestre, aprendiendo a sobrevivir por su cuenta en el bosque. Cuando Copper regresó, 
            ya era un sabueso adulto, fuerte y obediente, con un nuevo deber: cazar zorros como Tod.</p>

        <p>El reencuentro fue doloroso. Tod aún recordaba a su amigo, pero Copper ahora tenía un trabajo, 
            y su dueño no toleraría la amistad entre un cazador y su presa. Aun así, en el fondo, Copper tampoco había olvidado a Tod. 
            Varias veces, cuando el zorro estuvo en peligro, Copper dudó, recordando los días en que compartían juegos bajo el sol.</p>

        <p>En una ocasión, Tod fue perseguido intensamente por el dueño de Copper. Cuando el hombre y su perro lo acorralaron, ocurrió algo inesperado: 
            Copper se interpuso entre el cazador y Tod, impidiendo que lo lastimara. Su gesto fue un acto de lealtad silenciosa, 
            una despedida entre amigos que sabían que su amistad, aunque imposible en el presente, había sido real y verdadera.</p>

        <p>Después de ese día, Tod siguió su vida en el bosque, y Copper continuó como perro de caza. Ya no volvieron a verse, 
            pero ambos guardaron en su corazón el recuerdo de una amistad que superó las barreras impuestas por la naturaleza, la sociedad y el deber.</p>

        <p>“El Zorro y el Sabueso” es una historia profunda sobre cómo la amistad puede surgir incluso entre los más diferentes, 
            pero también sobre cómo la vida a veces separa caminos. Nos recuerda que, aunque las circunstancias cambien, 
            el afecto verdadero deja huellas que nunca se borran. Es una historia que enseña sobre la lealtad, 
            la empatía y el valor de los vínculos que nacen del corazón.</p>

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