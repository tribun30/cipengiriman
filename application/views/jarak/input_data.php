    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Data jarak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>jarak">jarak</a></li>
              <li class="breadcrumb-item active">Form Tambah Data jarak</li>
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
          form_open('jarak/simpan'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>Tanggal</label>
        <input type="date" name="tanggal_jarak" class="form-control"  placeholder="jarak" required="" autocomplete="off">
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
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>jarak" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</div>