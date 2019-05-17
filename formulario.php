<?php

session_start();

// Persistencia:
$nombre="";
$apellido="";
$telefono="";
$email="";
$foto="";


// VALIDACIONES

// carga de errores
$errorNombre = "";
$errorApellido = "";
$errorTelefono = "";
$errorEmail = "";
$errorPass = "";
$errorRepPass="";
$errorFoto = "";
$hayErrores = false;

  //SI RECIBO ALGO POR POST
  if($_POST){


    

    
    $nombre = trim($_POST["nombre"]);
    $apellido = trim($_POST["apellido"]);
    $telefono = trim($_POST["telefono"]);
    $email = trim($_POST["email"]);
    $pass = trim($_POST["pass"]);
    $passRep = trim($_POST["passRep"]);
    $foto = $_FILES["foto"];
   


    //VALIDACION DE CADA DATO:

    // validación nombre:
    if ($nombre == "") {
        $errorNombre = " *Completá el nombre";
        $hayErrores = true;
      }else if(!ctype_alpha($nombre)){
        $errorNombre = " *El nombre solo tiene que tener letras";
        $hayErrores = true;
      }else if(strlen($nombre) < 2){
        $errorNombre = " *El nombre tiene que tener dos o más caracteres";
        $hayErrores = true;
      }
    //   else{
    //       $nomUS=$nombre;
    //   }

    // validación apellido:
    if ($apellido == "") {
        $errorApellido = " *Completá el apellido";
        $hayErrores = true;
      }else if(!ctype_alpha($apellido)){
        $errorApellido = " *El apellido solo tiene que tener letras";
        $hayErrores = true;
      }else if(strlen($apellido) < 2){
        $errorApellido = " *El nombre tiene que tener dos o más caracteres.";
        $hayErrores = true;
      }

    // validación teléfono:
    if ($telefono == "") {
        $errorTelefono = " *Completá el teléfono";
        $hayErrores = true;
      }else if(!is_numeric($telefono)){
        $errorTelefono =" *Este campo solo admite números";
        $hayErrores = true;
    }else if(strlen($telefono)<8){
        $errorTelefono = " *El teléfono tiene que tener al menos 8 números";
        $hayErrores = true;
    }

    // validación email:
    if($email == ""){
        $errorEmail = " *Completá el E-mail";
        $hayErrores = true;
      }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errorEmail = " *Email no válido";
        $hayErrores = true;
      }

    // validación contraseña:
      if ($pass ==""){
      $errorPass = " *Completá la contraseña";
      $hayErrores = true;
      }else if (strlen($pass)<6){
        $errorPass = " *La contraseña debe tener al menos 6 caracteres";
        $hayErrores = true;
      }else if($pass != $passRep){
        $errorPass = "Las contraseñas no coinciden";
        $hayErrores = true;
      }

    // validación foto (solo nos fijamos si tiene un error la foto,
    // si el formulario está bien, vamos a subirla al archivo una vez que esté todo 
    // correctamente completado:

    if(isset($_FILES["foto"])){
        if($_FILES["foto"]["error"] === UPLOAD_ERR_OK){
          $nombreFoto = $_FILES["foto"]["name"];
          $origen = $_FILES["foto"]["tmp_name"];
          $ext = pathinfo($nombreFoto,PATHINFO_EXTENSION);
  
          $destino = "";
          $destino = $destino."fotoPerfil/";
          $destino = $destino.$nombre."fotoDelUsuario.".$ext;
          $errorFoto= " *Por errores en el formulario, la foto no se guardó, subila de nuevo";
        }
      }else{
          $errorFoto = " *Error al subir la foto";
          $hayErrores = true;
      }

    
    // Si no hay errores, se registra al usuario y se guarda en un JSON:

    if(!$hayErrores){

        // acá subimos la foto, en el caso de que no haya errores en el formulario:
        move_uploaded_file($origen,$destino);
        $errorFoto = " =) El archivo se subió con éxito";
        // ------------------------------------------------------------------------
        $JsonBase= file_get_contents("usuarios.json");
        $baseEnArray= json_decode($JsonBase,true); 


        $usuarioNuevoEnArray= [
        "nombre"=> $nombre,
        "apellido" => $apellido,
        "telefono" => $telefono,
        "email"=> $email,
        "pass" => password_hash($pass, PASSWORD_DEFAULT),
        "foto" => $nombre."fotodeperfil.".$ext];

        

        $baseEnArray[] = $usuarioNuevoEnArray; 


        $nuevaListaDeUsuariosEnJson= json_encode($baseEnArray);

        file_put_contents('usuarios.json',$nuevaListaDeUsuariosEnJson);
        
        header('Location:login.php');
      }




  }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+KR:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Formulario</title>

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
        
    
<div class="contenedorFormulario">
    <div class="cuadradoFormulario">
        <h3>¡Unite a <span>Wanderlust!</span> </h3>
            <p class="frase">Completá tus datos a continuación y comenzá a disfrutar los beneficios de Wanderlust:</p>

        <form class= "" action="formulario.php" method="post" enctype="multipart/form-data">
            <p class="form">
                <label for="nombre">Nombre:</label>
                <input id= "nombre" type="text" name= "nombre" value="<?= $nombre?>"><?= $errorNombre?>
            </p>

            <p class="form">
                <label for="apellido">Apellido:</label>
                <input id= "apellido" type="text" name= "apellido" value="<?= $apellido?>"><?= $errorApellido?>
            </p>

            <p class="form">
                <label for="telefono">Teléfono:</label>
                <input id= "telefono" type="tel" name= "telefono" value="<?= $telefono?>" placeholder="(011) 15-1111-1111"><?=$errorTelefono?>
            </p>

            <p class="form">
                <label for="email">E-mail:</label>
                <input id= "email" type="email" name= "email" value="<?= $email?>" placeholder="tu@email.com"><?=$errorEmail?>
            </p>

            <p class="form">
                <label for="pass">Contraseña:</label>
                <input class="pass" type="password" name= "pass" value="" placeholder="ingresá tu contraseña"><?=$errorPass?>
            </p>

            <p class="form">
                <label for="passRep">Repetir contraseña:</label>
                <input class="pass" type="password" name= "passRep" value="" placeholder="repetí tu contraseña">
                </p>

            <p class="form">
                <label for="foto">Seleccioná tu foto de perfil:</label>
                <input id= "foto" type="file" name= "foto" value=""><?=$errorFoto?>
            </p>

            <p class="form correo">
                <label for="newsletter">¿Te gustaría recibir noticias en tu correo?</label>
                <input type="checkbox" name="si" value="" checked>
            </p>
            <p class="boton-enviar">
                <input type="submit" name="Enviar" value="Enviar">
            </p>
        </form>
    </div>
</div>

    <footer class="site-footer">
            <div class="contenedor">
                  <div id="footer-informacion">
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
