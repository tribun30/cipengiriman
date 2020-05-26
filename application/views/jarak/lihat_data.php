    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data jarak</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item active">Data jarak</li>
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
        <!-- Button tambah -->
        <a href="<?php echo base_url(); ?>jarak/tambah" class="btn btn-primary">Tambah</a>
            <br><br>
          <?php echo $this->session->flashdata('message');?>
        <table id="example4" class="table table-bordered table-striped">
          <!-- label jarak -->
          <thead>
          <tr>
            <th>Id jarak</th>
            <th>Tanggal</th>
            <th>Nama Customer</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <!-- isi jarak -->
          <tbody>
            <?php
            $no = 1;
            foreach ($record->result() as $b) {
              echo "<tr>
              <td>$b->id_jarak</td>
              <td>$b->tanggal_jarak</td>
              <td>$b->nama_cust</td>
              <td>
              ".anchor('jarak/ubah/'.$b->id_jarak,'Ubah',array('class' => 'btn btn-success'))."
              ".anchor('jarak/hapus/'.$b->id_jarak,'Hapus',array('class' => 'btn btn-danger'))."
              ".anchor('jarak/detail/'.$b->id_jarak,'Detail',array('class' => 'btn btn-warning'))."
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