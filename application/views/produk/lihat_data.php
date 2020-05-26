    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item active">Data Produk</li>
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
        <a href="<?php echo base_url(); ?>Produk/tambah" class="btn btn-primary">Tambah</a>
            <br><br>
          <?php echo $this->session->flashdata('message');?>
        <table id="example1" class="table table-bordered table-striped">
          <!-- label produk -->
          <thead>
          <tr>
            <th>Id Produk</th>
            <th>Nama Produk</th>
            <th>Tipe Produk</th>
            <th>Berat Produk</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <!-- isi produk -->
          <tbody>
            <?php
            $no = 1;
            foreach ($record->result() as $b) {
              echo "<tr>
              <td>$b->id_produk</td>
              <td>$b->nama_produk</td>
              <td>$b->tipe_produk</td>
              <td>$b->berat_produk kg</td>
              <td>
              ".anchor('Produk/ubah/'.$b->id_produk,'Ubah',array('class' => 'btn btn-success'))."
              ".anchor('Produk/hapus/'.$b->id_produk,'Hapus',array('class' => 'btn btn-danger'))."
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