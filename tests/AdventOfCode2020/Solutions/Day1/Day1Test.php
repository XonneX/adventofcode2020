<?php

declare(strict_types=1);

namespace XonneX\AdventOfCode2020\Solutions\Day1;

use PHPUnit\Framework\TestCase;

class Day1Test extends TestCase
{
    public function testSolvePartTwo(): void
    {
        $day1 = new Day1();
        $day1->setDebugInput(<<<TXT
1721
979
366
299
675
1456
TXT
);

        self::assertSame('514579', $day1->solvePartOne());
    }

    public function testSolvePartOne(): void
    {
        $day1 = new Day1();
        $day1->setDebugInput(<<<TXT
1721
979
366
299
675
1456
TXT
        );

        self::assertSame('241861950', $day1->solvePartTwo());
    }
}
