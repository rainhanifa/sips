    <section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>Ubah Data Invoice</b>
                            </h2> 
                        </div>

                        <div class="body">
                            <form class="form-horizontal" action="<?php echo base_url('invoice/v_ubah')?>" method = "POST">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tanggal </label>
                                    </div>

                                    <input type="hidden" name="date" value="<?php echo $tagihan->date?>">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="date" class="datepicker form-control" placeholder="Masukkan Tanggal">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--ambil dari db project-->
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="">Proyek</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <select name="projects_id">
                                                <?php
                                                foreach ($proyek as $key => $value) {
                                                ?>
                                                    <option value="<?php echo $value->id_project?>"><?php echo $value->name_project?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select> 
                                    </div>
                                </div>
                            </div>


                               <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                 <label for="">Nama Penerima</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <select name="penerima">
                                                <?php
                                                foreach ($kontak as $key => $value) {
                                                ?>
                                                    <option value="<?php echo $value->id_contacts?>"><?php echo $value->name?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select> 
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                     <label for="password_2">Nominal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="number" name="amount" id="nominal" class="form-control" placeholder="Masukkan Nominal" value="<?php echo $tagihan->amount?>">
                                            </div>
                                        </div>
                                    </div>

                                <center>
                                    <div class="row">
                                         <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit" value="Simpan">

                                        <a href="<?php echo base_url('invoice')?>"><button type="button" class="btn btn-danger m-t-15 waves-effect">Batal</button></a>
                                    </div>
                                </center>
                                
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #END# Horizontal Layout -->
              </div>
    </section>