function foo(array $arr): array {
  //This function is intended to remove duplicate values from an array while preserving the original key-value pairs.
  //However, it contains a subtle bug related to how it handles keys in the return array when there are duplicate values.
  $result = [];
  foreach ($arr as $key => $value) {
    if (!in_array($value, $result)) {
      $result[$key] = $value;
    }
  }
  return $result;
}

$test_array = ['a' => 1, 'b' => 2, 'c' => 1, 'd' => 3];
$result = foo($test_array);
print_r($result); //The output is not the expected outcome due to the logic error in handling keys
