<?php
$people="SABURO";

switch ($people) {
    case "JIRO":
        echo "じろうです";
        break;
    case "Shiro":
    echo "しろうです";
    break;
    default:
        echo "三郎です";
        break;
}

echo "<br/>";


$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;
