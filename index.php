<?php
declare(strict_types=1);
require __DIR__.'/header.php';
require __DIR__.'/functions.php';
require __DIR__.'/data.php';

  if (isset($_GET['sortBy']) && $_GET['sortBy'] === 'likes') {
    usort($articles, 'sortByLikes');
  } else {
    usort($articles, 'sortByDate');
  }

?>

<body>
  <div class="content-wrapper">
    <nav>
      <div class="d-flex justify-content-center">
        <h1>Fake News</h1>
      </div>
        <div class='d-flex justify-content-end'>
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="?sortBy=likes">Likes</a>
              <a class="dropdown-item" href="?sortBy=dates">Date</a>
            </div>
        </div>
      </div>
    </nav>
    <!--- \\\\\\\Post-->
    <?php foreach ($articles as $article):
      $author = getAuthorFromId($article['author'], $authors); ?>
    <div class="card gedf-card">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="mr-2">
                      <img class="rounded-circle" width="45" src="<?php echo $author['img']; ?>" alt="">
                    </div>
                    <div class="ml-2">
                      <div class="h5 m-0"><?php echo $author['name'] ?></div>
                      <div class="h7 text-muted"><?php echo $author['fullName'] ?></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i><?php echo $article['date']; ?></div>
            <a class="card-link" href="#">
              <h5 class="card-title"><?php echo $article['title']; ?></h5>
            </a>
            <p class="card-text">
              <?php echo $article['content']; ?>
            </p>
        </div>
        <div class="card-footer">
          <a href="#" class="card-link"><i class="fa fa-gittip"></i><?php echo $article['likes'] ?></a>
        </div>
    </div>
  <?php endforeach?>
  </div>
<?php require __DIR__.'/footer.php';
