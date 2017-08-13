<section class="content">
        <div class="container-fluid">

        <!-- Form Edit Gaji -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Ubah Payroll</strong>
                            </h2>
                            
                        </div>
                        <!-- Nama Member -->
                        <div class="body">

                            <form class="form-horizontal"  action="<?php echo base_url('Payroll/v_ubah');?> " method="post">
                                <input type="hidden" name="id" value="<?php echo $id?>">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Member</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                           <select name="nama_member">
                                           <?php 
                                                foreach ($member as $key => $value) {
                                           ?>
                                                <option value="<?php echo $value->id_member?>"><?php
                                                echo $value->nama?></option>
                                                <?php
                                            }
                                            ?>
                                                 
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                        <div class="form-line">
                                                <!-- <input type="text" name="nama_member" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $payroll[0]->nama?>"> -->
                                            </div>                                           
                                        </div>
                                    </div>
                                </div>
                        <!-- Bulan -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="bulan">Bulan / Tahun</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" name="payment_period" id="datepicker" placeholder="Pilih Bulan">
                                               <!--  <select name="payment_period">
                                                    <option value="1">Januari</option>
                                                    <option value="2">Februari</option>
                                                    <option value="3">Maret</option>
                                                    <option value="4">April</option>
                                                    <option value="5">Mei</option>
                                                    <option value="6">Juni</option>
                                                    <option value="7">Juli</option>
                                                    <option value="8">Agustus</option>
                                                    <option value="9">September</option>
                                                    <option value="10">Oktober</option>
                                                    <option value="11">November</option>
                                                    <option value="12">Desember</option> 
                                                 </select> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!-- Nominal -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nominal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="amount" class="form-control" placeholder="Masukkan Nominal"value="<?php echo $payroll[0]->amount?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!-- Tombol Simpan dan Batal -->
                                <div class="text-center">
                                <div class="body">
                                    <div class="button-info">
                                        <input type="submit" class="btn btn-primary waves-effect" name="submit" value="Simpan">
                                        <a href="<?php echo base_url('payroll/')?>"><button type="button" class="btn btn-danger waves-effect">Batal</button></a>
                                    </div>
                                </div>    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
              </div>
    </section>