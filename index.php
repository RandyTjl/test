<?php
//phpinfo();
function abso($num){
    if($num >= 0){
        return $num;
    }else{
        //return abs($num);
        return $num*(-1);
    }
}

$num = -9;
echo $num."的绝对值是".abso($num);

?>