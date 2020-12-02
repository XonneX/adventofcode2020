<?php

declare(strict_types=1);

namespace XonneX\AdventOfCode2020\Solutions\Day23;

use PHPUnit\Framework\TestCase;

class Day23Test extends TestCase
{
    public function testSolvePartOneExample(): void
    {
        $day23 = new Day23();

        /** @noinspection SpellCheckingInspection */
        $day23->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day23->solvePartOne());
    }

    public function testSolvePartOne(): void
    {
        $day23 = new Day23();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day23->solvePartOne());
    }

    public function testSolvePartTwoExample(): void
    {
        $day23 = new Day23();

        /** @noinspection SpellCheckingInspection */
        $day23->setDebugInput(<<<TXT
NO_EXAMPLE_INITIALIZED
TXT
        );

        self::assertSame('NO_SOLUTION_INITIALIZED', $day23->solvePartTwo());
    }

    public function testSolvePartTwo(): void
    {
        $day23 = new Day23();

        self::assertSame('NO_SOLUTION_INITIALIZED', $day23->solvePartTwo());
    }
}
