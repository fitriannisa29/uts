<?php

$post = new App\Post;
$rows = $post->tampil();

?>

<h2>Harga</h2>

<a href="index.php?hal=post_input" class="btn">Add Harga</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>KETERANGAN</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['post_id']; ?></td>
        <td><?php echo $row['post_name']; ?></td>
        <td><?php echo $row['post_text']; ?></td>
        <td><a href="index.php?hal=post_edit&id=<?php echo $row['post_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=post_delete&id=<?php echo $row['post_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
