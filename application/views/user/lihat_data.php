    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<div class="row">
  <div class="col-12">
    <!-- /.card -->
    <div class="card">

      <!-- /.card-header -->
      <div class="card-body">
        <a href="<?php echo base_url(); ?>User/tambah" class="btn btn-primary">Tambah</a>
            <br><br>
        <?php echo $this->session->flashdata('message');?>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Id User</th>
            <th>Nama User</th>
            <th>Password</th>
            <th>Hak Akses</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($record->result() as $b) {
              echo "<tr>
              <td>$b->id_user</td>
              <td>$b->nama_user</td>
              <td>$b->password</td>
              <td>$b->hak_akses</td>
              <td>
              ".anchor('User/ubah/'.$b->id_user,'Ubah',array('class' => 'btn btn-success'))."
              ".anchor('User/hapus/'.$b->id_user,'Hapus',array('class' => 'btn btn-danger'))."
              </td>
            </tr>";
            $no++;
            }
          ?>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->