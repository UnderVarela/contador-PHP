<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <title>Generador de contraseñas</title>
</head>
<body>
  <h1>Generador de contraseñas</h1>
  <form method="post">
    <fieldset>
      <label for="longitud">Longitud de la contraseña:</label>
      <input type="number" name="longitud" id="longitud" min="1" max="100" required>
      <br><br>
      <button type="submit" name="generar">Generar contraseña</button>
    </fieldset>
  </form>

  <?php
  require_once 'password.php';
  if (isset($_POST['generar'])) {
    $longitud = $_POST['longitud'];
    $password = new Password($longitud);

    echo "<strong>Contraseña generada: </strong>" . $password->getContraseña() . "<br>";
  }
  ?>

</body>
</html>