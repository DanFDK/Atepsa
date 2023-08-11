<?php
$currentPage = "aeropuerto";

include_once('../helpers/head.php')
?>

<!DOCTYPE html>
<html lang="es">
    <?php renderHeader('Aeropuerto | Atepsa') ?>
<body>
    
    <?php require_once('../helpers/navbar.php') ?>


    <section class="banner aero">
        
        <aside class="banner__lateral">
            <nav class="banner__nav">
                <a class="banner__nav__item banner__nav__item--active">Aeropuertuario/</a>
                <a href="#productos" class="banner__nav__item">Productos</a>
            </nav>

            <div class="banner__redes">
                <a href="" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </aside>
        
        <img class="banner__image" src="../assets/images/aereopuerto/banner.png" alt="Banner, Imagen de un aeropuerto">

        <section class="aerobanner">
            <div class="aerobanner__contenedor">
                <h1 class="aerobanner__titulo">Aeoropuertuario <i class="fas fa-angle-down"></i></h1>
                <div class="aerobanner__redes">
                    <a href="" target="_blank"><i class="aerobanner__icon fab fa-twitter"></i></a>
                    <a href="" target="_blank"><i class="aerobanner__icon fab fa-youtube"></i></a>
                    <a href="" target="_blank"><i class="aerobanner__icon fab fa-instagram"></i></a>
                </div>

                <div class="aerobanner__barra"></div>
            </div>
        </section>
        
    </section>

    <section class="cimc">
        <section class="cimc__lineas">
            <div class="linea linea--1"></div>
            <div class="linea linea--2"></div>
        </section>        

        <img class="w-100 d-block" src="../assets/images/aereopuerto/cimc.jpg" alt="Imagen de CIMC">

        <div class="cimc__arrow">
            <a href="">
                <i class="fas fa-angle-down"></i>
            </a>
        </div>
    </section>


    <section class="categorias">

        <section class="categorias__contenedor categorias__contenedor--1">
            
            <section class="categorias__item">
                
                <span class="categorias__item__no">01</span>
                
                <figure class="categorias__item__figure">
                    <img class="categorias__item__img" src="../assets/images/aereopuerto/cate-1.png" alt="Imagen referencial de categoria 1">
                </figure>

                <div class="categorias__item__info">
                    <h2 class="categorias__item__titulo">Puentes de embarques de pasajeros</h2>
                    <button type="btn button">Ver más</button>
                </div>

            </section>
            <section class="categorias__item">
                
                <span class="categorias__item__no">02</span>
                
                <figure class="categorias__item__figure">
                    <img class="categorias__item__img" src="../assets/images/aereopuerto/cate-2.png" alt="Imagen referencial de categoria 1">
                </figure>

                <div class="categorias__item__info">
                    <h2 class="categorias__item__titulo">Puentes de embarques de pasajeros</h2>
                    <button type="btn button">Ver más</button>
                </div>

            </section>
        
        </section>
        <section class="categorias__contenedor categorias__contenedor--2">
            
            <section class="categorias__item">
                
                <span class="categorias__item__no">03</span>
                
                <figure class="categorias__item__figure">
                    <img class="categorias__item__img" src="../assets/images/aereopuerto/cate-3.png" alt="Imagen referencial de categoria 1">
                </figure>

                <div class="categorias__item__info">
                    <h2 class="categorias__item__titulo">Puentes de embarques de pasajeros</h2>
                    <button type="btn button">Ver más</button>
                </div>

            </section>
            <section class="categorias__item">
                
                <span class="categorias__item__no">04</span>
                
                <figure class="categorias__item__figure">
                    <img class="categorias__item__img" src="../assets/images/aereopuerto/cate-4.png" alt="Imagen referencial de categoria 1">
                </figure>

                <div class="categorias__item__info">
                    <h2 class="categorias__item__titulo">Puentes de embarques de pasajeros</h2>
                    <button type="btn button">Ver más</button>
                </div>

            </section>
            <section class="categorias__item">
                
                <span class="categorias__item__no">05</span>
                
                <figure class="categorias__item__figure">
                    <img class="categorias__item__img" src="../assets/images/aereopuerto/cate-5.png" alt="Imagen referencial de categoria 1">
                </figure>

                <div class="categorias__item__info">
                    <h2 class="categorias__item__titulo">Puentes de embarques de pasajeros</h2>
                    <button type="btn button">Ver más</button>
                </div>

            </section>
        
        </section>

    </section>


    <?php require_once('../helpers/footer.php') ?>

</body>
</html>