    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Data Laporan Pengiriman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Laporan_pengiriman">Laporan Pengiriman</a></li>
              <li class="breadcrumb-item active">Form Tambah Data Laporan Pengiriman</li>
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
          form_open('Laporan_pengiriman/simpan'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>Id Surat Jalan</label>
        <input type="text" name="id_sj" class="form-control"  value="<?php echo $this->uri->segment(3); ?>" readonly>
      </div>
      <div class="form-group">
        <label>Status</label>
        <select name="status" class="form-control">
          <option value="0">Sedang Dalam Perjalan</option>
          <option value="1">Barang Sudah Sampai</option>
        </select>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>Laporan_pengiriman" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</div>