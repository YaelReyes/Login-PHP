<?php

$usuario_correcto = "admin";
$palabra_secreta_correcta = "root";

$usuario = $_POST["usuario"];
$palabra_secreta = $_POST["palabra_secreta"];

$usuario_correcto2 = "usuario";
$palabra_secreta_correcta2 = "pierna y muslo";

$usuario2 = $_POST["usuario"];
$palabra_secreta2 = $_POST["palabra_secreta"];

if ($usuario == $usuario_correcto && $palabra_secreta == $palabra_secreta_correcta) 
    {
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: secreta.php");
    } 
else{
    if ($usuario == $usuario_correcto2 && $palabra_secreta == $palabra_secreta_correcta2) 
    {
    session_start();
    $_SESSION["usuario"] = $usuario;
    header("Location: secreta2.php");
    }
    else{

       if ($usuario == $usuario_correcto && $palabra_secreta != $palabra_secreta_correcta) 
       {
           echo "Contraseña Incorrecta para ADMIN";
       }
        else{ 
            if ($usuario == $usuario_correcto2 && $palabra_secreta != $palabra_secreta_correcta2) 
             {
                 echo "Contraseña Incorrecta para Usuario";
             }
            
            else{
                echo "El usuario y la contraseña son incorrectos";
                }
            }
        }
    }
