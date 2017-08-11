<section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1>
                                <b>Ubah Surat</b>
                            </h1>
                            
                        </div>
                        <?php
                            foreach ($outbox as $keluar) {
                        ?>
                        <div class="body">
                            <form class="form-horizontal" action="<?php echo base_url('outbox/v_ubah')?>" method="POST">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nomor Surat</label>
                                    </div>
                                    <input type="hidden" name="date" value="<?php echo $keluar['code_letter'] ?>">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="code_letter" id="no_surat" class="form-control" value="<?php echo $keluar['no_letter'].$keluar['code_letter']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Klasifikasi Surat</label>
                                    </div>
                                    <input type="hidden" name="date" value="">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                                <select name="klasifikasi">
                                                    <?php
                                                    foreach ($class as $key) {
                                                    ?>
                                                            <option value="<?php echo $key['id_class']?>">
                                                                <?php echo $key['name_class']?>
                                                            </option>
                                                    <?php
                                                }
                                                    ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tanggal Surat</label>
                                    </div>
                                    <!-- input type="hidden" name="date" value="<?php echo $keluar['date']?>"> -->
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="date" class="datepicker form-control" value="<?php echo date('d-m-Y', strtotime($keluar['date']))?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                     <label for="password_2">Penerima</label>
                                    </div>
                                    <!--<input type="hidden" name="date" value="<?php echo $keluar['recipient_id']?>">-->
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <select name="penerima">
                                                    <?php
                                                    foreach ($kontak as $key) {
                                                    ?>
                                                        <option <?php echo ($keluar['recipient_id'] == $key['id_contacts']) ? "selected"  : " " ?> value="<?php echo $key['id_contacts']?>"><?php echo $key['name']?></option>
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
                                     <label for="upload">Upload</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="row">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit" value="Simpan">
                                        <a href="<?php echo base_url('outbox')?>"><button type="button" class="btn btn-danger m-t-15 waves-effect">Batal</button></a>
                                    </div>
                                </center>
                                
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