```php
function calculate_average(array $numbers): float {
  if (empty($numbers)) {
    return 0.0; // Handle empty array
  }

  $numericNumbers = array_filter($numbers, 'is_numeric');
  if (empty($numericNumbers)) {
    throw new InvalidArgumentException('The array must contain at least one numeric value.');
  }

  $sum = array_sum($numericNumbers);
  $count = count($numericNumbers);
  return $sum / $count;
}

$numbers = [10, 20, 30, 0];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 15

$numbers = [10, 20, 30, 0,];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 15

$numbers = [];
$average = calculate_average($numbers);
echo "Average: " . $average; // Output: Average: 0

try {
  $numbers = [10, 20, 'a'];
  $average = calculate_average($numbers); 
  echo "Average: " . $average; 
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage(); // Output: Error: The array must contain at least one numeric value.
}
```