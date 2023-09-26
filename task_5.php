<?php
function generatePassword($length)
{
  $alphabetLower = range('a', 'z');
  $alphabetUpper = range('A', 'Z');
  $numbers = range(0,9);
  $specialChar = "(!@#$%^&*()_+)";

  $mergedArray = array_merge($alphabetLower,$alphabetUpper,$numbers);
  $allString = implode('',$mergedArray).$specialChar;
  $result = substr(str_shuffle($allString),0,$length);
  return $result;
}

echo generatePassword(12);

// The easy way to generate it
// echo base64_encode(random_bytes(12));