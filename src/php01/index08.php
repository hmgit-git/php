<?php
$people = [
    ['TARO', 25, 'men'],
    ['JIRO', 20, 'men'],
    ['HANAKO', 16, 'women']
];

foreach ($people as $person){
    echo $person[0].'(' . $person[1] . '才' . $person[2] . ')' . '<br/>';
}