    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Ubah Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>User">User</a></li>
              <li class="breadcrumb-item active">Form Ubah Data User</li>
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
          form_open('User/edit'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>ID User</label>
        <input type="text" name="id_user" class="form-control"  placeholder="ID User" value="<?= $record['id_user']; ?>" readonly>
      </div>
      <div class="form-group">
        <label>Nama User</label>
        <input type="text" name="nama_user" class="form-control"  placeholder="Nama User" value="<?= $record['nama_user']; ?>" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" class="form-control"  placeholder="Password" value="<?= $record['password']; ?>" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Hak Akses</label>
        <?php
        $hak_akses = array ('admin' => 'admin', 'ppic' => 'ppic', 'driver' => 'driver', 'direktur' => 'direktur');
        echo form_dropdown('hak_akses', $hak_akses,$record['hak_akses'],'
        class="form-control" required')
        ?>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>User" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</div>