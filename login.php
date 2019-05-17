<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Wanderlust</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
  </head>

  <body>
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
                <a href="login.php" class="botones">Iniciar sesión</a>
                <a href="formulario.php" class="registro">Registrarme</a>
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
        
        <img id= "logoPrincipal" src="img/logoWanderlust.png" alt="logoW">
        
        <!-- fin logo principal -->

        <!-- Opciones para tablet y desktop -->
        <div class="opciones">
            <nav class="navPrincipal">
                <a href="#" class="botones">PRODUCTOS</a>
                <a href="faqs.html" class="botones">PREGUNTAS FRECUENTES</a>
                <!-- solo desktop: -->
                <a href="login.php" class="botonesD">Iniciar sesión</a>
                <a href="formulario.php" class="botonesD">Registrarme</a>
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
<!--///Fin contenido-header///-->

<!-- ///Inicio login/// -->

<div class="contenedorLogin">
    <div class="cuadradoLogin">

            <h3>Iniciá <span>sesión</span></h3>
            
        <div class="contenedor-1">    
            <p class="frase">Completá tus datos:</p>

            <form class= "formularioLogin" action="chequearLogin.php" method="post">
                <p class="form">
                    <label for="email">E-mail:</label>
                    <input id= "email" type="email" name= "email" value="" placeholder="tu@email.com">
                </p>

                <p class="form">
                    <label for="pass">Contraseña:</label>
                    <input id= "pass" type="password" name= "pass" value="" placeholder="ingresá tu contraseña">
                </p>

                <p class="frase">¿Olvidaste tu contraseña?</p>
                
                <p class="recordarme"><input class="boton-recordarme" type="checkbox" name="Recordarme" value="siRec">Recordarme</p>

                <p class="form-boton-inicio">
                    <input type="submit" name="Enviar" value="Entrar">
                </p>
                </form>
 
            </div>                
            <div class="registro">
                <p class="frase2">¿Todavia no sos miembro? <a class="boton-registro" href="formulario.html">¡REGISTRATE!</a></p>
            
            </div>
    </div>
</div>
<!-- ///Fin Login///  -->

<!--///Inicio FOOTER///-->
<footer class="site-footer">
    <div class="contenedor">
          <div class="footer-informacion">
              <h3>Sobre <span>wanderlust</span></h3>
                <p>Creemos que cada viaje nos ofrece nuevas oportunidades de conectarnos con el mundo, con otras personas y con nosotros mismos.</p>
          </div>
          <div class="medios-pago">
              <h3>Medios de <span>Pago</span></h3>
              <ul><!--Medios de pago-->
                <li><i class="fab fa-cc-mastercard"></i> <i class="fab fa-cc-visa"></i> <i class="fab fa-cc-amex"></i> <i class="fab fa-cc-paypal"></i></li>
              </ul>
          </div>
          <div class="menu">
              <h3>Redes <span>sociales</span></h3>
              <nav class="redes-sociales">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
  
              </nav><!--Fin redes-sociales-->
          </div>
  
    </div><!--////Fin contenedor////-->
  
    <!--Frase Copyright-->
    <p class="copyrights">Copyright &copy Todos los derechos reservados Wanderlust- 2019</p>
  
  </footer>

  </body>
</html>
