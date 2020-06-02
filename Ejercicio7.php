<!DOCTYPE html>
<html>
<body>
    <h1>Ejercicio 7</h1>

    <?php

header ("Content-type: text/html;charset=\"utf-8\"");
  
echo "<h1>".$_GET["numero"]."</h1>";



if (is_numeric($_GET["numero"]) && $_GET["numero"]>=1 && $_GET["numero"] % 2 == 0)
{
echo "<h3>El Numero " .$_GET["numero"]. " Si es un numero primo "  "</h3>";
}

else{
    echo "<h3>El Numero "  .$_GET["numero"]. " No es un numero primo" " </h3>";
}

    ?>

    <form>
Campo para ingresar y validar el numero:
<input  name="nombre" type = "text" placeholder = "Escriba el numero">;
<input type="submit" value = "Verificar Numero">;
    </form>
</body>
</html>