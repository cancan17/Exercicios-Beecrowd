<?php
while (true) {
    fscanf(STDIN, "%d %d %d %d\n", $H1, $M1, $H2, $M2);

    if ($H1 == 0 && $M1 == 0 && $H2 == 0 && $M2 == 0) {
        break;
    } else {
        $x = $H1 * 60 + $M1;
        $y = $H2 * 60 + $M2;

        if ($y <= $x) {
            $y += 24 * 60;
        }

        echo abs($y - $x) . "\n";
    }
}
?>