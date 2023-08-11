<header>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid navbar-contenedor">
            <a class="navbar-brand" href="../index.php"><img src="../assets/images/logotipo.png" alt="Logotipo de Atepsa"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHead" aria-controls="navbarHead" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarHead">
                <div class="navbar-nav gap-3">
                    <a class="nav-link <?= ($currentPage === "home") ? 'active' : '' ?>" href="../index.php">Home</a>
                    <a class="nav-link <?= ($currentPage === "incendios") ? 'active' : '' ?>" href="../views/contraincendio.php">Contraincendios</a>
                    <a class="nav-link <?= ($currentPage === "aeropuerto") ? 'active' : '' ?>" href="../views/aeropuerto.php">Aeropuertuario</a>
                    <a class="nav-link <?= ($currentPage === "nosotros") ? 'active' : '' ?>" href="../views/nosotros.php">Nosotros</a>
                    <a class="nav-link <?= ($currentPage === "contacto") ? 'active' : '' ?>" href="../views/contacto.php">Contacto</a>
                </div>
            </div>
        </div>
    </nav>

</header>