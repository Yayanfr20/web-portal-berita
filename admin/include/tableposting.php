<h1 class="text-center mt-2">Daftar postingan</h1>
<table class="table">
    <tr>
      <th >#</th>
      <th >Judul</th>
      <th >opsi</th>
    </tr>
<tr>
<?php $i = 1; ?>
  <?php foreach($allposting as $posting) : ?>   
      <td><?= $i; ?></th>
      <td><?= $posting['judul']; ?></td>
      <td><a class="btn btn-danger" href="delkategori.php?id=<?= $posting['id']; ?>" onclick="return confirm('yakin ?');">Delete</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>