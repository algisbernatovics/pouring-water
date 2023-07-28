<?php

function minSteps($a, $b, $c)
{
    $visited = []; // Set to store visited states
    $queue = new SplQueue(); // Queue to perform BFS

    $queue->enqueue([0, 0, 0]); // Initial state: (x, y, steps)

    while (!$queue->isEmpty()) {
        [$x, $y, $steps] = $queue->dequeue();

        // Check if target state is reached
        if ($x === $c || $y === $c) {
            return $steps;
        }

        // Try all possible operations
        $operations = [
            [$a, $y], // Fill the first vessel
            [$x, $b], // Fill the second vessel
            [0, $y], // Empty the first vessel
            [$x, 0], // Empty the second vessel
            [min($x + $y, $a), max(0, $x + $y - $a)], // Pour water from second vessel to first
            [max(0, $x + $y - $b), min($x + $y, $b)], // Pour water from first vessel to second
        ];

        // Add new states to the queue
        foreach ($operations as [$nx, $ny]) {
            if (!isset($visited[$nx][$ny])) {
                $visited[$nx][$ny] = true;
                $queue->enqueue([$nx, $ny, $steps + 1]);
            }
        }
    }

    return -1; // Target state is unreachable
}

// Read the number of test cases
$t = intval(trim(fgets(STDIN)));

// Process each test case
for ($i = 0; $i < $t; $i++) {
    $a = intval(trim(fgets(STDIN))); // Capacity of first vessel
    $b = intval(trim(fgets(STDIN))); // Capacity of second vessel
    $c = intval(trim(fgets(STDIN))); // Target amount of water

    // Calculate the minimum steps required
    $steps = minSteps($a, $b, $c);

    // Print the result
    echo $steps . "\n";
}