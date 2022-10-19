<?php
    $sql = "SELECT * FROM about";
    $query = mysqli_query($conn, $sql);
    $row_about = mysqli_fetch_assoc($query);

    $row_cards = show("SELECT * FROM `card`");


?>

<section class="container about active" id="about">
    <div class="main-title">
        <h2>About <span>me</span><span class="bg-text">myself</span></h2>
    </div>
    <div class="about-container">
        <div class="left-about" data-aos="fade-up-right" data-aos-duration="1000" data-aos-once="true">
            <h4><?= $row_about['judul_about'] ?></h4>
            <?= $row_about['deskripsi_about'] ?>
            <div class="btn-con">
                <a href="assets/pdf/<?= $row_about['cv_about'] ?>" class="main-btn" target="_blank">
                    <span class="btn-text">Download CV</span>
                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                </a>
            </div>
        </div>
        <div class="right-about">
            <?php foreach( $row_cards as $row_card ) : ?>
            <div class="about-item" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000" data-aos-once="true" data-aos-offset="0">
                <div class="abt-text">
                    <p class="large-text"><?= $row_card['angka_card'] ?>+</p>
                    <p class="small-text"><?= $row_card['isi_card'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>