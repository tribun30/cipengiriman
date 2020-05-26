<div class="row">
    <div class="col-xs-6">
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Form Laporan Produksi</h3>
        </div><!-- /.box-header -->
        <!-- form start -->

        <?= 
            form_open('Jadwal_kirim'); 
        ?>
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" name="tanggal_jarak" class="form-control" id="">
            </div>
          </div><!-- /.box-body -->
 
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Lihat</button>
            <?php 
                if (isset($tanggal_jarak)) {
                    // echo $tanggal_jarak;
                    $link = $tanggal_jarak;
                 ?>
                <a href="<?php echo base_url(); ?>laporan/cetak_laporan_produksi/<?php echo $link ?>" target='_blank'  class='btn btn-success'>Cetak</a>
            <?php        
                }
            ?>

          </div>
        </form>
      </div>
    </div>  
 </div>
 <div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Data Cacat Produksi</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <br><br>
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th rowspan="2">Id Customer</th>
              <th rowspan="2">Nama Customer</th>
              <th>ID customer</th>
              <th>Jarak</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            if ($record) {
              foreach ($record as $b) {
                echo "<tr>
                <td>$b->id_cust</td>
                <td>$b->nama_cust</td>
                <td>$b->jarak</td>
                <td>$b->id_cust</td>
              </tr>";
              $no++;
              }
            }
          ?>
          </tbody>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div><!-- /.col -->
</div><!-- /.row -->