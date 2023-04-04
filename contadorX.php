<?php 
require_once('./models/contador.php');
$contador = new Contador($_REQUEST['salida']??0);

$contador->intervalo = 1;

extract($_REQUEST);

if (isset($subir)) {
 $contador->incrementar();
}

if (isset($bajar)) {
  $contador->decrementar();
 }


?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <title>Contador</title>
</head>
<body>
  <form action="<?=htmlspecialchars($_SERVER['PHP_SELF'])?>">
    <h1>Contador en PHP</h1>
    <fieldset>
      <legend>Incrementar/decrementar</legend>
      <input type="text" name="salida" id="text" value="<?=$contador->getNumero()?>">
      <button name="bajar"><strong>-</strong></button>
      <button name="subir"><strong>+</strong></button>
    </fieldset>
  </form>
</body>
</html>