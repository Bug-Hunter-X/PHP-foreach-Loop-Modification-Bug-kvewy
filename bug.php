function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'a') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )

// the correct output should be ['b', 'c', 'd']

function foo2(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'a';
  });
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo2($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )