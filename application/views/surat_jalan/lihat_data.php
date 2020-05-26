    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Surat Jalan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item active">Data Surat Jalan</li>
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
        <a href="<?php echo base_url(); ?>Surat_jalan/tambah" class="btn btn-primary">Tambah</a>
            <br><br>
        <?php echo $this->session->flashdata('message');?>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Id Surat Jalan</th>
            <th>Tanggal Surat Jalan</th>
            <th>Nama Customer</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($record->result() as $b) {
              if ($b->status == 0) {
                $status = "<p style='color:red'> Sedang Dalam Perjalanan</p>";
              }else{
                $status = "<p style='color:green'> Barang Sudah Sampai</p>";                            
              }
              echo "<tr>
              <td>$b->id_sj</td>
              <td>$b->tgl_sj</td>
              <td>$b->nama_cust</td>
            
              <td>$status</td>
              <td>";
              if ($b->status == 0) {
              echo "
              ".anchor('Surat_jalan/ubah/'.$b->id_sj,'Ubah',array('class' => 'btn btn-success'))."
              ".anchor('Surat_jalan/hapus/'.$b->id_sj,'Hapus',array('class' => 'btn btn-danger'))."
              ".anchor('Surat_jalan/detail/'.$b->id_sj,'Detail',array('class' => 'btn btn-warning'))."
              ";
              }else{
                echo anchor('Surat_jalan/info/'.$b->id_sj,'Rincian',array('class' => 'btn btn-default'));
              }
             echo " </td>
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