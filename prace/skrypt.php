<?php
$path = '/home/www/data/uzytkownicy.txt';
printf("Nazwa pliku: %s <br/>",basename($path));
printf("Nazwa pliku bez rozszerzenia %s <br/>", basename($path, ".txt"));
?>