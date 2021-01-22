<?php

class Numero
{
    //Union Types
    private float|int $numero;
    //Mixed Type
    private mixed $maca;

    public function __construct(int|float $numero)
    {
        $this->numero = $numero;
    }
}

$numero = new Numero(10);

function strpos(): int|false {}