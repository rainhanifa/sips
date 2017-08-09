<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <b>Tambah Data Invoice</b>
                        </h2>
                    </div>
                    <div class="body">
                    <?php if($this->session->flashdata("message") != "")
                                {
                                    echo $this->session->flashdata("message");
                                }
                            ?>
                        <form class="form-horizontal" action="<?php echo base_url('invoice/tambah')?>" method="POST">
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="">Tanggal </label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="date" class="datepicker form-control" placeholder="Masukkan Tanggal">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                    <label for="">Proyek</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="name_project" id="proyek" class="form-control" placeholder="Masukkan Proyek">
                                        </div>
                                    </div>
                                </div>
                            </div>


                           <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                 <label for="">Nama Penerima</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="recipient_id" id="nama" class="form-control" placeholder="Masukkan Nama">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                           <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                 <label for="password_2">Institusi</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" name="institution" id="institusi" class="form-control" placeholder="Nama Institusi">
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                 <label for="">Nominal</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" name="amount" id="nominal" class="form-control" placeholder="Nominal">
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