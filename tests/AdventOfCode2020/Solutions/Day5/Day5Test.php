<?php

declare(strict_types=1);

namespace XonneX\AdventOfCode2020\Solutions\Day5;

use PHPUnit\Framework\TestCase;

class Day5Test extends TestCase
{
    public function testSolvePartOneExample(): void
    {
        $day5 = new Day5();

        /** @noinspection SpellCheckingInspection */
        $day5->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day5->solvePartOne());
    }

    public function testSolvePartOne(): void
    {
        $day5 = new Day5();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day5->solvePartOne());
    }

    public function testSolvePartTwoExample(): void
    {
        $day5 = new Day5();

        /** @noinspection SpellCheckingInspection */
        $day5->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day5->solvePartTwo());
    }

    public function testSolvePartTwo(): void
    {
        $day5 = new Day5();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day5->solvePartTwo());
    }
}
