<?php
$currentPage = "home";

include_once('../helpers/head.php')
?>

<!DOCTYPE html>
<html lang="es">
    <?php renderHeader('Home | Atepsa') ?>
<body>
    
    <?php require_once('../helpers/navbar.php') ?>

    <section class="banner row gap-0">

        <section class="banner__lateral">
            <nav class="banner__nav">
                <a href="" class="banner__nav__item banner__nav__item--active">Home/</a>
                <a href="" class="banner__nav__item">Nosotros</a>
            </nav>
            <div class="banner__redes">
                <a href="" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </section>

        <section class="carrusel carrusel--1 col-md-6">

            <div class="carrusel__textos">
                <p class="carrusel__texto">Contraincendios</p>
            </div>

            <div id="carouselBanner1" class="carousel slide" data-bs-ride=carousel>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/images/main/incendio-1.png" alt="Imagen de prueba">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/images/main/incendio-2.png" alt="Imagen de prueba">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/images/main/incendio-3.png" alt="Imagen de prueba">
                    </div>
                </div>
            </div>
            
        </section>
        
        <section class="carrusel carrusel--2 col-md-6">

            <div class="carrusel__textos">
                <p class="carrusel__texto">Aeropuertuario</p>
            </div>

            <div id="carouselBanner1" class="carousel slide" data-bs-ride=carousel>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../assets/images/main/aero-1.png" alt="Imagen de prueba">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/images/main/aero-2.png" alt="Imagen de prueba">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../assets/images/main/aero-3.png" alt="Imagen de prueba">
                    </div>
                </div>
            </div>

        </section>

    </section>


    <main class="contenedor lineabase">

        <div class="linea linea--lideres1"></div>
    
        <h1 class="aniostitulo">
            Más de <span class="aniostitulo__number">20</span> <br> 
            Años como <br>
            <span class="aniostitulo__lideres">Líderes en México</span>
            <p class="aniostitulo__texto">En venta de equipo <span class="bold">Contraincendio, Rescate y Aeropuertuario</span></p>
        </h1>
    
    </main>


    <section class="lider">

        <section class="lider__contenedor">
            <img class="lider__image" src="../assets/images/main/camion-lideer.png" alt="">
    
            <article class="lider__article">
                <p class="lider__pregunta">¿Quienes somos?</p>
                <h2 class="lider__titulo">Empresa líder <br> en México</h2>
                <h3 class="lider__subtitulo">Autobuses especializados</h3>
                <p class="lider__texto">Con más de 20 años de experiencia en el mercado. ATEPSA es líder nacional en ventas, distribución y mantenimiento de equipos especializados contra incendio, rescate y aeropuertuario, siendo los más importantes distribuidores en el país dee las marcas más reconocidas a nivel mundial.</p>
            </article>
        </section>


    </section>


    <section class="representante">

        <!-- Aqui va la imagen -->
        <img class="representante__camion" src="../assets/images/main/camion-representante.png" alt="">

        <div class="lineabase">
            <div class="linea linea--1"></div>
            <div class="linea linea--2"></div>
        </div>


        <article class="representante__article">
            

            <h2 class="representante__titulo">Somos el <span>representante exclusivo</span> de las marcas más importanes en la industria.</h2>

            <h3 class="representante__subtitulo">Ofrecemos</h3>
            <ul class="representante__lista">
                <li class="representante__lista__item">
                    <img class="representante__vineta" src="../assets/images/main/check.png" alt="Viñeta de lista">
                    Equipo de avalado y certificado de la más alta calidad
                </li>
                <li class="representante__lista__item">
                    <img class="representante__vineta" src="../assets/images/main/check.png" alt="Viñeta de lista">
                    Asesoría y soporte
                </li>
                <li class="representante__lista__item">
                    <img class="representante__vineta" src="../assets/images/main/check.png" alt="Viñeta de lista">
                    Mantenimiento y capacitación
                </li>

            </ul>


            <footer class="representante__footer">

                <p class="representante__footer__subtitulo">Solo las mejores marcas</p>
                <h2 class="representante__footer__titulo">Nuestros Aliados</h2>

                <div class="linea"></div>
            
            </footer>

            
        </article>
        
    </section>

    <section class="aliados">

        <div class="aliados__contenedor">

            <figure class="aliados__item">
                <img class="aliados__logo" src="../assets/images/main/aliado-1.png" alt="">
            </figure>

            <figure class="aliados__item">
                <img class="aliados__logo" src="../assets/images/main/aliado-2.png" alt="">
            </figure>

            <figure class="aliados__item">
                <img class="aliados__logo" src="../assets/images/main/aliado-3.png" alt="">
            </figure>

            <figure class="aliados__item">
                <img class="aliados__logo" src="../assets/images/main/aliado-4.png" alt="">
            </figure>

            <figure class="aliados__item">
                <img class="aliados__logo" src="../assets/images/main/aliado-5.png" alt="">
            </figure>

        </div>

    </section>

    <div class="linea linea--finalmain"></div>

    <?php require_once('../helpers/footer.php') ?>

</body>
</html>