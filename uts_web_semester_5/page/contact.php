<?php
    $sql = "SELECT * FROM contact_page";
    $query = mysqli_query($conn, $sql);
    $row_contact_page = mysqli_fetch_assoc($query);

?>

<link rel="stylesheet" href="assets/styles/toast.css"> 
<section class="container contact about active" id="contact">
    <div class="contact-container">
        <div class="main-title">
            <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
        </div>
        <div class="contact-content-con">
            <div class="left-contact">
                <h4><?= $row_contact_page['judul_contact'] ?></h4>
                <p>
                    <?= $row_contact_page['sub_contact'] ?>
                </p>
                <div class="contact-info">
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lokasi</span>
                        </div>
                        <p>
                            : <?= $row_contact_page['lokasi'] ?>
                        </p>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                            <span>Email</span>
                        </div>
                        <p>
                            <span>: <?= $row_contact_page['email'] ?></span>
                        </p>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                            <span>Pendidikan</span>
                        </div>
                        <p>
                            <span>: <?= $row_contact_page['pendidikan'] ?></span>
                        </p>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fas fa-phone"></i>
                            <span>No. Telp</span>
                        </div>
                        <p>
                            <span>: <?= $row_contact_page['telp'] ?></span>
                        </p>
                    </div>
                    <div class="contact-item">
                        <div class="icon">
                            <i class="fas fa-globe-africa"></i>
                            <span>Bahasa</span>
                        </div>
                        <p>
                            <span>: <?= $row_contact_page['bahasa'] ?></span>
                        </p>
                    </div>
                </div>
                <div class="contact-icons">
                    <div class="contact-icon">
                        <a href="https://<?= $row_contact_page['facebook'] ?>" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://<?= $row_contact_page['instagram'] ?>" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://<?= $row_contact_page['github'] ?>" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://<?= $row_contact_page['youtube'] ?>" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right-contact">
                <?php if(isset($_GET['notif'])) {
                        if($_GET['notif'] == 1){ 
                ?>
                <div id="toast">
                    <div id="img">Notif</div><div id="desc">Berhasil Mengirim</div>
                </div>
                <?php }
                    }
                ?>
                <form action="page/input_contact.php" class="contact-form" method="post">
                    <div class="input-control i-c-2">
                        <input type="text" required placeholder="YOUR NAME" name="nama">
                        <input type="email" required placeholder="YOUR EMAIL" name="email">
                    </div>
                    <div class="input-control">
                        <input type="text" required placeholder="ENTER SUBJECT" name="subjek">
                    </div>
                    <div class="input-control">
                        <textarea name="pesan" id="" cols="15" rows="8" placeholder="Message Here..."></textarea>
                    </div>
                    <div class="submit-btn">
                        <button type="submit" class="main-btn" style="background-color:transparent; padding: 10px; cursor: pointer;">
                            <span class="btn-text">Kirim Pesan</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>