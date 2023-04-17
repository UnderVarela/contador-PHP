<?php
// Otra solucion de GPT:

class Password {
  private $longitud;
  private $contrasena;

  public function __construct($longitud = 8) {
      $this->longitud = $longitud;
      $this->generarPassword();
  }

  public function esFuerte() {
      $mayusculas = preg_match_all('/[A-Z]/', $this->contrasena);
      $minusculas = preg_match_all('/[a-z]/', $this->contrasena);
      $numeros = preg_match_all('/[0-9]/', $this->contrasena);

      return ($mayusculas > 2 && $minusculas > 1 && $numeros > 5);
  }

  public function generarPassword() {
      $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
      $contrasena = '';
      $longitud = $this->longitud;

      while (strlen($contrasena) < $longitud) {
          $contrasena .= substr($caracteres, random_int(0, strlen($caracteres) - 1), 1);
      }

      $this->contrasena = $contrasena;
  }

  public function getContrasena() {
      return $this->contrasena;
  }

  public function getLongitud() {
      return $this->longitud;
  }

  public function setLongitud($longitud) {
      $this->longitud = $longitud;
      $this->generarPassword();
  }
  // Implementación de la clase Password (código previo)
  // ...
  
  // Resto del código de la clase ejecutable
  public function mostrarInfoContraseñas() {
      $password1 = new Password();
      $password2 = new Password(10);
  
      echo "Contraseña 1: " . $password1->getContrasena();
      echo "\n";
      echo "Contraseña 2: " . $password2->getContrasena();
      echo "\n";
  
      echo "La contraseña 1 " . ($password1->esFuerte() ? "es fuerte" : "no es fuerte");
      echo "\n";
      echo "La contraseña 2 " . ($password2->esFuerte() ? "es fuerte" : "no es fuerte");
      echo "\n";
  }
}

// Crear una instancia de la clase ejecutable y mostrar la información de las contraseñas generadas
$passwords = new Password();
$passwords->mostrarInfoContraseñas();
