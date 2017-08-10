<section class="content">
            <!-- Table Surat Keluar -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="text-center">
                                <h1>
                                    DATA INVOICE
                                </h1>
                            </div>
                            <div class="body">
                                <div class="button-demo">
                                    <a href="<?php echo base_url('invoice')?>/tambah"><button type="button" class="btn btn-success btn-lg"><b>Tambah</b></button></a>
                                </div>
                            </div>

                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                            <?php if($this->session->flashdata("message") != "")
                                {
                                    echo $this->session->flashdata("message");
                                }
                            ?>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No.Surat</th>
                                            <th>Tanggal</th>
                                            <th>Penerima</th>
                                            <th>Project</th>
                                            <th>Nominal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>No.Surat</th>
                                            <th>Tanggal</th>
                                            <th>Penerima</th>
                                            <th>Project</th>
                                            <th>Nominal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>

                                    <tbody>
                                        
                                        <tr>
                                        <?php
                                            $nomor = 1;
                                            foreach ($tagihan as $invoice) {
                                        ?>
                                            <td><?php echo $nomor?></td>
                                            <td><?php echo $invoice['no_letter']?></td>
                                            <td><?php echo $invoice['date']?></td>
                                            <td><?php echo $invoice['recipient_id']?></td>
                                            <td><?php echo $invoice['no_letter']?></td>
                                            <td><?php echo $invoice['amount']?></td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                        <a href="<?php echo base_url('invoice')?>/ubah">
                                                            <button type="button" class="btn btn-primary waves-effect">Ubah</button>
                                                        </a>

                                                        <button type="button" class="btn btn-danger" onclick="ClickModalDelete(<?=$invoice['no_letter']?>)" data-toggle="modal" data-target="#myModal" id="modalKlik">Hapus</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <?php
                                                $nomor ++;
                                            }?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- #END# Basic Examples -->
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
                <form action="<?=base_url('Invoice/hapus')?>" method = "POST">
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
                        <a href="<?php echo base_url('outbox')?>"><button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button></a>
                    </div>
                </form>
            </div>
    </div>
</div>
