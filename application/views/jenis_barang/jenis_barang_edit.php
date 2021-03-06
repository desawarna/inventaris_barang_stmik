<ul class="breadcrumb" style="padding:0px">
  <li><a href="<?php echo PATH_THEME; ?>jenis_barang">Jenis Barang</a></li>
  <li class="active">Edit Jenis Barang</li>
</ul>

<?php foreach ($get_where_jb as $row): ?>
  <?php
    if (!empty(isset($edit))) {
      if ($edit == "berhasil") {
        ?>
        <div class="alert alert-success">
          Berhasil Diubah. <a href="<?php echo PATH_THEME; ?>jenis_barang">Kembali</a>
        </div>
        <?php
      }
      else {
        ?>
        <div class="alert alert-danger">
          Gagal Diubah! Silahkan coba kembali. atau <a href="<?php echo PATH_THEME; ?>jenis_barang">Kembali</a>
        </div>
        <?php
      }
    }
   ?>
  <div class="row">
    <form class="" action="" method="post">
      <div class="col-md-12">
        <div class="form-group">
          <label for="">Jenis Barang</label>
          <input type="text" name="jenis_barang_tipe" value="<?php echo $row->jenis_barang_nama; ?>" class="form-control" placeholder="Isikan Jenis Barang">
        </div>
      </div>
      <div class="col-md-12">
        <button type="submit" name="button" class="btn btn-primary" value="button">Update</button>
      </div>
    </form>
  </div>

<?php endforeach; ?>
