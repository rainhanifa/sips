    <section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Ubah Kontak</strong>
                            </h2>
                            
                        </div>

                        <div class="body">
                            <form class="form-horizontal" action="<?php echo base_url('kontak/v_ubah');?> " method="post">
                              <input type="hidden" name="id_contacts" value="<?php echo $id_contacts?>">
                              <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama</label>
                                    </div>

                                    <input type="hidden" value="<?php echo $contacts[0]->name?>" name="contacts">

                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name"  class="form-control" value="<?php echo $contacts[0]->name?>">
                                            </div>
                                        </div>
                                    </div>

                                <div class="body">
                            <form class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Institusi</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="institution" id="email_address_2" class="form-control" value="<?php echo $contacts[0]->institution?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">No. Telepon</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="telp" id="email_address_2" class="form-control" value="<?php echo $contacts[0]->telp?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                     <label for="password_2">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="email" name="email" id="password_2" class="form-control" value="<?php echo $contacts[0]->email?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="text-center">
                                <div class="body">
                                    <div class="button-info">
                                        <input type="submit" class="btn btn-primary waves-effect" name="submit" value="Simpan">
                                        <a href="<?php echo base_url('kontak/')?>"><button type="button" class="btn btn-danger waves-effect">Batal</button></a>
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
