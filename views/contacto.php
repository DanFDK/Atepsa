<?php
$currentPage = "contacto";
include_once('../helpers/head.php')
?>

<!DOCTYPE html>
<html lang="es">
    <?php renderHeader('¡Contactanos! | Atepsa') ?>
<body>
    
    <?php require_once('../helpers/navbar.php') ?>

    <section class="bannercontacto">

        <figure class="">

            <img class="w-100 d-block" src="../assets/images/contacto/banner.jpg" alt="Imagen de Banner">

        </figure>

    </section>

    <main class="contactanos">

        <div class="linea linea--1"></div>
        <div class="linea linea--2"></div>

        <article class="contactanos__article">

            <h1 class="contactanos__titulo">Contactanos</h1>
    
            <ul class="contactanos__lista">
                <li class="contactanos__item">
                    <i class="contactanos__item__icon fas fa-location-dot"></i>
                    <a href="" target="_blank">Dirección: Av. Unión No. 163 Piso 1 Col. Lafayette, CP. 44150, Guadalajara, Jal.</a>
                </li>
                <li class="contactanos__item">
                    <i class="contactanos__item__icon fab fa-whatsapp"></i>
                    <a href="" target="_blank">+52 33 35 60-2000 /01/02/03</a>
                </li>
                <li class="contactanos__item">
                    <i class="contactanos__item__icon fas fa-envelope"></i>
                    <a href="mailto:contacto_atepsa01@yahoo.com" target="_blank">contacto_atepsa01@yahoo.com</a>
                </li>
            </ul>
        </article>


        <section class="seguridad">
            
            <img class="seguridad__imagen" src="../assets/images/contacto/ubi.jpg" alt="Imagen referente de seguridad">

            <iframe class="seguridad__mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.9072621510386!2d-103.37599162393772!3d20.67335159988909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae0e4c4c9d7f%3A0x2d1abadf2f0cce18!2sAv%20Uni%C3%B3n%20163-Piso%201%2C%20Col%20Americana%2C%20Lafayette%2C%2044140%20Guadalajara%2C%20Jal.!5e0!3m2!1ses-419!2smx!4v1691697555827!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            <h2 class="seguridad__titulo">La seguridad de las personas es nuestra prioridad.</h2>
        
        </section>

    </main>

    <section class="envianos">
        
        <figure>
            <img class="envianos__imagen w-100" src="../assets/images/contacto/contacto.jpg" alt="Personal mirando una laptop">
        </figure>
        
        <div class="linea linea--1"></div>
        <div class="linea linea--2"></div>

        <footer class="envianos__form">
                
                <legend class="envianos__legend">Envíanos tus dudas</legend>

                <div class="mb-4">
                    <input class="envianos__input form-control" type="text" placeholder="Nombre">
                </div>

                <div class="row">
                    <div class="col-sm-6 mb-4">
                        <input class="form-control envianos__input" placeholder="Correo" type="email">
                    </div>
                    <div class="col-sm-6 mb-4">
                        <input class="form-control envianos__input" placeholder="WhatsApp" type="tel">
                    </div>
                </div>

                <div class="mb-4">
                    <textarea class="form-control envianos__textarea" name="mensaje" id="inpMensaje" placeholder="Mensaje"></textarea>
                </div>

                <div class="mb-4">
                    <label for="check" class="form-label">
                        <input class="envianos__check" type="checkbox" id="check">
                        Estoy de acuerdo con el <a href="">Aviso de privacidad</a>
                    </label>
                </div>

                <div class="mb-4">
                    <button type="submit" class="envianos__submit">Enviar Mensaje</button>
                </div>

        </footer>

    </section>

    <?php require_once('../helpers/footer.php') ?>

</body>
</html>