    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Produk">Produk</a></li>
              <li class="breadcrumb-item active">Form Ubah Data Produk</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- general form elements -->
<div class="card card-primary">
  <!-- /.card-header -->
  <!-- form start -->
  <?= 
          form_open('Produk/edit'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>ID Produk</label>
        <input type="text" name="id_produk" class="form-control"  placeholder="ID Produk" value="<?= $record['id_produk']; ?>" readonly>
      </div>
      <div class="form-group">
        <label >Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control"  placeholder="Nama Produk" value="<?= $record['nama_produk']; ?>" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Tipe Produk</label>
        <input type="text" name="tipe_produk" class="form-control"  placeholder="Tipe Produk" value="<?= $record['tipe_produk']; ?>" required="" autocomplete="off">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>Produk" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</div>