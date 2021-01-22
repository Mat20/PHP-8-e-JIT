<?php

class Pessoa {

    public function __construct(
        #[Atributo]
        public string $email,
        public string $nome,
        public string $cpf,
    ) { }
}

$pessoa = new Pessoa('email', 'nome', 'cpf');
var_dump($pessoa);

$rc= new ReflectionClass(Pessoa::class);
var_dump($rc->getConstructor()->getParameters()[0]->getAttributes());
var_dump($rc->getProperty('email')->getAttributes());