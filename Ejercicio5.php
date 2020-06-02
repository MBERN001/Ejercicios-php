<!DOCTYPE html>
<html>
<body>
    <h1>Ejercicio 5</h1>

    <?php

header ("Content-type: text/html;charset=\"utf-8\"");
  
for ($i=0; $i <=10 ; $i++) { 
 echo  "<p> $i</p>";
}
echo "<p>Finaliza ciclo for </p>";

for ($i=1; $i >=0 ; $i--) { 
    echo  "<p> $i</p>";
   }
   echo "<p>Finaliza ciclo for </p>";

$familia = array ("Maria", "Ana","Jose","Pedro");

for ($i=0; $i <=sizeof($familia) ; $i++) { 
    echo "<h2> $familia[$i] numero de elementos $i </h2>";
echo "<br>";
}

while ($i sizeof($familia) <= 10) {
    echo "<h2> $familia[$i] numero de elementos $i </h2>";
    $i++;
echo "<br>";
}

    ?>
</body>
</html>