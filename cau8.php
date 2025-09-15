<?php
function solveQuadratic($a, $b, $c) {
    $eps = 1e-12; // ngưỡng so sánh số thực
    // Trường hợp a = 0 -> phương trình bậc nhất hoặc vô định
    if (abs($a) < $eps) {
        if (abs($b) < $eps) {
            if (abs($c) < $eps) {
                return ['type' => 'infinite', 'message' => 'Vô số nghiệm'];
            } else {
                return ['type' => 'none', 'message' => 'Vô nghiệm'];
            }
        } else {
            $x = -$c / $b;
            return ['type' => 'linear', 'root' => $x];
        }
    }

    $D = $b * $b - 4 * $a * $c;
    if ($D > $eps) {
        $sqrtD = sqrt($D);
        $x1 = (-$b + $sqrtD) / (2 * $a);
        $x2 = (-$b - $sqrtD) / (2 * $a);
        return ['type' => 'two', 'x1' => $x1, 'x2' => $x2];
    } elseif (abs($D) <= $eps) {
        $x = -$b / (2 * $a);
        return ['type' => 'one', 'x' => $x];
    } else {
        return ['type' => 'none', 'message' => 'Vô nghiệm thực (D < 0)'];
    }
}

// Ví dụ:
print_r(solveQuadratic(1, -3, 2)); // x=1 và x=2
print_r(solveQuadratic(1, 2, 1));  // nghiệm kép x = -1
print_r(solveQuadratic(0, 2, -4)); // phương trình bậc nhất x = 2
print_r(solveQuadratic(0, 0, 0));  // vô số nghiệm
