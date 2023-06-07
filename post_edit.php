<?php

$id = $_GET['id'];
$post = new App\Post();

$row = $post->edit($id);
?>

<h2>Edit Harga</h2>

<form action="post_proses.php" method="post">
    <input type="hidden" name="post_id" value="<?php echo $row['post_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="post_name" value="<?php echo $row['post_name']; ?>"></td>
        </tr>
        <tr>
            <td>KETERANGAN</td>
            <td><textarea name="post_text" id="" cols="30" rows="10"><?php echo $row['post_text']; ?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>