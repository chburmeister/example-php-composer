<?php
spl_autoload_register(function ($class) {
    @require_once('classes/' . $class . '.php');
});
 
$translator = new Translator();
$deMessage = $argv[1];
$enMessage = $translator->translateDeToEn($deMessage);
 
echo "$enMessage\n";
 
?>
