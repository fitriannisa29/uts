<?php

require_once "inc/Koneksi.php";
require_once "app/Album.php";

$alb = new App\Album();

if (isset($_POST['btn_simpan'])) {
    $alb->simpan();
    header("location:index.php?hal=alb_tampil");
}

if (isset($_POST['btn_update'])) {
    $alb->update();
    header("location:index.php?hal=alb_tampil");
}