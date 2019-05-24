<?php
session_start();

// base de datos json:

$usuarioEnJson= file_get_contents("usuarios.json");

$usuarioEnArray= json_decode($usuarioEnJson,true);

var_dump($usuarioEnArray); exit;


if (!empty($_POST['email'])){
        $usuarioEnJson= file_get_contents("usuarios.json");

        $usuarioEnArray= json_decode($usuarioEnJson,true);
        
        var_dump($usuarioEnArray); exit;
        

        // 1 chequear que exista si esta el email 
            // si esta, corroborar la contraseña (con JSON)
                        // si la contraseña no coincide, mostrar "el usuario y/o contraseña no son validos"
                        // si la contraseña coincide entonces setear sesion cmo email guardado

            // si no está mostrar "el usuario y/o contraseña no son validos"


    // si existe seteado el email guardado
        // mostrar bienvenido "pepito @ gmail"
}






 ?>