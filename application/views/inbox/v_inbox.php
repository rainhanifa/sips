   <section class="content">
    <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1 style="text-align: center;">
                                <strong>Surat masuk</strong>
                            </h1>

                            <div class="body">
                            <div class="button-demo">
                                <a href="<?php echo base_url('inbox')?>/tambah"><button type="button" class="btn btn-success waves-effect">Tambah</button></a>
                            </div>
                        </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No.Surat</th>
                                            <th>Tanggal Register</th>
                                            <th>Pengirim</th>
                                            <th>Perihal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>No.Surat</th>
                                            <th>Tanggal Register</th>
                                            <th>Pengirim</th>
                                            <th>Perihal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                        $nomor=1;
                                        foreach ($kotak_masuk as $inbox) {?>
                                        <tr>
                                            <td><?php echo $nomor ?></td>
                                            <td><?php echo $inbox["no_surat"] ?></td>
                                            <td><?php echo $inbox["tgl_reg"] ?></td>
                                            <td><?php echo $inbox["pengirim"] ?></td>
                                            <td><?php echo $inbox["perihal"] ?></td>
                                            <td>
                                                <center>
                                                    <div class="row">
                                                        <a href="<?php echo base_url('inbox')?>/ubah">
                                                        <button type="button" class="btn btn-primary waves-effect">Ubah</button>
                                                        </a>

                                                        <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModal">Hapus</button>
                                                            </div>

                                                                   
                                                    </div>
                                                </center>
                                            </td>
                                        </tr>
                                        <?php 
                                            $nomor++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>


                                                    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            
        <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Konfirmasi Penghapusan</h4>
                </div>

                <div class="modal-body">
                        <h4>Apakah anda ingin menghapus surat ini?</h4>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal"><b>Ya</b></button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button>
                </div>
            </div>
        </div>
    </div>