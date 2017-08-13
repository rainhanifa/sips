<section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="header">
                            <h2>
                                <strong>Tambah Surat Masuk</strong>
                            </h2>
                            
                        </div>
                    <div class="card">

                        <div class="body">
                        <?php if($this->session->flashdata("message") != "")
                                {
                                    echo $this->session->flashdata("message");
                                }
                        ?>
                       <form method="post" action="<?php echo base_url("inbox/tambah")?>" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nomor Surat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="no_letter" class="form-control" placeholder="Masukkan Nomor Surat">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tanggal Register</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="date_letter" class="datepicker form-control" placeholder="Masukkan Tanggal">
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

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Pengirim</label>
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

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                     <label for="password_2">Perihal</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="subject" class="form-control" placeholder="Masukkan Perihal Surat">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                     <label for="password_2">Upload</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="files" >
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <center>
                                    <div class="row">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit" value="Simpan">
                                        <a href="<?php echo base_url('inbox')?>"><button type="button" class="btn btn-danger m-t-15 waves-effect">Batal</button></a>
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