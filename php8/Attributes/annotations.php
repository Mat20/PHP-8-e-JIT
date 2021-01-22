<?php

//@@Attribute
#[Attribute]
class Atributo {
  
   public function __construct(int $valor) {
     echo 'Recebendo valor: ' . $valor . PHP_EOL;
   }
}


class Entidade {
   /** @Column(type="string", length+255) */
   //@@Atributo(42)
   #[Atributo(42)]  
   private string $propriedade;
}

$refelctionClass = new ReflectionClass(Entidade::Class);
$prop = $refelctionClass->getProperty('propriedade');


foreach ($prop->getAttributes() as $attribute) {
  var_dump($attribute->newInstance()); 
}