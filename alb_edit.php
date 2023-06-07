<?php

$id = $_GET['id'];
$alb = new App\Album();

$row = $alb->edit($id);
?>

<h2>Edit Album</h2>

<form action="alb_proses.php" method="post">
    <input type="hidden" name="alb_id" value="<?php echo $row['alb_id']; ?>">
    <table>
        <tr>
            <td>NAMA</td>
            <td><input type="text" name="alb_name" value="<?php echo $row['alb_name']; ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>