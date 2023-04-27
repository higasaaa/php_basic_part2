<?php
/**
 * 税率計算のための関数を記述するためのファイル
 * @author higasa
 * @since 1.0.0
 */

/**
 * 税込み金額を取得する関数
 * 
 * @param int $base_price　価格
 * @param floot $tax_rate 税率
 * 
 * @return int 税込み金額
 * @see https://example.com/
 * 
 */
function with_tax($base_price, $tax_rate = 0.1) {
    $sum_price = $base_price + ($base_price * $tax_rate);
    $sum_price = round($sum_price);
    return $sum_price;
}
$price = $with_tax($price, 0.08); //上でデフォルト引数で消費税率を設定してあげてもここで記述してあげれば、上のデフォルト引数は無視された答えになる
echo $price;