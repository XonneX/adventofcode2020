<?php

declare(strict_types=1);

namespace XonneX\AdventOfCode2020\Solutions\Day17;

use PHPUnit\Framework\TestCase;

class Day17Test extends TestCase
{
    public function testSolvePartOneExample(): void
    {
        $day17 = new Day17();

        /** @noinspection SpellCheckingInspection */
        $day17->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day17->solvePartOne());
    }

    public function testSolvePartOne(): void
    {
        $day17 = new Day17();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day17->solvePartOne());
    }

    public function testSolvePartTwoExample(): void
    {
        $day17 = new Day17();

        /** @noinspection SpellCheckingInspection */
        $day17->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day17->solvePartTwo());
    }

    public function testSolvePartTwo(): void
    {
        $day17 = new Day17();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day17->solvePartTwo());
    }
}
