function foo(array $arr): array {
  // This will cause a warning if the array is empty
  return array_map(function ($item) { return $item * 2; }, $arr);
}