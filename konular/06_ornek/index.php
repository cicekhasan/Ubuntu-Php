<?php
  $Personel = array();
  $Personel[] = array("Adi"=>"Nuri",  "Soyadi"=>"Akman", "SicilNo"=>"1111");
  $Personel[] = array("Adi"=>"Kemal", "Soyadi"=>"Mutlu", "SicilNo"=>"3333");
  $Personel[5]["Adi"]     = "Hasan";
  $Personel[5]["Soyadi"]  = "Cicek";
  $Personel[5]["SicilNo"] = "1383";

  echo "\n\n<h1>Dizi İçeriği</h1>";
  echo "<pre>";
  print_r($Personel);
  echo "<pre>";

  echo "\n\n<h1>JSON'a Çevrilmiş Biçimi</h1>";
  echo json_encode($Personel);
?>
