<?php
/**
 * 関数を作ってみよう（Part. 1）
 * 
 * - 特定の機能を使いまわせるようにまとめたもの。
 * - Input（引数）、Output（戻り値）を設定する
 * - returnが実行された時点でその関数の処理終了
 */
$numbers = [1, 2, 3, 4];
$numbers2 = [1, 2, 3];

function sum($nums) { //渡される引数と渡す引数が違っていいても良い（渡される方）
    $sum = 0;
    foreach($nums as $num) {
        $sum += $num;
    }
    return $sum; //戻り値。returnが呼ばれるち関数の処理は終わる
}

$result = $sum($numbers);
echo "合計:{$result}<br>";

// sum($numbers); //渡される引数と渡す引数が違っていいても良い（渡す方）
// sum($numbers2); //引数を渡してあげればいい


// $sum2 = 0;
// foreach($numbers2 as $num2) {
//     $sum2 += $num2;
// }
// echo "合計:{$sum2}";
