<!--navbar end-->
<div class="row">
    <?php
    require_once "views/sidebar.php";
    ?>
    <!--music start-->
    <div class="col-8 d-block me-auto ms-auto">
        <a href="" class="btn-outline-secondary btn">ایرانی</a>
        <a href="" class="btn-outline-secondary btn">انگلیسی</a>
        <a href="" class="btn-outline-secondary btn">بی کلام</a>
        <a href="" class="btn-outline-secondary btn">عربی</a>
        <!--music in start-->
        <?php foreach ($musics as $music) : ?>
            <div class="bg-sidebar h-auto pb-3">
                <div class="card m-3 bg-sidebar h-auto" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md-2 mt-2">
                            <img src="<?= $music['Cover'] ?>" class="d-block mx-2 rounded img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title text-white"><?= $music['Name'] ?></h5>
                                <p class="card-text text-white">
                                    <small class=""><?= $music['SingerName'] ?></small>
                                </p>
                            </div>
                            <div class="card-footer">
                                <img src="views/assets/img/[CITYPNG.COM]Transparent HD White Music Wave Sound Waves Rhythm - 2000x2000 (1).png" class="card-text w-100" alt="">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <p class="card-text text-white p-4" style="text-align: left;"><small class="">
                                    < 54k</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto">
                    <button onclick="toggleMusic('<?= $music['Mp3'] ?>', this)" type="button" class="btn btn-orange d-block mt-4 w-100 mx-2 playBtn">پخش</button>
                </div>
            </div>
        <?php endforeach; ?>
        <!--music in end-->
    </div>
    <audio class="fixed-bottom w-100 p-3" src="" hidden controls></audio>
</div>
<script>
    const musicEl = document.querySelector('audio');
    const playBtns = document.querySelectorAll('.playBtn');
    let currentMusic = '';

    const toggleMusic = (srcMusic, btn) => {
        if (currentMusic != srcMusic) {
            currentMusic = musicEl.src = srcMusic;
        }
        
        if (musicEl.hidden) {
            musicEl.hidden = false;
        } 

        playBtns.forEach((playBtn) => {
            playBtn.textContent = 'پخش';
        })

        if (!musicEl.paused) {
            btn.textContent = 'پخش';
            musicEl.pause();
        }
        else {
            btn.textContent = 'توقف';
            musicEl.play();
        }
    }
</script>
</body>

</html>