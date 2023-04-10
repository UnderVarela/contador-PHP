<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <title>Generador de contraseñas</title>
</head>
<body>
  <form method="post">
    <label for="longitud">Longitud de la contraseña:</label>
    <input type="number" name="longitud" id="longitud" min="1" max="100" required>
    <br><br>
    <button type="submit" name="generar">Generar contraseña</button>
  </form>

  <?php
  require_once 'password.php';
  if (isset($_POST['generar'])) {
    $longitud = $_POST['longitud'];
    $password = new Password($longitud);

    echo "Contraseña generada: " . $password->getContraseña() . "<br>";
  }
  ?>

</body>
</html>