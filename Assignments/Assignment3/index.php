


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
  </head>
  <body>
<?php
require_once "calculator.php";
class custom_exception extends Exception{
    public function error_message(){
        $error_message = "You must enter a string and 2 numbers";
        return $error_message;
    }
}
$Calculator = new Calculator();
try{
echo $Calculator->calc("/", 10, 0); 
echo $Calculator->calc("*", 10, 2); 
echo $Calculator->calc("/", 10, 2); 
echo $Calculator->calc("-", 10, 2); 
echo $Calculator->calc("+", 10, 2); 
echo $Calculator->calc("*", 10); 
echo $Calculator->calc(10);
}
catch (custom_exception $e){
    echo $e->error_message;
}
?>
  </body>
</html>
