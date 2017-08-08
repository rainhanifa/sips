<section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Tambah Klasifikasi</strong>
                            </h2>
                            
                        </div>

                        
                       <div class="body">

                        <?php if($this->session->flashdata("message") != ""){
                                echo $this->session->flashdata("message");
                            }
                            ?>
                            <form class="form-horizontal" action="<?php echo base_url('klasifikasi/tambah')?>" method="POST">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kode Klasifikasi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="id_class" class="form-control" placeholder="Masukkan Kode Klasifikasi">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Klasifikasi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name_class" class="form-control" placeholder="Masukkan Nama Klasifiksi">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               <div class="text-center">
                                <div class="body">
                                    <div class="button-info">
                                    <input type="submit" class="btn btn-primary waves-effect" name="submit" value="Simpan">
                                    <a href="<?php echo base_url('klasifikasi/')?>"><button type="button" class="btn btn-danger waves-effect">Batal</button></a> 
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