<?php
//連想配列を使ってみよう
$arry = [
    'name' => 'Bob', //キーとバリュー対になって格納されているものを連想配列という
    'age' => 12,
    'sports' => ['baseball', 'swimming']
];
unset($arry['name']); //特定のキーを削除したいときにunsetを使用。（array_shiftは連想配列には向かない）
echo $arry['name'];
$arry['age'] += 24; //元々のageに２４足されたものを表示したい時
echo $arry['age'];
echo $arry['sports'][1];
