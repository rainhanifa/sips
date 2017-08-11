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
                                foreach($receipt as $kontak){ 
                                ?>

                            <form class="form-horizontal" action="<?php echo base_url('receipt/ubah');?> " method="post">


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="tanggal">Tanggal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="date"  class="form-control" value="<?php echo $kontak['date']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                         <!-- Nama Penerima -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama penerima</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                        
                                           <select name="id_contacts">
                                           <?php 
                                                foreach ($contacts as $key => $value) {
                                           ?>
                                                <option value="<?php echo $value->id_contacts?>"><?php
                                                echo $value->name?></option>
                                                <?php
                                            }
                                            ?>
                                                 
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
                                                <input type="text" name="subject"  class="form-control" value="<?php echo $kontak[0]->subject?>">
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
                                                <input type="text" name="amount"  class="form-control" value="<?php echo $kontak[0]->amount?>">
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