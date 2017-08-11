 <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="text-center">
                    <h1>
                        Kwitansi
                    </h1>
                </div>
            </div>
            <!-- Table Surat Keluar -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                            <div class="body">
                            <div class="button-demo">
                                <a href="<?php echo base_url('receipt')?>/tambah"><button type="button" class="btn btn-success waves-effect">Tambah</button></a>
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
                                            <th>No. Surat</th>
                                            <th>Tanggal</th>
                                            <th>Penerima</th>
                                            <th>Keterangan</th>
                                            <th>Nominal</th>
                                            <th>Pilihan/Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $nomor = 1;
                                        foreach($list as $receipt){ ?>
                                        <tr>
                                            <td><?php echo $nomor ?></td>
                                            <td><?php echo $receipt['no_letter']?></td>
                                            <td><?php echo date('l, d-m-Y',strtotime($receipt['date']))?>.</td>
                                            <td><?php echo $receipt['name']?></td>
                                            <td><?php echo $receipt['subject']?></td>
                                            <td><?php echo $receipt['amount']?></td>

                                            <td> 
                                                <div class="row">
                                                        <a href=<?php echo base_url()."receipt/ubah/".$receipt['id']?> class="btn btn-primary waves-effect"> Ubah </a>

                                                        <button type="button" class="btn btn-danger" onclick="ClickModalDelete(<?=$receipt['id']?>)" data-toggle="modal" data-target="#myModal" id="modalKlik">Hapus</button>
                                                 </div>                                                                   
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
                <form action="<?=base_url('receipt/hapus')?>" method = "POST">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Konfirmasi Penghapusan</h4>
                    </div>

                    <div class="modal-body">
                        <h4>Apakah anda ingin menghapus surat ini?</h4>
                            <input type="hidden" name="id_hapus" id="id_delete"> </input>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" value="submit" name="submit" id=btnDelete class="btn btn-primary"><b>Ya</b></button>
                        <a href="<?php echo base_url('outbox')?>"><button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
