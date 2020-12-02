<?php

declare(strict_types=1);

namespace XonneX\AdventOfCode2020\Solutions\Day12;

use PHPUnit\Framework\TestCase;

class Day12Test extends TestCase
{
    public function testSolvePartOneExample(): void
    {
        $day12 = new Day12();

        /** @noinspection SpellCheckingInspection */
        $day12->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day12->solvePartOne());
    }

    public function testSolvePartOne(): void
    {
        $day12 = new Day12();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day12->solvePartOne());
    }

    public function testSolvePartTwoExample(): void
    {
        $day12 = new Day12();

        /** @noinspection SpellCheckingInspection */
        $day12->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day12->solvePartTwo());
    }

    public function testSolvePartTwo(): void
    {
        $day12 = new Day12();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day12->solvePartTwo());
    }
}
