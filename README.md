# PHP Average Calculation Bug

This repository demonstrates a common error in PHP when calculating the average of an array of numbers.  The `calculate_average` function initially appears robust but fails silently when encountering non-numeric values within the input array.  The solution addresses this issue by improving input validation and error handling. 

## Bug Description
The provided `bug.php` file contains a function `calculate_average` that calculates the average of an array. Although the function handles empty arrays gracefully, it does not gracefully handle cases where non-numeric elements are present, leading to unexpected results (division by zero) or incorrect averages.

## Solution
The `bugSolution.php` file offers a refined `calculate_average` function. This improved version includes robust input validation to ensure that only numeric values are considered for the calculation. If non-numeric data is found, it throws an exception with a descriptive error message, preventing unexpected results.