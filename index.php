<?php
session_start();

// var_dump($_SESSION);
// var_dump($_COOKIE['email']);

if($_POST){
  if(isset($_POST['logout'])){
    session_destroy();
    setcookie('email',"",time()-100);
    header('Location:index.php');
  }
}
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

  </head>

  <body>
<?php include('header.php') ?>
<!--///Fin contenido-header///-->

<!--///Inicio Primera Seccion/Parte///-->

<div class="inicio">
    <section class="seccion1">
      <h2>Encontrá todo para tus viajes</h2>
      <div class="contenedor-dibujo">
        <img class="dibujo db1" src="img/avion.png" alt="avion">
        <img class="dibujo db2" src="img/frase.png" alt="frase">
      </div>
      <!--Fin contenedor dibujo-->
    </section>
</div>
<!-- ///Fin Primera Seccion/Parte/// -->


<!--///Inicio SECCION PRODUCTOS///-->

<section class="productos-contenedor">
    <h2>Nuestros Productos</h2>
    <ul class="lista-productos ">
          <li>
            <div class="producto">
              <img src="img/producto1.jpg" alt="img producto">
              <p>Maletas</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto2.jpg" alt="img producto">
              <p>Mochilas</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto3.jpg" alt="img producto">
              <p>Neck Pillow</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto4.jpg" alt="img producto">
              <p>Paraguas</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto5.jpg" alt="img producto">
              <p>Bolsos</p>
            </div>
          </li>

          <li>
            <div class="producto">
              <img src="img/producto6.jpg" alt="img producto">
              <p>Otros</p>
            </div>
          </li>
        </ul>

  </section>
  <!--////Fin productos////-->

  <!--///Inicio DESCUENTOS///-->
  <div class="contenedor-descuentos fondo-inmovil">
      <div class="contenedor">
        <ul class="resumen-promo">
            <li><p class="numero"><img src="img/destacados.png"></p>Destacados</li>
            <li><p class="numero"><img src="img/ofertas.png"></p>Ofertas</li>
            <li><p class="numero"><img src="img/imperdibles.png"></p>Imperdibles</li>
            <li><img id= "logoW" src="img/logoW.png"></li>
        </ul>
      </div>
  </div>
  <!--///Fin DESCUENTOS///-->


<!--///Inicio COMENTARIOS///-->
<section class="comentarios">

    <h2>OPINIONES</h2>

    <div class="testimonialesContenedor">
        <div class="testimonial">
            <div class="cajaTestimonial">
                <img class="comillas" src="img/comillas.png" alt="comillas">
                <p><span>sangríadoble</span>¡Amo mi maleta! Desde el día que la compré me acompaña a todos lados.</p>
                <footer class="info-testimonial" >
                    <div class="infoTestimonial">
                        <img src="img/testimonial_1.jpg" alt="imagenTestimonial">
                        <cite>Pedro Jerez<br> <span>Bs. As., Argentina</span></cite>
                    </div>
                </footer>
            </div>

        </div><!--////Fin primera opinion////-->


        <div class="testimonial">
            <div class="cajaTestimonial">
                <img class="comillas" src="img/comillas.png" alt="comillas">
                <p><span>sangríadoble</span>Me encanta viajar! Los sellos en mi pasaporte son como tatuajes para mi alma.</p>
                <footer class="info-testimonial" >
                    <div class="infoTestimonial">
                        <img src="img/testimonial_2.jpg" alt="imagenTestimonial">
                        <cite>Maria López <br> <span> Córdoba, Argentina</span></cite>
                    </div>
                </footer>
            </div>

        </div><!--////Fin segunda opinion////-->


        <div class="testimonial">
            <div class="cajaTestimonial">
                <img class="comillas" src="img/comillas.png" alt="comillas">
                <p><span>sangríadoble</span>Hace poco descubrí que una parte de mi siempre quiere ir de viaje… y la otra también.</p>
                <footer class="info-testimonial" >
                    <div class="infoTestimonial">
                        <img src="img/testimonial_3.jpg" alt="imagenTestimonial">
                        <cite>Susana Ramirez <br> <span> Rosario, Argentina</span></cite>
                    </div>
                </footer>
            </div>
        </div>
    </div><!--////Fin clase testimonial contenedor////-->
  </section>
  <!--///Fin Comentarios///-->

  <!--///Inicio NEWSLETTER///-->
  <div class="newsletter fondo-inmovil">
      <div class="contenido contenedor">
          <p>Registrate al newsletter:</p>
            <h3 class="logo-newsletter"><img src="img/logo letras blanco.png"></h3>
              <a href="formulario.php" class="buttonTransparente">registro</a>
      </div>
  </div>
<!--///Fin newsletter///-->

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
