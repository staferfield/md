      <div class="box box-success box-solid collapsed-box">
        <!-- box-header -->
        <div class="box-header with-border">
          <h3 class="box-title">Tambah Nota Penitipan</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
          </div>
        </div>

        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <form action="<?php echo site_url('Penitipan/addAction'); ?>" method="post">

              <div class="col-md-3">
                <div class="form-group">
                  <label for="toko_id">Pilih Toko:</label>
                  <select class="form-control" id="toko_id" name="toko_id" required="required">
                    <?php $i = 1;
                    foreach ($toko as $tk) {
                      echo '<option value="' . $tk['id'] . '">' . $i . ". " . $tk['nama'] . '</option>';
                      $i++;
                    } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="sales_id">Pilih Sales:</label>
                  <select class="form-control" id="sales_id" name="sales_id" <?php if ($this->session->userdata('level') == 4) {echo 'readonly';} ?>>
                    <?php
                    // Apabila user adalah sales, pilih dia dan jangan tampilkan yg lain
                    if ($this->session->userdata('level') == 4) {
                      echo '<option value="' . $this->session->userdata('id') . '">' . $this->session->userdata('nama') . '</option>';
                    } else {
                      // Reset nomer
                      $i = 1;
                      foreach ($sales as $s) {
                        echo '<option value="' .    $s['id'] . '">' . $i .     ". " . $s['nama'] . '</ option>';
                        $i++;
                      }
                    }
                    ?>

                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <!-- #PERLU_CHECK rubah format waktu -->
                  <label for="tanggal">Tanggal:</label>
                  <input id="tanggal" class="form-control" type="datetime-local" name="tanggal" placeholder="Tanggal" required="required" value="<?php date_default_timezone_set("Asia/Jakarta");;
                                                                                                                                                  echo date('Y-m-d\TH:i:s'); ?>" />
                </div>
              </div>

              <div class="col-sm-3">
                <label class="invisible" for="submit">Tambah</label>
                <button id="submit" type="submit" class="btn btn-success btn-block">Tambah</button>
              </div>

            </form>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>