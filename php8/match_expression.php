<?php

abstract class Question {}
class Single extends Question {}
class Multiple extends Question {}

$input = 'single';

$question = match ($input) {
  'single' => new Single(),
  'multi' => new Multiple()
};
/* 
switch ($input) {
  case 'single':
    $question = new Single();
    break;
  case 'multi':
    $question =  new Multiple();
    break;
  default:
    throw new Exception('Invaldi question type');
}
*/

var_dump($question);