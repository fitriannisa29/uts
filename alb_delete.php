<?php

$id = $_GET['id'];

$alb = new App\Album();
$rows = $alb->delete($id);

?>

<div class="info">
      Data berhasil dihapus!
      <a href="index.php?=alb_tampil">Kembali</a>
</div>