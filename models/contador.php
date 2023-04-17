<?php

class Contador {
  private int $numero;
  public int $intervalo = 1;

  function __construct (?int $numeroActual) {
    $this->numero = $numeroActual??0;
  }

function getNumero () : int {
  return $this->numero;
}

function incrementar () : void {
  $this->numero+=$this->intervalo;
  }

function decrementar () : void {
  $this->numero-=$this->intervalo;
  }

}