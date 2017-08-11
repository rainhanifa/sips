<section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Ubah Member</strong>
                            </h2>
                            
                        </div>

                        <div class="body">
                            <form class="form-horizontal" action="<?php echo base_url('Member/v_ubah');?> " method="post">
                                <input type="hidden" name="id_member" value="<?php echo $id_member?>">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Lengkap</label>
                                    </div>

                                    <input type="hidden" value="<?php echo $member[0]->nama?>" name="member">

                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap" value="<?php echo $member[0]->nama?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Jabatan</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Jabatan" value="<?php echo $member[0]->jabatan?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-center">
                                <div class="body">
                                    <div class="button-info">
                                        <input type="submit" class="btn btn-primary waves-effect" name="submit" value="Simpan">
                                        <a href="<?php echo base_url('member/')?>"><button type="button" class="btn btn-danger waves-effect">Batal</button></a>
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