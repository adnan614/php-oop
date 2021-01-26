
<?php

class Mobile
{
   public $model;
   function showModel($number){
        $this->model = $number;
      
       echo "Model Number: $this->model";
   } 
}

$samsung = new Mobile;
$samsung->showModel('A8');

?>