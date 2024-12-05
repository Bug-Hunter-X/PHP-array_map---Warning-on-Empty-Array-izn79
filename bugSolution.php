function foo(array $arr): array {
  //Check if array is empty
  if(empty($arr)){
    return [];
  }
  return array_map(function ($item) { return $item * 2; }, $arr);
}
