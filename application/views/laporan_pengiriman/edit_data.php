    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Ubah Data Laporan Pengiriman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Laporan_pengiriman">Laporan Pengiriman</a></li>
              <li class="breadcrumb-item active">Form Ubah Data Laporan Pengiriman</li>
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
          form_open('Laporan_pengiriman/edit'); 
  ?>
  <form role="form">
    <div class="form-group">
        <label>Id Surat Jalan</label>
        <input type="text" name="id_sj" class="form-control"  placeholder="ID Surat Jalan" value="<?= $record['id_sj']; ?>" readonly>
      </div>
      <div class="form-group">
        <label>Tanggal Kirim</label>
        <input type="date" name="tgl_kirim" class="form-control"  placeholder="Tanggal Kirim"  value="<?= $record['tgl_kirim']; ?>" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Nama Produk</label>
        <select class="form-control" id="produk" name="id_produk" class="form-control">
          <?php 
          foreach ($produk->result() as $p) {
            if ($p->id_produk == $record['id_produk']) {
             echo "<option value = '$p->id_produk'selected>$p->nama_produk</option>";
            } else {
             echo "<option value = '$p->id_produk'>$p->nama_produk</option>";
            }
            
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Jumlah Produk</label>
        <input type="number" name="jml_produk" class="form-control"  placeholder="Jumlah Produk" value="<?= $record['jml_produk']; ?>" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Nama Customer</label>
        <select class="form-control" id="customer" name="id_cust" class="form-control">
          <?php 
          foreach ($customer->result() as $p) {
            if ($p->id_cust == $record['id_cust']) {
             echo "<option value = '$p->id_cust'selected>$p->nama_cust</option>";
            } else {
             echo "<option value = '$p->id_cust'>$p->nama_cust</option>";
            }
            
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Biaya Kirim</label>
        <input type="number" name="biaya_kirim" class="form-control"  placeholder="Biaya Kirim"  value="<?= $record['biaya_kirim']; ?>" required="" autocomplete="off">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>Laporan_pengiriman" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</div>