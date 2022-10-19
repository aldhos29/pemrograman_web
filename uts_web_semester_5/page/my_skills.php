<?php

    $row_skills = show("SELECT * FROM `skill`");
    $row_timelines = show("SELECT * FROM `timeline`");


?>

<section class="container active" id="my_skills">
    <div class="main-title">
        <h2>My <span>Skills</span><span class="bg-text">Stats</span></h2>
    </div>
    <div class="about-stats">
        <div class="progress-bars">
            <?php foreach( $row_skills as $row_skill ) : ?>
            <div class="progress-bar">
                <p class="prog-title"><?= $row_skill['nama_skill'] ?></p>
                <div class="progress-con">
                    <p class="prog-text"><?= $row_skill['progress_persen'] ?>%</p>
                    <div class="progress">
                        <span style="width:<?= $row_skill['progress_persen'] ?>%;"></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <h4 class="stat-title">My Timeline</h4>
    <div class="timeline">
        <?php foreach( $row_timelines as $row_timeline ) : ?>
        <div class="timeline-item">
            <div class="tl-icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000">
                <p class="tl-duration"><?= $row_timeline['tahun_timeline'] ?></p>
                <h5><?= $row_timeline['jabatan'] ?><span> - <?= $row_timeline['nama_company'] ?></span></h5>
                <p>
                    <?= $row_timeline['deskripsi_timeline'] ?>
                </p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>