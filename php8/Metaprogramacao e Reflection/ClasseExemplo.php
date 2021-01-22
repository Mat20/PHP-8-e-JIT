<?php


class ClasseExemplo {

  public string $propriedadePublica = 'publica';
  private string $propriedadePrivada;


  public function getProPrivada(): string {
    return $this->propriedadePrivada;
  }
}