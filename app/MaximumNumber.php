<?php

declare(strict_types=1);

namespace App;

class MaximumNumber
{
    public function findMaximum(array $params): int
    {
        [$x, $y, $n] = $params;

        if(!$this->validateInput($x, $y, $n)){
            return -1;
        }
        
        return $this->getMaximumNumber($x, $y, $n);
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

    private function validateInput(int $x, int $y, int $n): bool
    {
        if(
            $x >= 2 &&
            $x <= pow(10, 9) &&
            $y >= 0 &&
            $y < $x &&
            $y <= $n &&
            $n <= pow(10, 9)
        ){
            return true;
        }
        
        return false;
    }
}