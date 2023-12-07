<div class="row">
  <?php
  require_once "views/sidebar.php";
  ?>
  <!--singer start-->
  <div class="col-8 d-block me-auto ms-auto">
    <h2>البوم ها :</h2>
    <br>
    <!-- songs starts -->
    <div class="row">
      <?php foreach ($albums as $album) : ?>
        <a href="/avamusic/albums?id=<?= $album['ID'] ?>" class="col-3 p-2">
          <div class="card">
            <img src="<?= $album['Poster']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text text-center"><?= $album['Name']; ?></p>
              <p class="card-text text-center"><?= $album['SingerName']; ?></p>
            </div>
          </div>
        </a>
      <?php endforeach; ?>

    </div>
    <!-- songs end -->
    <!--singer end-->

  </div>
</div>
</body>

</html>