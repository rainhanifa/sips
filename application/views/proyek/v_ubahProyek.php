    <section class="content">
            <!-- Basic Examples -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>Ubah Data Proyek</b>
                            </h2>
                            
                        </div>
                                        <!-- Nominal -->
                        <div class="body">
                            <form class="form-horizontal" action="<?php echo base_url('proyek/v_ubah')?>" method="POST">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kode Proyek</label>
                                    </div>

                                    <!--  -->
                                    <input type="hidden" name="id_project" value="<?php echo $proyek[0]->id_project?>">


                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="code_project" id="kode_proyek" class="form-control" placeholder="Masukkan Kode Proyek" value="<?php echo $proyek[0]->code_project?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Proyek</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name_project" class="form-control" placeholder="Masukkan Nama Proyek" value="<?php echo $proyek[0]->name_project?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                        <!-- Tombol Simpan dan Batal -->
                                <div class="text-center">
                                    <div class="row">
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit" value="Simpan">
                                            
                                        <a href="<?php echo base_url('proyek')?>">
                                        <button type="button" class="btn btn-danger m-t-15 waves-effect">Batal</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- #END# Basic Examples -->