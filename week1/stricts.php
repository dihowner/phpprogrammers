<?php
declare(strict_types=1);

function addNumbers(int $a, int $b): int {
    return $a + $b;
}

echo addNumbers(5, 10); // Outputs: 15... floating numbers will throw an error because of strict typing