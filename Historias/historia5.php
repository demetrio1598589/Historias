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
        <img src="img/his5.jfif" alt="El Castillo Ambulante">
        <h1>El Castillo Ambulante</h1>
        <p>En un mundo donde la magia y la tecnología conviven, vivía una joven modista llamada Sophie. 
            Ella llevaba una vida sencilla y sin muchas expectativas, resignada a trabajar en la sombrerería familiar mientras sus hermanas exploraban el mundo. 
            Pero todo cambió cuando un día, al regresar del trabajo, se encontró con un misterioso hombre de cabello dorado y porte elegante: 
            era Howl, un mago tan poderoso como excéntrico.</p>

        <p>Poco después de aquel encuentro, Sophie fue visitada por la Bruja del Páramo, quien, celosa de la conexión entre ella y Howl, 
            la maldijo sin piedad. De un momento a otro, Sophie se vio transformada en una anciana de noventa años. Asustada y avergonzada, 
            decidió dejar su hogar y buscar una forma de romper el hechizo.</p>

        <p>Vagando por las colinas, Sophie encontró el castillo ambulante de Howl, una enorme estructura mágica que caminaba sobre patas mecánicas 
            y se deslizaba entre valles y montañas. Sin tener adónde más ir, se presentó como una anciana y pidió quedarse como ama de llaves. 
            Howl, curioso y distraído, aceptó sin reconocerla.</p>

        <p>Dentro del castillo, Sophie conoció a Calcifer, un demonio de fuego que alimentaba la magia del castillo y estaba ligado por un contrato con Howl. 
            También conoció a Markl, el joven aprendiz del mago. Poco a poco, Sophie se integró a ese mundo extraño y caótico, limpiando, 
            organizando y aprendiendo más sobre los secretos que cada rincón del castillo guardaba.</p>

        <p>Howl, por su parte, era perseguido por brujas, reyes y responsabilidades que evitaba constantemente. 
            Bajo su fachada vanidosa y excéntrica, Sophie descubrió un corazón vulnerable, lleno de miedo a amar y ser amado. A medida que se conocían mejor, 
            una conexión profunda crecía entre ambos, aunque ninguno podía admitirlo fácilmente.</p>

        <p>Mientras tanto, una guerra se extendía por el reino. Los magos eran obligados a servir como armas, y Howl, aunque poderoso, 
            se rehusaba a convertirse en un monstruo más de la guerra. Sophie, enfrentada a su propia transformación y a las amenazas del mundo, 
            se volvió más fuerte, más decidida. Ya no era solo una joven tímida o una anciana frágil: 
            era una mujer valiente que aprendía a amarse a sí misma y a luchar por quienes amaba.</p>

        <p>La clave para romper la maldición estaba en el vínculo entre Howl y Calcifer, y en la capacidad de Sophie de ver más allá de las apariencias. 
            Cuando ella entendió el origen del dolor de Howl, y cuando él se atrevió a amar sin miedo, la magia oscura que los rodeaba comenzó a desvanecerse. 
            Sophie recuperó su juventud, y Howl recuperó su corazón. Juntos, decidieron dejar atrás las guerras, abrir el castillo a la luz, 
            y empezar una nueva vida, no solo como mago y aprendiz, sino como compañeros.</p>

        <p>“El Castillo Ambulante” es una historia que va más allá de la magia y la aventura. Es una lección sobre el poder del amor, 
            el crecimiento personal, y la aceptación de uno mismo y de los demás. 
            Nos enseña que las verdaderas transformaciones ocurren cuando enfrentamos nuestros miedos, y que a veces, la mayor magia está en atreverse a cambiar.</p>

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