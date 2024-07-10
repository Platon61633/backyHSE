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

switch ($_GET['need']) {
    case 'register':
        // $data = json_decode(file_get_contents('php://input'));
        echo 'name';
        break;
    
    default:
        # code...
        break;
}