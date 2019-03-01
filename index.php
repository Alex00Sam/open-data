<?php

  $h = fopen("population_number_sex_age_8.csv", "r");
  //$data = fgetcsv($h, 1000, ",");
  while (($data = fgetcsv($h, 1000, ",")) !== FALSE)
  {
    $a[] = $data;
  }
  fclose($h);
  var_dump($a);
 ?>
