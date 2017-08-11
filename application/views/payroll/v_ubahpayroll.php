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

                                    <input type="hidden" value="<?php echo $payroll[0]->id_member?>" name="id_member">

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
                                        <label for="bulan">Bulan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="date" class="datepicker form-control" placeholder="Pilih Bulan" value="<?php echo date('d-m-Y', strtotime($payroll[0]->date))?>">
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