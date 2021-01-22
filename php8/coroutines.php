<?php

function routine()
{
    for ($i= 0; $i < 5; $i++){
        echo "Coroutine: $i\n";
        yield;
    }
}

$gen = routine();
$gen->rewind();
    for ($i = 0; $i < 5; $i++) {
        echo "Main: $i\n";
        $gen->next();
    }