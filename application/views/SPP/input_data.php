    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Data SPP</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>SPP">SPP</a></li>
              <li class="breadcrumb-item active">Form Tambah Data SPP</li>
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
          form_open_multipart('SPP/simpan'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="Tanggal" class="form-control"  placeholder="Tanggal" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Nama Customer</label>
        <select class="form-control" id="customer" name="id_cust" class="form-control" required>
          <option value="">=== Pilih Nama Customer===</option>
          <?php
          foreach ($customer->result() as $p){
            echo"<option value= '$p->id_cust'>$p->nama_cust</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Nama Produk</label>
        <select class="form-control" id="produk" name="id_produk" class="form-control" required>
          <option value="">=== Pilih Nama Produk===</option>
          <?php
          foreach ($produk->result() as $p){
            echo"<option value= '$p->id_produk'>$p->nama_produk ($p->tipe_produk)</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Jumlah Kirim</label>
        <input type="number" name="jml_kirim" class="form-control"  placeholder="Jumlah Kirim" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Upload</label>
        <input type="file" name="SPP" class="form-control" required>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>SPP" class="btn btn-danger">Kembali</a>
    </div>
  </form>
  <?= form_close(); ?>
</div>