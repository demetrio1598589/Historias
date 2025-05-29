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
        <img src="img/his2.webp" alt="Los tres cerditos">
        <h1>Los Tres Cerditos</h1>
        <p>Había una vez tres cerditos hermanos que decidieron construir cada uno su propia casa, 
            pues sabían que en el bosque vivía un lobo feroz que quería comérselos. Cada cerdito eligió un material distinto según su manera de ser.</p>

        <p>El cerdito menor era juguetón y no quería trabajar mucho, así que construyó su casa rápidamente con paja. 
            “Así terminaré pronto y podré ir a jugar”, dijo feliz. El segundo cerdito, un poco más aplicado pero aún impaciente, 
            eligió la madera. Su casa era algo más fuerte, pero también se hizo rápido. “Esto es suficiente para estar seguro”, 
            pensó. El tercer cerdito, el mayor y más sensato, decidió construir su casa de ladrillos. Sabía que tomaría más tiempo y esfuerzo, 
            pero también que sería la más resistente.</p>

        <p>Pasaron los días y, como habían temido, el lobo feroz apareció. Llegó primero a la casa de paja y tocó la puerta: 
            “¡Cerdito, cerdito, déjame entrar!”. “¡No, no, no! ¡Ni aunque me soples y resoples no te dejaré entrar!”, 
            respondió el cerdito. Entonces el lobo sopló con fuerza: “¡Soplaré y soplaré y tu casa derribaré!”, 
            y así lo hizo. La casa voló en pedazos y el cerdito corrió asustado hacia la casa de su hermano de madera.</p>

        <p>El lobo los siguió hasta la segunda casa. De nuevo, llamó a la puerta. “¡Cerditos, cerditos, déjenme entrar!”. 
            “¡No, no, no! ¡Ni aunque nos soples y resoples te dejaremos entrar!”. El lobo enfurecido sopló y sopló, y finalmente la casa de madera también cayó. 
            Ambos cerditos huyeron corriendo a la casa de ladrillos de su hermano mayor.</p>

        <p>El lobo no se rindió y fue hasta la tercera casa. Golpeó la puerta y gritó: “¡Cerditos, cerditos, déjenme entrar!”. 
            Los tres respondieron: “¡No, no, no! ¡Ni aunque nos soples y resoples te dejaremos entrar!”. El lobo, furioso, 
            sopló con todas sus fuerzas, pero la casa ni se movió. Sopló una y otra vez, hasta quedarse sin aliento. 
            Entonces tuvo una nueva idea: treparía por el tejado y entraría por la chimenea.</p>

        <p>Pero el cerdito mayor ya había previsto esa posibilidad. Rápidamente encendió un gran fuego en la chimenea y colocó una olla con agua hirviendo. 
            Cuando el lobo descendió por el conducto, cayó directo en la olla caliente y salió huyendo aullando de dolor. 
            Nunca más volvió a molestar a los cerditos.</p>

        <p>Desde aquel día, los tres hermanos vivieron juntos en la casa de ladrillos, seguros y felices. Los dos cerditos menores aprendieron una valiosa lección: 
            hacer las cosas bien desde el principio, aunque tome más tiempo, es siempre la mejor decisión.</p>

        <p>Este cuento ha sido contado de generación en generación, enseñando a los niños la importancia del esfuerzo, 
            la responsabilidad y la planificación. También muestra que actuar con pereza o tomar el camino fácil puede traer problemas. 
            Y lo más importante: la unión entre hermanos y la sabiduría pueden vencer incluso a los mayores peligros.</p>

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