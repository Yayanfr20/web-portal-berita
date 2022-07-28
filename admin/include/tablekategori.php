<table class="table">
    <tr>
      <th >#</th>
      <th >Kategori</th>
      <th >opsi</th>
    </tr>
<tr>
<?php $i = 1; ?>
  <?php foreach($allkategori as $kategori) : ?>   
      <td><?= $i; ?></th>
      <td><?= $kategori['kategori']; ?></td>
      <td><a class="btn btn-danger" href="delkategori.php?id=<?= $kategori['id']; ?>" onclick="return confirm('yakin ?');">Delete</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>