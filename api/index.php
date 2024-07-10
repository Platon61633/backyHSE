<?php


// echo 'gg';

echo 'e';
require_once __DIR__.'/configuration/connect.php';
$method = $_SERVER['REQUEST_METHOD'];
if ($connect) {
    echo 'gg';
} else {
    echo 'bad';
}

echo $method; 

?>