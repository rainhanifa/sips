    <section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <strong>Tambah User</strong>
                            </h2>
                            
                        </div>

                        <div class="body">
                        
                            <?php if($this->session->flashdata("message") != ""){
                                echo $this->session->flashdata("message");
                            }
                            ?>
                            <form method="post" action="<?php echo base_url("user/tambah")?>" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Username</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="username" id="email_address_2" class="form-control" placeholder="Masukkan Username">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Password</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="password"  name="password"  class="form-control" placeholder="Masukkan Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Lengkap</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text"  name="nama_lengkap" class="form-control" placeholder="Masukkan Nama Lengkap">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Role</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                                <select name="user_role">
                                                   <option value="1">Super Admin</option>
                                                   <option value="2">Persuratan</option>
                                                   <option value="3">Manager</option>
                                                </select >
                                        </div>
                                    </div>

                               <div class="text-center">
                                <div class="body">
                                    <div class="button-info">
                                    <input type="submit" class="btn btn-primary waves-effect" value="Simpan" name="submit">
                                    <a href="user.html"><button type="button" class="btn btn-danger waves-effect">Batal</button></a> 
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
