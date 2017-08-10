 <section class="content">
    <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h1 style="text-align: center;">
                                <strong>Data Kontak</strong>
                            </h1>

                            <div class="body">
                            <div class="button-demo">
                                <a href="<?php echo base_url('kontak')?>/tambah"><button type="button" class="btn btn-success waves-effect">Tambah</button></a>
                            </div>
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
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Institusi</th>
                                            <th>No. Telp</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                       <?php
                                        $nomor = 1;
                                        foreach($list as $contacts){ ?>
                                        <tr>
                                            <td><?php echo $nomor ?></td>
                                            <td><?php echo $contacts['name'] ?></td>
                                            <td><?php echo $contacts['institution'] ?></td>
                                            <td><?php echo $contacts['telp']?></td>
                                            <td><?php echo $contacts['email']?></td>
                                            <td> 
                                              <div class="row">
                                                        <a href="<?php echo base_url('kontak')?>/ubah">
                                                        <button type="button" class="btn btn-primary waves-effect">Ubah</button>
                                                        </a>

                                                        <button type="button" class="btn btn-danger" onclick="ClickModalDelete(<?=$contacts['id_contacts']?>)" data-toggle="modal" data-target="#myModal" id="modalKlik">Hapus</button>
                                                 </div>
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

      <script type="text/javascript">
    function ClickModalDelete(id){
        $("#id_delete").val(id);
    }
    </script>


     <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
        <!-- Modal content-->
            <div class="modal-content">
                <form action="<?=base_url('kontak/hapus')?>" method = "POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Konfirmasi Penghapusan</h4>
                    </div>

                    <div class="modal-body">
                        <h4>Apakah anda ingin menghapus surat ini?</h4>
                            <input type="text" name="id_hapus" id="id_delete"> </input>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" value="submit" name="submit" id=btnDelete class="btn btn-primary"><b>Ya</b></button>
                        <a href="<?php echo base_url('kontak')?>"><button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>