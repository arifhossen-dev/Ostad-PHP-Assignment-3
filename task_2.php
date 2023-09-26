<?php
$numbers = range(1, 10);

function getOddNumbers(array $arr): array
{
  return array_filter($arr, function ($item) {
    if ($item % 2 !== 0) {
      return $item;
    }
  });
}

print_r(getOddNumbers($numbers));
