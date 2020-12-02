<?php

declare(strict_types=1);

use XonneX\AdventOfCode2020\Solutions\AbstractSolution;

require __DIR__ . '/vendor/autoload.php';

$arguments = $argv;

$informationArray = [];

if (array_key_exists(1, $arguments)) {
    $day                = $arguments[1];
    $informationArray[] = printDay((int) $day);
} else {
    foreach (range(1, 24) as $day) {
        $informationArray[] = printDay((int) $day);
    }
}

function printDay(int $day): array
{
    $class = sprintf('XonneX\\AdventOfCode2020\\Solutions\\Day%s\\Day%s', $day, $day);

    echo sprintf('--- Day %s ---', $day) . PHP_EOL;

    if (!class_exists($class)) {
        echo 'Skipped day because class does not exist' . PHP_EOL;
        return [
            'day' => $day,
            'php_source' => "[Day{$day}.php](src/AdventOfCode2020/Solutions/Day{$day}/Day{$day}.php)",
            'php_unit_test' => "[Day{$day}Test.php](tests/AdventOfCode2020/Solutions/Day{$day}/Day{$day}Test.php)",
            'input' => "[input.txt](inputs/2020/day{$day}/input.txt)",
        ];
    }

    try {
        /** @var AbstractSolution $instance */
        $instance = new $class();
    } catch (RuntimeException $e) {
        echo 'Skipped day because "' . $e->getMessage() . '"' . PHP_EOL;
        return [
            'day' => $day,
            'php_source' => "[Day{$day}.php](src/AdventOfCode2020/Solutions/Day{$day}/Day{$day}.php)",
            'php_unit_test' => "[Day{$day}Test.php](tests/AdventOfCode2020/Solutions/Day{$day}/Day{$day}Test.php)",
            'input' => "[input.txt](inputs/2020/day{$day}/input.txt)",
        ];
    }

    try {
        $partOneSolution = $instance->solvePartOne();
        echo 'Part 1: ' . $partOneSolution . PHP_EOL;
    } catch (RuntimeException $e) {
        $partOneSolution = 'Skipped part 1 because "' . $e->getMessage() . '"';
        echo $partOneSolution . PHP_EOL;
    }

    try {
        $partTwoSolution = $instance->solvePartTwo();
        echo 'Part 2: ' . $instance->solvePartTwo() . PHP_EOL;
    } catch (RuntimeException $e) {
        $partTwoSolution = 'Skipped part 2 because "' . $e->getMessage() . '"';
        echo $partTwoSolution . PHP_EOL;
    }

    return [
        'day' => $day,
        'part_one_solution' => $partOneSolution,
        'part_two_solution' => $partTwoSolution,
        'php_source' => "[Day{$day}.php](src/AdventOfCode2020/Solutions/Day{$day}/Day{$day}.php)",
        'php_unit_test' => "[Day{$day}Test.php](tests/AdventOfCode2020/Solutions/Day{$day}/Day{$day}Test.php)",
        'input' => "[input.txt](inputs/2020/day{$day}/input.txt)",
    ];
}

$content = '';

foreach ($informationArray as $information) {
    $content .= '| ' . $information['day'] . ' ';
    $content .= '| ' . $information['part_one_solution'] ?? '-' . ' ';
    $content .= '| ' . $information['part_two_solution'] ?? '-' . ' ';
    $content .= '| ' . $information['php_source'] . ' ';
    $content .= '| ' . $information['php_unit_test'] . ' ';
    $content .= '| ' . $information['input'] . ' |';
    $content .= "\n";
}

file_put_contents(
    __DIR__ . '/SOLUTIONS.md',
    <<<EOF
# Solutions

| Day | Part One Solution | Part Two Solution | PHP Source | PHP Unit Test | Input |
|---|---|---|---|---|---|
{$content}
EOF
);