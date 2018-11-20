<?php
$arr = [
    "a"=>"hello",
    "b"=>"world"
];
//for(reset($arr);list($key,$v) = each($arr);){
//    echo $key."-:".$v."<br/>";
//}

$a=["a"=>1,"b"=>2];
$b=["c"=>3,"b"=>4];
$x = array_merge($a,$b);
print_r($x);