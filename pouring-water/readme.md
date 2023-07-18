# Water Vessels Problem

This PHP application solves the Water Vessels Problem, which involves determining the minimum number of steps required
to obtain a specific amount of water in one of the vessels.

## Problem Statement

Given two vessels with different capacities, the goal is to calculate the minimum number of steps needed to reach a 
desired amount of water in one of the vessels. The following operations are allowed, and each operation counts as one
step:

1. Emptying a vessel completely.
2. Filling a vessel completely.
3. Pouring water from one vessel to the other until the source vessel is empty or the destination vessel is full.

The application takes the capacities of the vessels (`a` and `b`) and the desired amount of water (`c`) as input and
outputs the minimum number of steps required. If it is impossible to obtain `c` liters of water, the output will be -1.

## Installation

1. Ensure you have PHP installed on your system.
2. Clone this repository or download the source code.
3. Navigate to the project directory.

## Usage

1. Open a terminal or command prompt.
2. Navigate to the project directory.
3. Run the following command to start the application:

   ```bash
   php water_vessels.php

## Example

Input:
2
5
2
3
2
3
4

Output:
2
-1

In the first test case, vessel A has a capacity of 5 liters, vessel B has a capacity of 2 liters, and the desired
amount of water is 3 liters. The application determines that it is possible to obtain 3 liters of water in vessel 
A with 2 steps.

In the second test case, vessel A has a capacity of 2 liters, vessel B has a capacity of 3 liters,
and the desired amount of water is 4 liters. Since it is impossible to obtain 4 liters of water using these vessels,
the application outputs -1.

## Contributing

If you would like to contribute to this project, you can follow these steps:

Fork the repository.
Create a new branch for your feature or bug fix.
Implement your changes.
Commit and push your changes to your fork.
Submit a pull request describing your changes.
License.

This project is licensed under the MIT License.