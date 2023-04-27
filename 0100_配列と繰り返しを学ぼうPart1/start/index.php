<?php
$arry = ['taro', 'hanako', 'jiro'];
$arry[1] = 'sachiko'; //hanakoの値をsachikoに変更
$arry[] = 'saburo'; //配列の中にsaburo追加
// var_dump($arry); //追加の確認
// echo $arry[1]; //sachikoを取り出す

for($i = 0; $i < count($arry); $i++) { //変数iが特定の条件を満たしたときに繰り返し処理を抜ける。またiに１ずつ足していく。iが０から4までの時に繰り返し処理が実行される.
    echo '<div>', $arry[$i], '<div>';
}

// この処理は短くかけ、良く各処理
foreach($arry as  $i => $v) { //$i =>の記述を足すことでインデックスの値を欲しい場合に記述
    echo '<div>', $i, $v, '<div>'; //$i:インデックスの値を取り出すことができる
}
