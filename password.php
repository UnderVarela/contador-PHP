
<?php

class Password {
  private $longitud;
  private $contraseña;

  public function __construct($longitud = 8) {
    $this->longitud = $longitud;
    $this->contraseña = $this->generarPassword();
  }

  public function esFuerte() {
    $mayusculas = preg_match_all('/[A-Z]/', $this->contraseña);
    $minusculas = preg_match_all('/[a-z]/', $this->contraseña);
    $numeros = preg_match_all('/[0-9]/', $this->contraseña);

    return ($mayusculas > 2 && $minusculas > 1 && $numeros > 5);
  }

  public function generarPassword() {
    // Caracteres permitidos en la contraseña
    $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    // Generar una contraseña aleatoria
    return substr(str_shuffle($caracteres), 0, $this->longitud);
  }

  public function getLongitud() {
    return $this->longitud;
  }

  public function setLongitud($longitud) {
    $this->longitud = $longitud;
    $this->contraseña = $this->generarPassword();
  }

  public function getContraseña() {
    return $this->contraseña;
  }
}

class Ejecutable {
  public static function main() {
    // Crear dos contraseñas
    $password1 = new Password();
    $password2 = new Password();

    // Mostrar las contraseñas y si son fuertes o no
    echo "Contraseña1: " . $password1->getContraseña() . " es " . ($password1->esFuerte() ? "fuerte" : "débil") . "<br>";
    echo "Contraseña2: " . $password2->getContraseña() . " es " . ($password2->esFuerte() ? "fuerte" : "débil") . "<br>";
  }
}

// Ejecutar el programa
Ejecutable::main();

//********************************************************************************************************************************************************************** */
// Este código es una clase de PHP llamada Password que se encarga de generar contraseñas aleatorias y verificar si son fuertes o no.

// La clase tiene los siguientes métodos:

// __construct($longitud = 8): constructor de la clase que recibe un parámetro opcional $longitud que indica la longitud de la contraseña a generar. Si no se especifica, se genera una contraseña de longitud 8.
// esFuerte(): método que verifica si la contraseña generada es fuerte o no. Para ser considerada fuerte, la contraseña debe tener al menos 2 mayúsculas, 1 minúscula y 5 números.
// generarPassword(): método que genera una contraseña aleatoria utilizando los caracteres permitidos en la variable $caracteres.
// getLongitud(): método que devuelve la longitud de la contraseña actual.
// setLongitud($longitud): método que actualiza la longitud de la contraseña y genera una nueva contraseña aleatoria.
// getContraseña(): método que devuelve la contraseña actual.
// Además, el código también incluye una clase llamada Ejecutable que tiene un método estático llamado main() que crea dos contraseñas utilizando la clase Password, muestra las contraseñas y si son fuertes o no.