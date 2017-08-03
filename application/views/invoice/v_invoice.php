<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="text-center">
                    <h1>
                        DATA INVOICE
                    </h1>
                </div>
            </div>

            <!-- Table Surat Keluar -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
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
                                            <td>1</td>
                                            <td>YG/05/04/1997</td>
                                            <td>05/04/1997</td>
                                            <td>Yogikkk</td>
                                            <td>301 - Graphic Design</td>
                                            <td>Rp 900000</td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                    <a href="<?php echo base_url('invoice')?>/ubah">
                                                        <button type="button" class="btn btn-primary waves-effect">Ubah</button>
                                                    </a>

                                                        <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModal">Hapus</button>
                                                    </div>
                                                </div>

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
                                                                <h4>Apakah anda ingin menghapus data ini?</h4>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <a href="<?php echo base_url('invoice')?>">
                                                                <button type="button" class="btn btn-info" data-dismiss="modal"><b>Ya</b></button>
                                                            </a>

                                                            <a href="<?php echo base_url('invoice')?>">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                    </div>
                                        <tr>
                                            <td>2</td>
                                            <td>Ad/05/04/1997</td>
                                            <td>05/04/1997</td>
                                            <td>Adam</td>
                                            <td>267 - Cassow</td>
                                            <td>Rp 2000000</td>
                                            <td>
                                            <center>
                                                <div class="row">
                                                    <a href="<?php echo base_url('invoice')?>/ubah">
                                                    <button type="button" class="btn btn-primary waves-effect">Ubah</button>
                                                    </a>
                                                    <button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModal">Hapus</button>
                                                </div>

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
                                                                    <h4>Apakah anda ingin menghapus data ini?</h4>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <a href="<?php echo base_url('invoice')?>">
                                                                    <button type="button" class="btn btn-info" data-dismiss="modal"><b>Ya</b></button>
                                                                </a>

                                                                <a href="<?php echo base_url('invoice')?>">
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </center>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
            <!-- #END# Basic Examples -->
</section>