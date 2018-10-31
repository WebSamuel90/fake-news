<?php

declare(strict_types=1);

/**
 * [getAuthorFromId retrieves author based on ID]
 * @param  int   $id      [ID to compare against]
 * @param  array $authors [Author array]
 * @return array          [Authors sub-array]
 */
function getAuthorFromId(int $id, array $authors): array {
  foreach ($authors as $author) {
    if ($author['id'] === $id) {
      return $author;
    }
  }
  return [];
}

/**
 * [sortByDate Sorts post by date]
 * @param  array $a
 * @param  array $b
 * @return int
 */
function sortByDate(array $a, array $b): int {
return strcmp($a['date'], $b['date']);
}

/**
 * [sortByLikes Sorts post by likes]
 * @param  array $a
 * @param  array $b
 * @return int
 */
function sortByLikes(array $a, array $b):int {
    if ($a['likes'] == $b['likes']) {
        return 0;
    }
    return ($a['likes'] < $b['likes']) ? 1 : -1;
}
