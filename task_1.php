<?php
$text = "The quick brown fox jumps over the lazy dog.";

function getModifiedText($prem): String
{
  $lowercaseData = strtolower($prem);
  return str_replace('brown', 'red', $lowercaseData);
}

echo getModifiedText($text);
