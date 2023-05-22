<?php
      $liczba = $_POST['silnia']

       function silnia($n)
      {
          if($n >= 2){
              echo 'Silnia z liczby'.($n.'wynosi'.($n-1));
          }else{
              return 1;
          }
      }
      echo silnia($liczba);
  
?>