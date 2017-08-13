    <section class="content">
        <div class="container-fluid">

        <!-- Form Tambah Surat -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Tambah Data Kwitansi</strong>
                            </h2>
                            
                        </div>
                        <!-- Tanggal -->
                        <div class="body">
                        <?php if($this->session->flashdata("message") != ""){
                                echo $this->session->flashdata("message");
                            }
                            ?>

                            <form method="post" action="<?php echo base_url("receipt/tambah")?>" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tanggal Surat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name = "date" class="datepicker form-control" placeholder="Masukkan Tanggal">
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

                                <!-- Keterangan -->
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Keterangan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="subject" class="form-control" placeholder="Masukkan Keterangan">
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
                                                <input type="number" name="amount" class="form-control" placeholder="Masukkan Nominal" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <div class="text-center">
                                <div class="body">
                                    <div class="button-info">
                                    <input type="submit" class="btn btn-primary waves-effect" value="Simpan" name="submit">
                                    <a href="<?php echo base_url('receipt')?>/index"><button type="button" class="btn btn-danger waves-effect">Batal</button></a> 
                                    </div>
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