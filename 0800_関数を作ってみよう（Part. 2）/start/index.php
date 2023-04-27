<?php
/**
 * 関数を作ってみよう（Part. 2）
 * 
 * - デフォルト引数を設定可能
 * - 文字列を関数として実行可能
 */

//  $price = 1000;

//  function with_tax($base_price, $tax_rate = 0.1) { //毎回設定するのが面倒な場合にデフォルトで消費税率を決めてあげると便利
//     $sum_price = $base_price + ($base_price * $tax_rate);
//     $sum_price = round($sum_price); //小数点以下は四捨五入するroundという関数を使用する
//     return $sum_price; //関数の戻り値
//  }

//  $price = with_tax($price, 0.08); //上でデフォルト引数で消費税率を設定してあげてもここで記述してあげれば、上のデフォルト引数は無視された答えになる
//  echo $price;

 $price = 1000;

 function with_tax($base_price, $tax_rate = 0.1) { //毎回設定するのが面倒な場合にデフォルトで消費税率を決めてあげると便利
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price); //小数点以下は四捨五入するroundという関数を使用する
    return $sum_price; //関数の戻り値
 }

 $fn = "with_tax"; //PHPは文字列をそのまま実行できるプログラミング言語　（独特）
 $price = $fn($price, 0.08); //上でデフォルト引数で消費税率を設定してあげてもここで記述してあげれば、上のデフォルト引数は無視された答えになる
 echo $price;
