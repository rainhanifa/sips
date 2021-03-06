 <section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Payroll</strong>
                            </h2>
                            
                        </div>

                        <div class="body">

                            <?php if($this->session->flashdata("message") != ""){
                                echo $this->session->flashdata("message");
                            }
                            ?>
                            <form class="form-horizontal" action="<?php echo base_url('payroll/tambah')?>" method="POST">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Member</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                           <select name="id_member">
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
                                </div>
                        <!-- Tanggal -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Bulan / Tahun</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" name="payment_period" id="datepicker" placeholder="Pilih Bulan">
                                                
                                                 <!-- <select name="payment_period">
                                                    <option value="Januari">Januari</option>
                                                    <option value="Februari">Februari</option>
                                                    <option value="Maret">Maret</option>
                                                    <option value="April">April</option>
                                                    <option value="Mei">Mei</option>
                                                    <option value="Juni">Juni</option>
                                                    <option value="Juli">Juli</option>
                                                    <option value="Agustus">Agustus</option>
                                                    <option value="September">September</option>
                                                    <option value="Oktober">Oktober</option>
                                                    <option value="November">November</option>
                                                    <option value="Desember">Desember</option> 
                                                 </select> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <!--<script type="text/javascript">
                                    //Datetimepicker Plugin
                                    $('.datepicker').bootstrapMaterialDatePicker({
                                        format : 'YYYY/MM/DD',
                                        clearButton : true;
                                        weekStart: 1,
                                        time: false
                                    })
                                </script>-->
                                        <!-- Nominal -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nominal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="amount" class="form-control" placeholder="Masukkan Nominal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!-- Tombol Simpan dan Batal -->
                                <div class="text-center">
                                    <div class="row">
                                        <input type="submit" name="submit" class="btn btn-primary waves-effect" value="Simpan">
                                    <a href="<?php echo base_url('payroll/')?>"><button type="button" class="btn btn-danger waves-effect">Batal</button></a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Horizontal Layout -->
              </div>
    </section>