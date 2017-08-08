<section class="content">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="text-center"><h1>
                                KLASIFIKASI SURAT
                            </h1>
                            </div>
                            <div class="body">
                            <div class="button-info">
                                <a href="<?php echo base_url('klasifikasi/')?>tambah"><button type="button" class="btn btn-success waves-effect">Tambah</button></a>
                            </div>
                        </div>
                        <div class="body">
                            <?php if($this->session->flashdata("message") != ""){
                                echo $this->session->flashdata("message");
                            }
                            ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Klasifikasi</th>
                                            <th>Klasifikasi Surat</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php
                                        $nomor = 1;
                                        foreach($class as $klasifikasi){ ?>
                                        <tr>
                                            <td><?php echo $nomor ?></td>
                                            <td><?php echo $klasifikasi ["id_class"] ?></td>
                                            <td><?php echo $klasifikasi ["name_class"] ?></td>
                                            <td> 
                                                <a class="btn btn-primary waves-effect" href="<?php echo base_url('klasifikasi/')?>ubah"> Ubah </a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
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
        </div>
    </section>

  <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi Hapus</h4>
      </div>

      <div class="modal-body">
        <p>Hapus klasifikasi ? </p>
      </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Ya</button></a>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>

      </div>
    </div>
    </div>