<?php

declare(strict_types=1);

namespace App;

class MaximumNumber
{
    public function findMaximum(array $params): int
    {
        [$x, $y, $n] = $params;
        
        $maximun = $this->getMaximumNumber($x, $y, $n);
        
        return (($maximun >= 0 && $maximun <= $n) ? $maximun : 0);
    }

    private function getMaximumNumber(int $x, int $y, int $n): int
    {
        $maximun = 0;
        for ($k = 0; $k <= $n; $k++) {
            if ($k % $x == $y) {
                $maximun = max($maximun, $k);
            }
        }
        return $maximun;
    }
}