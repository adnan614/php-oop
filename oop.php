
<?php

class Mobile
{
   public $model;
   function showModel($number){
       global $model; // $this->model = $number;
       $model = $number;
       echo "Model Number: $model";
   } 
}

$samsung = new Mobile;
$samsung->showModel('A8');
echo "<br>";
$lg = new Mobile;
$lg->showModel('lg G4');
?>