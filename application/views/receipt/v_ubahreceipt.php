  <section class="content">
        <div class="container-fluid">

        <!-- Form Edit Gaji -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Edit Data Kwitansi</strong>
                            </h2>
                            
                        </div>
                        <!-- Tanggal -->
                        <div class="body">
                          <?php
                                foreach($receipt as $kwitansi){ 
                                ?>
                            
                            <form class="form-horizontal" action="<?php echo base_url('receipt/v_ubah');?> " method="post">
                            <input type="hidden" name="id" value="<?php echo $kwitansi['id']?>">


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tanggal">Tanggal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="date"  class="datepicker form-control" value="<?php echo date('Y-m-d', strtotime($kwitansi['date']))?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //Datetimepicker plugin
                                    $('.datepicker').bootstrapMaterialDatePicker({
                                        format: 'YYYY/MM/DD',
                                        clearButton: true,
                                        weekStart: 1,
                                        time: false
                                    });
                                </script>
                         <!-- Nama Penerima -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama penerima</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                        
                                          <select name="penerima">
                                                    <?php
                                                    foreach ($kontak as $key) {
                                                    ?>
                                                        <option <?php echo ($kwitansi['recipient_id'] == $key['id_contacts']) ? "selected"  : " " ?> value="<?php echo $key['id_contacts']?>"><?php echo $key['name']?></option>
                                                    <?php
                                                        }
                                                    ?>
                                            </select>
                                                 
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="keterangan">Keterangan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="subject"  class="form-control" value="<?php echo $kwitansi['subject']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!-- Nominal -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="nominal">Nominal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="amount"  class="form-control" value="<?php echo $kwitansi['amount']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!-- Tombol Simpan dan Batal -->
                                 <div class="text-center">
                                <div class="body">
                                    <div class="button-info">
                                        <input type="submit" class="btn btn-primary waves-effect" name="submit" value="Simpan">
                                        <a href="<?php echo base_url('receipt/')?>"><button type="button" class="btn btn-danger waves-effect">Batal</button></a>
                                    </div>
                                </div>  
                            </form>
                            <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
              </div>
    </section>