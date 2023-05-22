<?php
 $otwarcie = fopen('aha.csv','r')

 while(list($imie,$nazwisko)= fgetcsv($otwarcie,1024,';')){
     printf($imie,$nazwisko);
 }
?>