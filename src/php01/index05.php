<?php
$count = 0;

for ($count = 1; $count <= 50; $count++){
    if($count % 15 == 0){
        echo "FizzBuzz" . "<br />";
    }elseif($count % 5 === 0){
        echo "Buzz" . "<br />";
    }elseif($count % 3 === 0 ){
        echo "Fizz" . "<br />";
    }else{
        echo $count . "<br />";
    }
}
$bol = "○";
for ($i = 1; $i <= 5 ; $i++){
    for ($k = 1; $k <= 5 ; $k++){
        echo $bol;
    }
    echo "<br />";
}