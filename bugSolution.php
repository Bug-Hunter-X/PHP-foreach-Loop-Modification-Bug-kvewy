function foo2(array $arr) {
  return array_filter($arr, function ($value) {
    return $value !== 'a';
  });
}

$arr = ['a', 'b', 'c', 'a', 'd'];
$result = foo2($arr);
print_r($result); // Output: Array ( [1] => b [2] => c [4] => d )