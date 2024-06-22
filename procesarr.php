<?php
if($_SERVER['REQUEST_METHOD']=="POST"){

    $Usuario="";
    $Contraseña="";
    $Edad="";

    $Usuario=!empty($_POST['usuario']) ? $_POST['usuario'] : "vacio";
    $Contraseña=!empty($_POST['contra']) ? $_POST['contra'] : "vacio";
    $Edad=!empty($_POST['edad']) ? $_POST['edad'] : "vacio";

    if($Usuario=="vacio" || $Contraseña=="vacio" || $Edad=="vacio"){
        echo "Existen campos no validos<br>";
    }
    elseif($Edad<18){
        echo "No eres mayor de edad, no puedes ingresar<br>";
    }
    elseif($Usuario!=="luis" || $Contraseña!=="mendoza"){
        echo "El Usuario o la Contraseña son incorrectos<br>";
    }
   else{
    echo "Bienvenido ".$Usuario."<br> Disfruta de la pagina<br>";
   }
}else{
    echo "Algo no esta bien".$_SERVER['REQUEST_METHOD'];
}



?>
