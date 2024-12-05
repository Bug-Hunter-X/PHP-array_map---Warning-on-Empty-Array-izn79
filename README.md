# PHP array_map() Warning on Empty Array

This repository demonstrates a common PHP error encountered when using the `array_map()` function with an array that might be empty.  The `bug.php` file shows the problematic code, while `bugSolution.php` provides a robust solution.

The issue arises because `array_map()` expects an array as its second argument. If an empty array is passed, a warning is issued. The solution adds a check to handle this situation gracefully.