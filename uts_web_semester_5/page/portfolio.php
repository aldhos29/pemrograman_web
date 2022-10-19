<?php
    $row_portfolios = show("SELECT * FROM portfolio");
    $delay = 0;
?>

<section class="container active" id="portfolio">
    <div class="main-title">
        <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
    </div>
    <p class="port-text">
        Inilah beberapa Project yang telah saya selesaikan dengan bahasa pemrograman.
    </p>
    <div class="portfolios">
        <?php 
            foreach( $row_portfolios as $row_portfolio ) :
        ?>
        <div class="portfolio-item" data-aos="zoom-out-up" data-aos-duration="1000" data-aos-delay="<?php
            echo $delay;
            $delay += 100;
            if($delay == 300){
                $delay = 0;
            }
        ?>">
            <div class="image">
                <img src="assets/img/<?= $row_portfolio['gambar_portfolio'] ?>" alt="">
            </div>
            <div class="hover-items">
                <h3><?= $row_portfolio['nama_perusahaan'] ?></h3>
                <div class="icons">
                    <a href="https://<?= $row_portfolio['url_website'] ?>" class="icon" target="_blank">
                        <i class="fas fa-globe"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php 
            endforeach;         
        ?>
    </div>
</section>