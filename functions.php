<?php

declare(strict_types=1);


function randomDate($sStartDate, $sEndDate, $sFormat = 'Y-m-d')
{
    // Convert the supplied date to timestamp
    $fMin = strtotime($sStartDate);
    $fMax = strtotime($sEndDate);
    // Generate a random number from the start and end dates
    $fVal = mt_rand($fMin, $fMax);
    // Convert back to the specified date format
    return date($sFormat, $fVal);
}

function getAuthorFromId(int $id, array $authors): array {
  foreach ($authors as $author) {
    if ($author['id'] === $id) {
      return $author;
    }
  }
  return [];
}

// Function to sort by date descending
function sortByDate(array $a, array $b): int {
return strcmp($a['date'], $b['date']);
}
// Function to sort by likes descending
function sortByLikes($a, $b){
    if ($a['likes'] == $b['likes']) {
        return 0;
    }
    return ($a['likes'] < $b['likes']) ? 1 : -1;
}
