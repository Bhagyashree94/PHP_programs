<?php

class Bicycle{

  var $brand;
  var $model;
  var $year;
  var $description = "Used Bicycle";
  var $weight_kg = 0.0;


  fuction name(){
    return $this->brand . " "  . $this->model . " (" . $this->year . ")";
  }

  fuction weight_lbs(){
    return floatval($this.weight_kg) * 2.2046226218;
  }

  function set_weight_lbs($value){
     $this->weight_kg = floatval($value)/ 2.2046226218;
  }
}
  $bycicle1 = new Bicycle(){
  $bicycle1->brand="Sentra";
  $bicycle1->model="LS";
  $bicycle1->year="2013";
  $bicycle1->description="Awesome";
  $bicycle1->weight_kg="11.0";

  $bycicle2 = new Bicycle(){
  $bicycle2->brand="Skoda";
  $bicycle2->model="R";
  $bicycle2->year="2015";
  $bicycle2->description="Awesome!!!!";
  $bicycle2->weight_kg="15.0";

  echo $bicycle1->name() . "<br />";
  echo $bicycle2->name() . "<br />";

  echo $bicycle1->weight_kg . "<br />";
  echo $bicycle1->weight_lbs() . "<br />";

  echo $bicycle1->weight_kg . "<br />";
  echo $bicycle2->set_weight_lbs() . "<br />";
?>
