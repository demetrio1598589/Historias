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
        <img src="img/his6.jfif" alt="El Pabellón Rojo">
        <h1>El Pabellón Rojo</h1>
        <p>
            En los últimos años de la dinastía Qing, cuando el esplendor de las grandes familias comenzaba a desvanecerse, vivía la familia Jia, 
            una de las más poderosas y respetadas de la ciudad. Su mansión, majestuosa y ornamentada, albergaba generaciones de historia, honor y riqueza. 
            Pero tras los muros de piedra tallada y los jardines de loto, también se ocultaban celos, ambiciones rotas y amores imposibles. 
            Esta es la historia que narra *El Pabellón Rojo*, una de las más grandes obras literarias de la tradición china.
        </p>

        <p>
            En el corazón de esta historia se encuentra Jia Bao-yu, un joven noble, sensible y rebelde, nacido con una joya de jade en la boca, 
            lo que presagiaba un destino extraordinario. A pesar de las expectativas que pesaban sobre él como heredero de la familia, 
            Bao-yu despreciaba los caminos del poder y la burocracia, y prefería el arte, la poesía, los jardines y la compañía de las mujeres del pabellón interior. 
            Allí creció entre primas, sirvientas y tías, todas atrapadas por las mismas redes de deber, tradición y represión.
        </p>

        <p>
            Su prima Lin Dai-yu, una joven de salud frágil pero espíritu fuerte, compartía con él una conexión profunda, más allá de lo racional. 
            Ambos se entendían en silencio, como dos almas destinadas pero atrapadas en un mundo que no aceptaba su unión. Dai-yu, huérfana y vulnerable, 
            encontraba en la poesía y la música su refugio. Su relación con Bao-yu era un constante vaivén entre el deseo y la tristeza, 
            entre lo que podía ser y lo que jamás se permitiría.
        </p>

        <p>
            Mientras tanto, las intrigas políticas y familiares comenzaban a desgastar los cimientos de la familia Jia. Las finanzas se desmoronaban lentamente, 
            y los enfrentamientos por el poder interno eran cada vez más crueles. Bao-yu, ajeno al mundo de los negocios y del deber masculino, 
            se volvía una figura incómoda para la autoridad familiar. Se esperaba que se casara con Bao-chai, otra prima, inteligente, bella y obediente, 
            elogiada por todos como la esposa ideal. Aunque el corazón de Bao-yu pertenecía a Dai-yu, las obligaciones impuestas por la familia sellaron su destino.
        </p>

        <p>
            El día del matrimonio llegó, pero fue una trampa: Bao-yu creyó que se casaría con Dai-yu, y solo al final descubrió que la novia bajo el velo era Bao-chai. 
            Dai-yu, consumida por el dolor y la enfermedad, murió esa misma noche, mientras su amado era unido por la fuerza a otra mujer. 
            Fue el final simbólico del amor puro, sacrificado por las apariencias y las expectativas de una sociedad rígida.
        </p>

        <p>
            Tras la boda, Bao-yu perdió interés en la vida. Su alma parecía partir en busca de Dai-yu, y su joya mágica desapareció. 
            Algunos dicen que renunció al mundo y se convirtió en monje errante, 
            dejando atrás el esplendor de su familia para buscar el verdadero significado de la existencia. 
            Otros creen que fue un castigo divino por desafiar las normas del cielo. Lo cierto es que su desaparición marcó el fin de una era.
        </p>

        <p>
            “El Pabellón Rojo” es más que una historia de amor trágico; es un retrato de una civilización que se derrumba, de un sistema feudal que ahoga los sueños, 
            y de una juventud sensible que lucha por encontrar su lugar en un mundo que no la comprende. Con cientos de personajes, 
            escenas poéticas y profundas reflexiones filosóficas, esta obra maestra ofrece una mirada honesta a la vida, la muerte, 
            el destino y el valor de la emoción humana.
        </p>

        <p>
            Hoy, siglos después de su creación, la historia de Bao-yu y Dai-yu sigue resonando. Nos recuerda que, a veces, 
            el verdadero amor no es el que sobrevive, sino el que arde con tanta intensidad que deja huellas eternas en el alma.
        </p>

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