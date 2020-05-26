    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Data Detail Surat Jalan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Surat_jalan">Surat Jalan</a></li>
              <li class="breadcrumb-item active">Form Tambah Data Detail Surat Jalan</li>
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
          form_open('Surat_jalan/simpan_detail'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>Id Surat Jalan</label>
        <input type="text" name="id_sj" class="form-control"  value="<?php echo $this->uri->segment(3); ?>" readonly>
      </div>
      <div class="form-group">
        <label>Nama Produk</label>
        <select class="form-control" id="produk" name="id_produk" class="form-control" required>
          <option value="">=== Pilih Nama Produk===</option>
          <?php
          foreach ($produk->result() as $p){
            echo"<option value= '$p->id_produk'>$p->nama_produk ($p->tipe_produk)</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Quantity</label>
        <input type="number" name="qty" class="form-control"  placeholder="Jumlah Produk" required="" autocomplete="off">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>Surat_jalan" class="btn btn-danger">Kembali</a>
    </div>
  </form>
</div>
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-sm-12">
        <div class="box box-primary">
          <?php echo $this->session->flashdata('message');?>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Produk</th>
                      <th>Jumlah</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($record->result() as $b) {
                        echo "<tr>
                        <td>$no</td>
                        <td>$b->nama_produk</td>
                        <td>$b->qty pcs</td>    
                        <td>
                        ".anchor('Surat_jalan/hapus_detail/'.$b->id_sj_detail,'Hapus',array('class' => 'btn btn-danger','Onclick' => "return confirm('Anda yakin ingin menghapus data ini?')"))."
                        </td>
                      </tr>";
                      $no++;
                      }
                    ?>
                  </tbody>
            </table>
        </div>
      </div>  
    </div>
  </div>
</div>
<script type="text/javascript">

</script>