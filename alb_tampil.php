<?php

$alb = new App\Album;
$rows = $alb->tampil();

?>

<h2>Album</h2>

<a href="index.php?hal=alb_input" class="btn">Add Album</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['alb_id']; ?></td>
        <td><?php echo $row['alb_name']; ?></td>
        <td><a href="index.php?hal=alb_edit&id=<?php echo $row['alb_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=alb_delete&id=<?php echo $row['alb_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
