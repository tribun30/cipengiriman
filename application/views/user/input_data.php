    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>User">User</a></li>
              <li class="breadcrumb-item active">Form Tambah Data User</li>
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
          form_open('User/simpan'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>ID User</label>
        <input type="text" name="id_user" class="form-control"  placeholder="ID User" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Nama User</label>
        <input type="text" name="nama_user" class="form-control"  placeholder="Nama User" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control"  placeholder="Password" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Hak Akses</label>
        <select name="akses_level" class="form-control">
          <option value="">=== Pilih Hak Akses===</option>
          <option value="admin">admin</option>
          <option value="ppic">ppic</option>
          <option value="driver">driver</option>
          <option value="direktur">direktur</option>
        </select>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>User" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</div>