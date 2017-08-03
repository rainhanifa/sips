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

                        <div class="body">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nomor Surat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="no_surat" class="form-control" placeholder="Masukkan Nomor Surat">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Klasifikasi Surat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                                <select>
                                                    <option>PI</option>
                                                    <option>KK</option>
                                                    <option>SP</option>
                                                </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Tanggal Surat</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="datepicker form-control" placeholder="Masukkan Tanggal">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                     <label for="password_2">Penerima</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="penerima" class="form-control" placeholder="Masukkan Penerima">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <center>
                                    <div class="row">
                                        <a href="<?php echo base_url('outbox')?>"><button type="button" class="btn btn-primary m-t-15 waves-effect">Simpan</button></a>
                                        <a href="<?php echo base_url('outbox')?>"><button type="button" class="btn btn-danger m-t-15 waves-effect">Batal</button></a>
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