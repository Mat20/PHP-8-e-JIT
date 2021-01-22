<?php

require_once 'ClasseExemplo.php';

$reflectionClass =  new ReflectionClass(ClasseExemplo::class);

//var_dump($reflectionClass->getProperty(), $reflectionClass->getMethods());

$propriedade = $reflectionClass->getProperty('propriedadePublica');

//var_dump($propriedade->getValue(new ClassExemplo()));

$objeto = $reflectionClass->newInstanceWithoutConstructor();
var_dump($propriedade->getValue($objeto));

$propPrivada = $reflectionClass->getProperty('propriedadePrivada');
$propPrivada->setAccessible(true);
$propPrivada->setValue($objeto, 'Teste');

echo $objeto->getPropPrivada();