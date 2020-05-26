    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Laporan Pengiriman</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item active">Data Laporan Pengiriman</li>
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
            <br><br>
        <?php echo $this->session->flashdata('message');?>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Id Surat Jalan</th>
            <th>Tanggal Surat Jalan</th>
            <th>Nama Customer</th>>
            <th>Jenis Mobil</th>
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
              <td>$b->jenis_mobil</td>
              <td>$status</td>
              <td>
              ".anchor('Laporan_pengiriman/tambah/'.$b->id_sj,'Rubah Status',array('class' => 'btn btn-primary'))."
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