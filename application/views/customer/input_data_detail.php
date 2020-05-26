    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Tambah Data Detail Customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Home">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= base_url(); ?>Customer">Customer</a></li>
              <li class="breadcrumb-item active">Form Tambah Data Detail Customer</li>
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
          form_open('Customer/simpan_detail'); 
  ?>
  <form role="form">
    <div class="card-body">
      <div class="form-group">
        <label>Id Customer</label>
        <input type="text" name="id_cust" class="form-control"  value="<?php echo $this->uri->segment(3); ?>" readonly>
      </div>
      <div class="form-group">
        <label>Nama Customer</label>
        <select class="form-control" id="customer" name="cust_id" class="form-control" required>
          <option value="">=== Pilih Nama Customer===</option>
          <?php
          foreach ($customer->result() as $p){
            echo"<option value= '$p->id_cust'>$p->nama_cust</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Jarak</label>
        <input type="number" name="jarak" class="form-control"  placeholder="Jarak" required autocomplete="off">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?= base_url(); ?>Customer" class="btn btn-danger">Kembali</a>
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
                      <th>Nama Customer</th>
                      <th>Jarak</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $no = 1;
                      foreach ($record->result() as $b) {
                        echo "<tr>
                        <td>$no</td>
                        <td>$b->nama_cust</td>
                        <td>$b->jarak kg</td>    
                        <td>
                        ".anchor('Customer/hapus_detail/'.$b->id_cd,'Hapus',array('class' => 'btn btn-danger','Onclick' => "return confirm('Anda yakin ingin menghapus data $b->nama_cust dengan jarak $b->jarak?')"))."
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