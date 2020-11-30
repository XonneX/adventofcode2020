<?php

declare(strict_types=1);

use XonneX\AdventOfCode2020\Solutions\AbstractSolution;

require __DIR__ . '/vendor/autoload.php';

if (array_key_exists(1, $argv)) {
    $day = $argv[1];
    printDay((int) $day);
} else {
    foreach (range(1, 24) as $day) {
        printDay((int) $day);
    }
}

function printDay(int $day): void
{
    $class = sprintf('XonneX\\AdventOfCode2020\\Solutions\\Day%s\\Day%s', $day, $day);

    echo sprintf('--- Day %s ---', $day) . PHP_EOL;

    if (!class_exists($class)) {
        echo 'Skipped day because class does not exist' . PHP_EOL;
        return;
    }

    try {
        /** @var AbstractSolution $instance */
        $instance = new $class();
    } catch (RuntimeException) {
        echo 'Skipped day because of RuntimeException' . PHP_EOL;
        return;
    }

    try {
        echo 'Part 1: ' . $instance->solvePartOne() . PHP_EOL;
    } catch (RuntimeException) {
        echo 'Skipped part 1 because of RuntimeException' . PHP_EOL;
    }

    try {
        echo 'Part 2: ' . $instance->solvePartTwo() . PHP_EOL;
    } catch (RuntimeException) {
        echo 'Skipped part 2 because of RuntimeException' . PHP_EOL;
    }
}