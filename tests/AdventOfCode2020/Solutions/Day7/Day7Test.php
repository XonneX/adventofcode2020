<?php

declare(strict_types=1);

namespace XonneX\AdventOfCode2020\Solutions\Day7;

use PHPUnit\Framework\TestCase;

class Day7Test extends TestCase
{
    public function testSolvePartOneExample(): void
    {
        $day7 = new Day7();

        /** @noinspection SpellCheckingInspection */
        $day7->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day7->solvePartOne());
    }

    public function testSolvePartOne(): void
    {
        $day7 = new Day7();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day7->solvePartOne());
    }

    public function testSolvePartTwoExample(): void
    {
        $day7 = new Day7();

        /** @noinspection SpellCheckingInspection */
        $day7->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day7->solvePartTwo());
    }

    public function testSolvePartTwo(): void
    {
        $day7 = new Day7();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day7->solvePartTwo());
    }
}
