<?php

declare(strict_types=1);

namespace Tests;

use App\MaximumNumber;
use PHPUnit\Framework\TestCase;

class MaximumNumberTest extends TestCase
{
    /** 
     * @test 
     * @dataProvider getCasesByInputNumbers
    */
    public function findMaximumNumber(
        array $inputNumbers,
        int $expectedResult
    ): void
    {
        $operation = new MaximumNumber();
        $result = $operation->findMaximum($inputNumbers);

        $this->printResults($inputNumbers, $result);
        $this->assertEquals($result, $expectedResult);
    }

    private function printResults(array $inputNumbers, int $result): void
    {
        $text = 'Input: ' . implode(',', $inputNumbers) .' | Output: ' . $result . PHP_EOL;
        fwrite(STDOUT, print_r($text, TRUE));
    }

    public static function getCasesByInputNumbers(): array
    {
        return [
            'When the find function receives the parameters 7,5,12345' => [
                'inputNumbers' => [7,5,12345],
                'expectedResult' => 12339,
            ],
            'When the find function receives the parameters 5,0,4' => [
                'inputNumbers' => [5,0,4],
                'expectedResult' => 0,
            ],
            'When the find function receives the parameters 10,5,15' => [
                'inputNumbers' => [10,5,15],
                'expectedResult' => 15,
            ],
            'When the find function receives the parameters 17,8,54321' => [
                'inputNumbers' => [17,8,54321],
                'expectedResult' => 54306,
            ],
            'When the find function receives the parameters 499999993,9,1000000000' => [
                'inputNumbers' => [499999993,9,1000000000],
                'expectedResult' => 999999995,
            ],
            'When the find function receives the parameters 10,5,187' => [
                'inputNumbers' => [10,5,187],
                'expectedResult' => 185,
            ],
            'When the find function receives the parameters 2,0,999999999' => [
                'inputNumbers' => [2,0,999999999],
                'expectedResult' => 999999998,
            ],
            'When the find function receives bad parameters' => [
                'inputNumbers' => [0,0,0],
                'expectedResult' => -1,
            ]
        ];
    }
}