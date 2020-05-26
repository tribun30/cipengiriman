    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Schedule Pengiriman Part</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item active">Data Schedule Pengiriman Part</li>
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
        <a href="<?php echo base_url(); ?>SPP/tambah" class="btn btn-primary">Tambah</a>
            <br><br>
        <?php echo $this->session->flashdata('message');?>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Id SPP</th>
            <th>Tanggal SPP</th>
            <th>Nama Customer</th>
            <th>Nama Produk</th>
            <th>Type Produk</th>
            <th>Berat Produk</th>
            <th>Jumlah Kirim</th>
            <th>Total Beban</th>
            <th>SPP</th>
            <th>Aksi</th>
          </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($record->result() as $b) {
              $total_beban = $b->berat_produk * $b->jml_kirim;
              echo "<tr>
              <td>$b->ID_SPP</td>
              <td>$b->Tanggal</td>
              <td>$b->nama_cust</td>
              <td>$b->nama_produk</td>
              <td>$b->tipe_produk</td>
              <td>$b->berat_produk</td>
              <td>$b->jml_kirim</td>
              <td>$total_beban</td>
              <td><img width='100px' height='auto' src='./uploads/$b->SPP' data-toggle='modal' data-target='#myModal$b->ID_SPP' /></td>
              <td>
              ".anchor('SPP/ubah/'.$b->ID_SPP,'Ubah',array('class' => 'btn btn-success'))."
              ".anchor('SPP/hapus/'.$b->ID_SPP,'Hapus',array('class' => 'btn btn-danger', 'Onclick' => "return confirm('Anda yakin ingin menghapus dengan no ID SPP $b->ID_SPP?')"))."
              </td>
            </tr>";
            $no++;
            echo "
            <div class='modal fade' id='myModal$b->ID_SPP' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
              <div class='modal-dialog'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title' id='myModalLabel'>Modal title</h4>
                  </div>
                  <div class='modal-body'>
                    <img width='100%' height='100%' src='./uploads/$b->SPP'/>
                  </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                    <button type='button' class='btn btn-primary'>Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            ";
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