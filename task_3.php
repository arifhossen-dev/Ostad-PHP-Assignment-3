<?php
$grades = [85, 92, 78, 88, 95];

function descendingArray(array $pram): array
{
  rsort($pram);

  return $pram;
}

print_r(descendingArray($grades));