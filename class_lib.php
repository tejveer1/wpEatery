<?php

class MenuItem {

   //private $itemname = "steak";
   //private $desc = "Fresh flame broiled AAA Angus beef done to perfection.";
   //private $price = "$49.99";

   private $itemname = "";
   private $desc = "";
   private $price = "";

   function __construct($param1, $param2, $param3) {
      $this->itemname = $param1;
      $this->desc = $param2;
      $this->price = $param3;
   }

   function get_menuitem() {

      return $this->itemname;
   }

   function get_desc() {

      return $this->desc;
   }

   function get_price() {

      return $this->price;
   }
}

?>

