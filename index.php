<?php

declare(strict_types=1);

require __DIR__.'/header.php'; //concatination ;)
require __DIR__.'/functions.php';
require __DIR__.'/data.php';

  if (isset($_GET['sortBy']) && $_GET['sortBy'] === 'likes') {
    usort($articles, 'sortByLikes');
  } else {
    usort($articles, 'sortByDate');
  }
  require __DIR__.'/posts.php';

  require __DIR__.'/footer.php';
