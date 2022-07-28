<form action="">
<div class="container">
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Images</label>
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Judul</span>
  <input type="text" aria-label="First name" class="form-control">
  </select>
</div>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
  <label for="floatingTextarea2">deskripsi</label>
</div><br>
<div class="input-group mb-3">
  <label class="input-group-text" for="inputGroupSelect01">Kategori</label>
  <select class="form-select" id="inputGroupSelect01">
    <?php foreach($allkategori as $kategori) :?>
    <option selected><?= $kategori['kategori']; ?></option>
    <?php endforeach;?>
  </select>
</div>
<button type="button" class="btn btn-success">Posting</button>
</div>
</form>