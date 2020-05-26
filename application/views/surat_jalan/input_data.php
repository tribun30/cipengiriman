    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Data Surat Jalan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Surat_jalan">Surat Jalan</a></li>
              <li class="breadcrumb-item active">Form Tambah Data Surat Jalan</li>
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
          form_open('Surat_jalan/simpan'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>Id Surat Jalan</label>
        <input type="text" name="id_sj" value="<?=$row->id_sj?>" class="form-control"  placeholder="ID Surat Jalan" required="" autocomplete="off" readonly>
      </div>
      <div class="form-group">
        <label>Tanggal Surat Jalan</label>
        <input type="date" name="tgl_sj" class="form-control"  placeholder="Tanggal Surat Jalan" required="" autocomplete="off">
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
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>Surat_jalan" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</div>