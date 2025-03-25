<?php
for ($i=1;$i<=5;$i++){
    for ($j=1;$j<=5;$j++){
        echo "●";
    }
    echo '<br/>';
}

function getSquareArea ($bottom, $top, $height)
{
    $square = ($bottom + $top) * $height * 1/2;
    return $square;
}
$area = getSquareArea (2,4,2);
print $area;
