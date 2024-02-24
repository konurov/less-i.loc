<?php
  error_reporting(-1);

  /*
  $_myName // допустимо
  $myName // допустимо
  $__ myvar // допустимо
  $myVar21 // допустимо
  $_1Big // недопустимо - после подчеркивания должна стоять буква
  $1Big // недопустимо - должно начинаться с буквы или символа подчеркивания
  $_er-t // допустимо - содержит не буквенно-цифровой символ (-)

  */
   $myName = "Hello";
   $title = 'hello world!';
   $title = 'page title';
   $fruit = "apple $title";
   $winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s";
   define("PAGE2", "new page");
   // define("PAGE", "new page2");
   const PAGE3 =  "New page3";
// $winnieThePooh = "Hello, I'm Winnie";
        /*Типы данных в PHP
            string (строки)
            integer (целые числа)
            double (дробные числа)
            boolean (логический тип)
            NULL
            array (массивы)
            object (объекты)
            resource (ресурсы)
        */
$var = false;

var_dump($var);
echo $var."<br>";
print(gettype($var)."<br>");

$var = 10;
$str = 'This is "string". $var';

echo $str."<br>";

$n = -10;
print("-10" + 5);

// HEREDOC
// NOWDOC
$num = <<<HERE
This is 'string' $var
HERE;
echo $num;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #echo "Салам!";
    //echo "Салам!";
    /*print("Салам!");*/ 
    echo "<h2>$winnie_pooh</h2>";

    echo "<h4>PAGE</h4>";
 ?>
 <h4><?php echo PAGE2; ?></h4>
 <h4><?php echo PAGE3; ?></h4>


</body>
</html>

Строки | Strings PHP 
https://wm-school.ru/php/php_string.php

Различные типы чисел в PHP

https://wm-school.ru/php/php_numbers.php

