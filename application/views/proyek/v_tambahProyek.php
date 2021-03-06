    <section class="content">
        <div class="container-fluid">
<!-- Horizontal Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                <b>Tambah Data Proyek</b>
                            </h2> 
                        </div>
                                        <!-- Nominal -->
                        <div class="body">
                            <?php if($this->session->flashdata("message") != ""){
                                echo $this->session->flashdata("message");
                            }
                            ?>
                            <form action="<?php echo base_url('proyek/tambah')?>" method="POST" class="form-horizontal">
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Nama Proyek</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name_project"  class="form-control" placeholder="Masukkan Nama Proyek">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email_address_2">Kode Proyek</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="code_project" class="form-control" placeholder="Masukkan Kode Proyek">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <!-- Tombol Simpan dan Batal -->
                                <div class="text-center">
                                <div class="body">
                                    <div class="button-info">
                                        <input type="submit" class="btn btn-primary waves-effect" value="Simpan" name="submit">
                                        <a href="<?php echo base_url('proyek')?>">
                                            <button type="button" class="btn btn-danger waves-effect">Batal</button>
                                        </a> 
                                    </div>
                                </div>                                
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- #END# Basic Examples -->