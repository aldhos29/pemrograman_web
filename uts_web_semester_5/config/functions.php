<?php
    $namaserver = "localhost";
    $username   = "root";
    $password   = "";
    $nama_db    = "aldho_portfolio_uts";

    $conn       = mysqli_connect($namaserver, $username, $password, $nama_db);

    $preUrl = explode("/", $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

    // base url
    function base_url(){
        global $preUrl;
        $url    = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $preUrl[0] . "/" . $preUrl[1] . "/";
        return $url;
    }

    //show data
    function show($sql) {
        global $conn;
        $result = mysqli_query($conn, $sql);
        $rows   = [];
        while ( $row=mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }

        return $rows;
    }
?>