<?php
function printHollowRect($rows = 5, $cols = 7) {
    if ($rows <= 0 || $cols <= 0) return;
    // <pre> để giữ định dạng xuống dòng trên trình duyệt
    echo "<pre>";
    for ($r = 1; $r <= $rows; $r++) {
        for ($c = 1; $c <= $cols; $c++) {
            if ($r == 1 || $r == $rows || $c == 1 || $c == $cols) {
                echo '*';
            } else {
                echo ' ';
            }
        }
        echo PHP_EOL;
    }
    echo "</pre>";
}

// Gọi hàm
printHollowRect(5, 7);
