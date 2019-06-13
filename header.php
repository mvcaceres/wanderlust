<link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,700" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


<header>
<!-- barra superior mobile y tablet -->
  <div class="barraSuperior">
    <div class="barraSuperior-izquierda">
        <!-- Redes Sociales -->
        <div class="RRSS">
        <nav class="redesSociales">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>
        </div>
        <!--Fin redes-sociales-->
    </div>

    <div class="barraSuperior-derecha">
        <!-- inicio/registro -->
        <div class="inicio-registro">
          <nav class="inicioRegistro">

            <?php if(isset($_SESSION['nombreLogueado'])): ?>
              <h3>Hola <?= $_SESSION['nombreLogueado']?> </h3>

            <?php else: ?>
              <a href="login.php" class="botones">Iniciar sesión</a>
              <a href="formulario.php" class="registro">Registrarme</a>
            <?php endif; ?>

          </nav>
        </div>
        <!-- fin inicio/registro -->

        <!-- carrito: -->
        <div class="carrito">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <!-- fin Carrito -->
  </div>

  </div>

<!-- fin barra superior mobile y tablet -->

<!-- barra inferior  -->
<div class="barraInferior">
    <!-- menu hamburguesa para mobile -->
    <div class="menuHamburguesa">
        <img id= "logoHamburguesa" src="img/menuHamburguesa.png" alt="logoW">
    </div>
    <!-- fin menu hamburguesa para mobile -->

    <!-- logo principal -->
      <img onclick="window.location.href='index.php'" id= "logoPrincipal" src="img/logoWanderlust.png" alt="logoW">
    <!-- fin logo principal -->

    <!-- Opciones para tablet y desktop -->
    <div class="opciones">
        <nav class="navPrincipal">
            <a href="#" class="botones">PRODUCTOS</a>
            <a href="faqs.php" class="botones">PREGUNTAS FRECUENTES</a>
            <!-- solo desktop: -->


            <?php if(isset($_SESSION['nombreLogueado'])): ?>
              <a class="botonesD">Hola <?= $_SESSION['nombreLogueado']?> </a>

              <form class="botonesD" action="index.php" method="POST">
                <input  type="submit" name="logout" value="LogOut">
              </form>

            <?php else: ?>
              <a href="login.php" class="botonesD">Iniciar sesión</a>
              <a href="formulario.php" class="botonesD">Registrarme</a>
            <?php endif; ?>


            <!-- carrito desktop: -->
            <div class="carritoD">
                <i class="fas fa-shopping-cart"></i>
              </div>
            <!-- fin Carrito desktop -->
        </nav>
    </div>




    <!-- fin opciones para tablet y desktop -->
</div>
<!-- fin barra inferior  -->

</header>
