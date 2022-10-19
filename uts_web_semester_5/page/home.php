<?php
    $sql = "SELECT * FROM home";
    $query = mysqli_query($conn, $sql);
    $row_home = mysqli_fetch_assoc($query);

?>

<header class="container header active" id="home">
    <div class="header-content">
        <div class="left-header" data-aos="fade-right" data-aos-duration="1000">
            <div class="h-shape"></div>
            <div class="image">
                <img src="assets/img/<?= $row_home['gambar_home'] ?>" alt="">
            </div>
        </div>
        <div class="right-header" data-aos="fade-left" data-aos-duration="1000">
            <h1 class="name">
                <?= $row_home['judul_home'] ?>
            </h1>
            <p>
                <?= $row_home['deskripsi_home'] ?>
            </p>
            <div class="btn-con">
                <a href="assets/pdf/<?= $row_home['cv_home'] ?>" class="main-btn" target="_blank">
                    <span class="btn-text">Download CV</span>
                    <span class="btn-icon"><i class="fas fa-download"></i></span>
                </a>
            </div>
        </div>
    </div>
</header>