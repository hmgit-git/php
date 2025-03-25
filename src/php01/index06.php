<?php
$count=0;
while ($count<=100){
    if($count%3===0||$count>=20){
        $count++;
        continue;
    }
    echo $count.'<br/>';
    $count++;
}


$count = 0;

while ($count <= 100) {
  if ($count === 20) {
    break;
  }
  if ($count % 3 === 0) {
    $count++;
    continue;
  }
  echo $count . '<br />';
  $count++;
}


$i = 0;
do {
  echo $i . '<br />';
  $i++;
} while ($i < 5);

$num=0;
do {
    echo "\$num = ".$num.'<br/>';
    $num+=1;
}while ($num<3);

