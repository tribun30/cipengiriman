    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Input  Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Customer">Customer</a></li>
              <li class="breadcrumb-item active">Form Ubah Data Customer</li>
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
          form_open('Customer/edit'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>ID Customer</label>
        <input type="text" name="id_cust" class="form-control"  placeholder="ID Customer" value="<?= $record['id_cust']; ?>" readonly>
      </div>
      <div class="form-group">
        <label >Nama Customer</label>
        <input type="text" name="nama_cust" class="form-control"  placeholder="Nama Customer" value="<?= $record['nama_cust']; ?>" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Alamat Customer</label>
       <textarea class="form-control" name="alamat_cust" placeholder="Alamat Customer" required=""><?= $record['alamat_cust']; ?></textarea>
      </div>
      <div class="form-group">
        <label>Telepon Customer</label>
        <input type="number" name="tlp_cust" class="form-control"  placeholder="Telepon Customer" value="<?= $record['tlp_cust']; ?>" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Email Customer</label>
        <input type="email" name="email_cust" class="form-control"  placeholder="Email Customer" value="<?= $record['email_cust']; ?>" required="" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Pic</label>
        <input type="text" name="pic" class="form-control"  placeholder="Pic" value="<?= $record['pic']; ?>" required=""  autocomplete="off">
      </div>
      <div class="form-group">
        <label>Jarak</label>
        <input type="number" name="jarak" class="form-control"  placeholder="Jarak" value="<?= $record['jarak']; ?>" required="">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>Customer" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</div>