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
