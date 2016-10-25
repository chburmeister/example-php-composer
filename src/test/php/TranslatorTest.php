<?php
spl_autoload_register(function ($class) {
    @require_once('src/main/php/classes/' . $class . '.php');
});
 
class TranslatorTest extends PHPUnit_Framework_TestCase {
 
  public function testTranslateDeToEnPositive(){
    $expectedResult = 'hello';
 
    $translator = new Translator();
    $deMessage = 'hallo';
    $actualResult = $translator->translateDeToEn($deMessage);
 
    $this->assertEquals($expectedResult, $actualResult);
  }
 
  public function testTranslateDeToEnNegative(){
    $expectedResult = 'not in dictionary';
 
    $translator = new Translator();
    $deMessage = 'spongebob';
    $actualResult = $translator->translateDeToEn($deMessage);
 
    $this->assertEquals($expectedResult, $actualResult);
  }
 
}
 
?>
