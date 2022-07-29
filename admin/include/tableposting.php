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
      <td><a class="btn btn-danger" href="delpost.php?id=<?= $posting['id']; ?>" onclick="return confirm('yakin ?');">Delete</a>
      <a class="btn btn-primary" href="editpost.php?id=<?= $posting['id']; ?>">Edit</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>