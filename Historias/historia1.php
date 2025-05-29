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
        <img src="img/his1.jpg" alt="Caperucita Roja">
        <h1>Caperucita Roja</h1>
        <p>Había una vez una dulce niña a la que todos querían mucho, especialmente su abuela, 
            quien le regaló una capa con capucha de color rojo. Desde entonces, todos la llamaban Caperucita Roja. 
            Un día, su madre le pidió que llevara una cesta con pan, pastel y mantequilla a su abuela enferma, que vivía al otro lado del bosque.</p>

        <p>Antes de salir, su madre le dio una advertencia muy clara: “No hables con desconocidos 
            y no te apartes del camino”. Caperucita Roja asintió con la cabeza y emprendió su camino alegremente, 
            sin saber que alguien más la observaba desde entre los árboles: un lobo hambriento y astuto.</p>

        <p>El lobo se le acercó con voz suave y amable. “¿A dónde vas, niña?”, preguntó. Caperucita, sin sospechar del peligro, 
            le respondió inocentemente: “Voy a casa de mi abuelita a llevarle comida. Vive en la cabaña al otro lado del bosque”.</p>

        <p>El lobo, lleno de malicia, ideó un plan. Se despidió de la niña y corrió por el camino más corto hacia la casa de la abuela. 
            Al llegar, tocó la puerta. La abuela, al ver al lobo, no tuvo tiempo de escapar. El lobo la devoró de un bocado, 
            se disfrazó con su ropa y se metió en la cama para esperar a Caperucita.</p>

        <p>Minutos después, Caperucita Roja llegó a la cabaña. Extrañada por la voz ronca de su “abuelita” y su extraña apariencia, 
            empezó a hacer preguntas: “Abuelita, qué ojos tan grandes tienes”, dijo. “Son para verte mejor”, respondió el lobo. 
            “Y qué orejas tan grandes tienes”, insistió. “Son para oírte mejor”. “¡Y qué dientes tan grandes tienes!”. 
            “¡Son para comerte mejor!”, gritó el lobo y saltó de la cama para devorarla también.</p>

        <p>Por suerte, un cazador que pasaba por allí escuchó los gritos. Entró rápidamente a la cabaña, vio al lobo dormido con la panza llena y, 
            con su cuchillo, le abrió el vientre. De allí salieron sanas y salvas la abuelita y Caperucita Roja. 
            Para que el lobo no volviera a hacer daño, llenaron su estómago de piedras, y cuando despertó, cayó muerto por el peso.</p>

        <p>Desde aquel día, Caperucita Roja nunca volvió a hablar con extraños ni a desobedecer a su madre. 
            Aprendió que ser amable está bien, pero siempre con precaución, y que el mundo puede esconder peligros donde menos se esperan.</p>

        <p>Así termina esta historia que ha pasado de generación en generación, enseñando a los niños a ser prudentes, 
            obedientes y a no dejarse engañar por las apariencias.</p>

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