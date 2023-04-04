<?php
declare (strict_types = 1);

class Persona {
  public string $nombre = 'Desconocido';
  public string $pais = 'Desconocida';
  private int $edad = 0;
  
// Metodo constructor, no hace falta ponerle "Public", ya esta por defecto.
  function __construct(?string $name = 'Desconocido', ?int $edad = 0) {
    $this->nombre = $name??'';
    $this->edad = $edad??0;
  }

  function __toString() {
    return join(',', [$this->nombre, $this->pais, $this->edad]);
  
}

  public function getEdad () : int {
    return $this->edad;
  }

}
