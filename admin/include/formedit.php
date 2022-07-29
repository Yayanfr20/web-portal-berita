<form action="" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?= $post["id"]; ?>">
<input type="hidden" name="gambarLama" value="<?= $post["img"]; ?>">
<div class="container">
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Images</label>
  <img src="../asset/img/<?= $post['img']; ?>" width="50"><br>
  <input class="form-control" type="file" id="formFileMultiple" multiple name="gambar">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Judul</span>
  <input type="text" aria-label="First name" class="form-control" name="judul" required value="<?= $post["judul"]; ?>">
  </select>
</div>
<div class="form-floating">
  <input type="text" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="deskripsi" required value="<?= $post['deskripsi']?>">
  <label for="floatingTextarea2">deskripsi</label>
</div><br>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
  <select class="form-select" id="inputGroupSelect01" name="kategori" required value="<?= $post['kategori']?>">
    <?php foreach($allkategori as $kategori) :?>
    <option selected><?= $kategori['kategori']; ?></option>
    <?php endforeach;?>
  </select>
</div>
<div class="input-group mb-3">
  <input type="hidden" aria-label="First name" class="form-control" value="<?= $post['tanggal_upload']; ?>" name="tanggal">
  </select>
</div>
<button type="submit" class="btn btn-success" name="posting">Posting</button>
</div>
</form>