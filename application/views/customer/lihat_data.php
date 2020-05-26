    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item active">Data Customer</li>
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
        <a href="<?php echo base_url(); ?>Customer/tambah" class="btn btn-primary">Tambah</a>
            <br><br>
          <?php echo $this->session->flashdata('message');?>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Id Customer</th>
            <th>Nama Customer</th>
            <th>Alamat Customer</th>
            <th>Telepon Customer</th>
            <th>Email Customer</th>
            <th>Pic</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($record->result() as $b) {
              echo "<tr>
              <td>$b->id_cust</td>
              <td>$b->nama_cust</td>
              <td>$b->alamat_cust</td>
              <td>$b->tlp_cust</td>
              <td>$b->email_cust</td>
              <td>$b->pic</td>
              <td>
              ".anchor('Customer/ubah/'.$b->id_cust,'Ubah',array('class' => 'btn btn-success'))."
              ".anchor('Customer/hapus/'.$b->id_cust,'Hapus',array('class' => 'btn btn-danger'))."
              ".anchor('Customer/detail/'.$b->id_cust,'Detail',array('class' => 'btn btn-warning'))."
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