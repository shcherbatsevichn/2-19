<?php error_reporting(-1);
//В массиве А(N) найти последний четный положительный элемент, кратный заданному числу р, 
//заменить его индексом и поставить в конец массива. 
$A = [1, -7, -4, 2, -7, 2, 3, 3, -199, 4, 1, 4, -20, 6, 6, 3, 8, -4, 13, 99];
$p = 4;

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
$a = do_this($A, $p);
print_r($a);

function do_this($array, $p){
    $valpos = 0;
    for($i = count($array) - 1; $i >= 0; $i--){
        if($array[$i] > 0){
            if($array[$i] % 2 == 0){
                if($array[$i] % $p ==0){
                    $valpos = $i;
                    $array[$i] = null;
                    break;
                }

            }
        }
    }
    $n = 0;
    for($i = 0; $i < count($array); $i++){
        if($i == count($array) - 1){
            $array[$n] = $array[$i];
            $array[$i] = $valpos;
            break;
        }
        if($array[$i] == null){
            continue;
        }
        $array[$n] = $array[$i];
        $n++;
    }
    return $array;
}        

