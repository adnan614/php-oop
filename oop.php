
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
?>