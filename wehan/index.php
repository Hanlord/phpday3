<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- exercise1 -->
<?php
       $i = 0;
       for( $i=0; $i<5; $i++)
       {
           
           echo (" wehan <hr>");
       }
       while($i < 10){
        $i++;
        echo(" wehan");
       }
       
       ?>
<?php
    $i= 0;
    do{
        $i++;
        echo (" wehan <br>");
    } while ($i < 30);
    
    ?>
    <!-- exercise2 -->
    <?php
    $array = array (1,9,15,26,38,41,53,65,73,85);
    foreach($array as $value)
       {
           if($value == 10) continue;
           echo "Value is $value <br/>";
       }
       ?>
    <!-- exercise3 -->
    <?php
      function randGen($iterartion)
      {
          $arr = [];
          for ($i = 0; $i < $iterartion; $i++) {
              array_push($arr, random_int(0, 100));
          }
          return $arr;
      }
      function maxNumber($randN)
      {
          $arr = randGen($randN);
          echo var_dump($arr);
          $max = max($arr);
          echo $max;
          echo "<br/>";
     }
     maxNumber (10);
       ?>
       <!-- exercise4 -->
       <?php
       for ($i = 1; $i <= 100; $i++) {
        $front = (0 === $i % 3);
        $back = (0 === $i % 5);
    
        if (!$front && !$back) {
            echo $i . PHP_EOL;
            echo "<br/>";
            continue;
        }
    
        if ($front) {
            echo 'Front-End';
            echo "<br/>";
        }
    
        if ($back) {
            echo 'Back-End';
            echo "<br/>";
        }
    
        echo PHP_EOL;
    }
       ?>
</body>
</html>

