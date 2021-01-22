<?php 

$pdo = new PDO('sqlite::memory:');

//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMOD_EXCEPTION);

$pdo->beginTransaction();

try {
  $pdo->exec('INSERT INTO table VALUES (1)');
  $pdo->commit();
} catch (PDOException $e) {
  $pdo->rollBack();


  echo 'Erro na iserção';
}