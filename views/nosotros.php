<?php
$currentPage = "nosotros";

include_once('../helpers/head.php')
?>

<!DOCTYPE html>
<html lang="es">
    <?php renderHeader('Nosotros | Atepsa') ?>
<body>
    
    <?php require_once('../helpers/navbar.php') ?>
 
    <section class="nosotrosbanner">

        <img class="w-100 d-block" src="../assets/images/nosotros/banner.jpg" alt="Camion de bomberos con escaleras">

        <div class="nosotrosbanner__letras">
            <div class="nosotrosbanner__linea1"></div>
            <p class="nosotrosbanner__texto"><span>Productos con la </span> tecnología más <span class="nosotrosbanner__texto--avanzada">Avanzada</span></div></p>
        </div>

    </section>
    

    <section class="experiencia">

        <div class="linea"></div>
        <div class="linea"></div>

        <img class="experiencia__imagen" src="../assets/images/nosotros/bombero.png" alt="Imagen de bombero">

        <article class="experiencia__article">
            <h2 class="experiencia__titulo">experiencía y compromiso</h2>
            <p class="experiencia__parrafo">Más de 20 años en el mercado nos avalan como la empresa líder en la comercialización y servicio de unidades y equipo contra incendio, rescate y aereportuario.</p>
            <p class="experiencia__parrafo">Somos el representante exclusivo en México de las marcas más importantes en la industria, nuestros productos están avalados y certificados por los laboratorios más reconocidos a nivel mundial.</p>
        </article>

    </section>


    <main class="filosofia">

        <h2 class="filosofia__subtitulo">Lo que nos representa</h2>
        <h1 class="filosofia__titulo">Nuestra filosofía</h1>

        <article class="filosofia__article">
            <p class="filosofia__parrafo">Las necesidades específicas de nuestros clientes y la seguridad de las personas son nuestra prioridad; cumplimos nuestro compromiso con honestidad, esfuerzo y dedicación.Nuestro equipo está formado por expertos en la industria contra incendio, de rescate y aeroportuaria. Contamos con especialistas en el área técnica, de servicio, capacitación y mantenimiento; brindamos atención y asesoría personalizada a cada uno de nuestros clientes.</p>
            <p class="filosofia__bigtext">La excelencia es nuestro compromiso</p>
        </article>

    </main>

    <section class="valores">

        <img class="valores__imagen" src="../assets/images/nosotros/camion.png" alt="camion de bomberos con la mejor tecnología">
        
        <article class="valores__article">
            <h2 class="valores__titulo">Valores</h2>
    
            <ul class="valores__lista">
                <li class="valores__item">
                    <span>Compromiso</span>
                    Ofrecer un servicio profesional, integro y calidad a nuestros clientes.
                </li>
                <li class="valores__item">
                    <span>Profesionalismo</span>
                    Contamos con capacitación constante a nuestro personal para su propia formación profesional y así poder ofrecer a nuestros clientes soluciones óptimas.
                </li>
                <li class="valores__item">
                    <span>Honestidad</span>
                    Es uno de los valores que más nos han caracterizado a lo largo del tiempo, generando así mayor confianza en nuestros clientes.
                </li>
                <li class="valores__item">
                    <span>Trabajo en equipo</span>
                    Gracias a nuestro ambiente profesional de trabajo, logramos que los objeticos particulares en las distintas áreas y por consecuente logramos nuestros objetivos generales.
                </li>
            </ul>
        </article>

    </section>


    <section class="clientes">

        <div class="linea linea--1"></div>
        <div class="linea linea--2"></div>

        <h2 class="clientes__titulo">Nuestros clientes son lo más importante</h2>
        <figure class="clientes__logos">
            <img class="clientes__logo" src="../assets/images/nosotros/marca-1.png" alt="Logotipo de OMA">
            <img class="clientes__logo" src="../assets/images/nosotros/marca-2.png" alt="Logotipo de ASUR">
            <img class="clientes__logo" src="../assets/images/nosotros/marca-3.png" alt="Logotipo de Grupo Aeropuertuario del Pacifíco">
            <img class="clientes__logo" src="../assets/images/nosotros/marca-4.png" alt="Logotipo de AICM">
            <img class="clientes__logo" src="../assets/images/nosotros/marca-5.png" alt="Logotipo de Aeropuerto internacional Felipe Angeles">
            <img class="clientes__logo" src="../assets/images/nosotros/marca-6.png" alt="Logotipo de PEMEX">
            <img class="clientes__logo" src="../assets/images/nosotros/marca-7.png" alt="Logotipo de Ternium">
            <img class="clientes__logo" src="../assets/images/nosotros/marca-8.png" alt="Logotipo de Reyma">
            <img class="clientes__logo" src="../assets/images/nosotros/marca-9.png" alt="Logotipo de Newmont">
        </figure>
    </section>

    <?php require_once('../helpers/footer.php') ?>

</body>
</html>