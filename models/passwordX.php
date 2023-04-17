<?php

class Password {
  private int $longitud = 8;
  private string $password;

  function __construct (int $longitud) {
      $this->longitud = $longitud;

  // Generar password aquí    
  }

  public function getLongitud (): int {
    return $this->longitud;
  }

  public function getPassword (): string {
    return $this->password;
  }

  public function setLongitud (int $longitud): void {
    $this->longitud = $longitud;
  }

  public function generarPassword (): void {
    // Generar password código aquí
  }


}