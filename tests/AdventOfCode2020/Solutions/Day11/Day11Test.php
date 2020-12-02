<?php

declare(strict_types=1);

namespace XonneX\AdventOfCode2020\Solutions\Day11;

use PHPUnit\Framework\TestCase;

class Day11Test extends TestCase
{
    public function testSolvePartOneExample(): void
    {
        $day11 = new Day11();

        /** @noinspection SpellCheckingInspection */
        $day11->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day11->solvePartOne());
    }

    public function testSolvePartOne(): void
    {
        $day11 = new Day11();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day11->solvePartOne());
    }

    public function testSolvePartTwoExample(): void
    {
        $day11 = new Day11();

        /** @noinspection SpellCheckingInspection */
        $day11->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day11->solvePartTwo());
    }

    public function testSolvePartTwo(): void
    {
        $day11 = new Day11();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day11->solvePartTwo());
    }
}
