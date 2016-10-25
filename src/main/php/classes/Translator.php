<?php
 
class Translator{
 
  public function Translator(){
 
  }
 
  public function translateDeToEn($message){
    // some code goes here
    if ($message == 'hallo'){
      return 'hello';
    }
    else {
      return 'not in dictionary';
    }
  }
}
 
?>
