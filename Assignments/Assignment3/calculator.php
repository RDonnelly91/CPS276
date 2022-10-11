<?php
class calculator{
   public $operator;
   public $number1;
   public $number2;
   public $answer;
    public $message = "You must enter a string and 2 numbers";
    
    function calc($operator, $number1, $number2){
        if(is_string($operator)){
            if(is_int($number1) or is_double($number1)){
                if(is_int($number2) or is_double($number2)){
                    if($operator === "+"){
                        $answer = ($number1 + $number2);
                        echo "The product of the number is $answer";
                    }
                    elseif($operator === "-"){
                        $answer = ($number1 - $number2);
                        echo "\r\nThe product of the number is $answer";
                    }
                    elseif($operator === "*"){
                        $answer = ($number1 * $number2);
                        echo "\nThe product of the number is $answer";
                    }
                    elseif($operator === "/" and $number2 != 0){
                        $answer = ($number1 / $number2);
                        echo "\nThe product of the number is $answer";
                    }else{
                        echo "Invalid cannot divide by 0";
                    }

                }else{
                    echo "Invalid second number entered";
                }
            }else{
                echo "Invalid  first number entered";
            }
        }else{
            echo "Invalid operator entered";
        }
    }
    }
    
?>

