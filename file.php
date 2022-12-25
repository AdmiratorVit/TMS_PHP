<?php

$file_etalon = "index";
for ($i=1; $i <= 5; $i++){
    $new_file = $file_etalon . $i . ".php";
    copy("index.php", $new_file);
}
var_dump (scandir(getcwd()));

echo "6556" . PHP_EOL;
echo "6556" . PHP_EOL;