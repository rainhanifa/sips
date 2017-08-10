 <section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Ubah Klasifikasi</strong>
                            </h2>
                            
                        </div>

                        <div class="body">
                            <form class="form-horizontal" action="<?php echo base_url('Klasifikasi/v_ubah');?> " method="post">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kode Klasifikasi</label>
                                    </div>

                                    
                                    <input type="hidden" value="<?php echo $klasifikasi[0]->id_class?>" name="id_class">

                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email_address_2" class="form-control" placeholder="Masukkan Kode Klasifikasi" value="<?php echo $klasifikasi[0]->id_class?>">
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
                                                <input type="text" name="name_class" class="form-control" placeholder="Masukkan Nama Klasifikasi" value="<?php echo $klasifikasi[0]->name_class ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                <div class="body">
                                    <div class="button-info">
                                        <input type="submit" name="submit" value="Simpan" class="btn btn-primary waves-effect">
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
