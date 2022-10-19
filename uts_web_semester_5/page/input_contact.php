<?php
    include "../config/functions.php";
    if(isset($_POST['nama'])){
        $nama         = $_POST["nama"];
        $email        = $_POST["email"];
        $subjek       = $_POST["subjek"];
        $pesan        = $_POST["pesan"];
        $queryContact  = "INSERT INTO `contact_form` (`id_contact_form`, `nama`, `email`, `subjek`, `pesan`) 
                        VALUES (NULL, '$nama', '$email', '$subjek', '$pesan')";
        $exeContact    = mysqli_query($conn, $queryContact);

        echo ("<script LANGUAGE='JavaScript'> window.location.href='../?page=contact&notif=1'; </script>");
    }

    
?>