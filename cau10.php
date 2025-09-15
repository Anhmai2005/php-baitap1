<?php
function average(array $arr) {
    if (count($arr) === 0) return null; // hoặc return 0 nếu muốn
    return array_sum($arr) / count($arr);
}

// Ví dụ:
$data1 = [2, 4, 6, 8];
$data2 = [];
echo 'avg1 = ' . average($data1) . PHP_EOL; // 5
var_dump(average($data2)); // null
// In với 2 chữ số thập phân
echo 'avg1 (2 dec) = ' . number_format(average($data1), 2) . PHP_EOL;
