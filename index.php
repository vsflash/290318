<?php

spl_autoload_register(function($class) {
    $filePath = "lib" . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($filePath)) {
        include_once $filePath;
        return true;
    }
    return false;
});

function caller(Testable $obj) {
    $obj->test_();
}

//$obj = new Test();
//caller($obj);

//$obj = new Second();
//caller($obj);

$obj1 = new Cat('cat', 'siams', 4);
$obj2 = new Lion('cat', 'african', 10);

$obj1->voice();
$obj2->voice();

$animalArr[] = $obj1;
$animalArr[] = $obj2;

foreach ($animalArr as $obj) {
    $obj->voice();
}
