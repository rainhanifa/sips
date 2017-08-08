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
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>Institusi</th>
                                            <th>No. Telp</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Yogikk</td>
                                            <td>Universitas Malang</td>
                                            <td>0812341231</td>
                                            <td>Yogikk@gmail.com</td>
                                            <td>
                                            <center>
                                    <div class="row">
                                        <a href="<?php echo base_url('kontak')?>/ubah">
                                        <button type="button" class="btn btn-primary waves-effect">Ubah</button>
                                        </a>

                                        <button type="button" class="btn btn-danger waves-effect ">Hapus</button>
                                                </div>
                                                   
                                    </div>
                                            </center>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Adam</td>
                                            <td>Politeknik Negeri Malang</td>
                                            <td>081218901</td>
                                            <td>Adam@gmail.com</td>
                                            <td>
                                            <center>
                                    <div class="row">
                                        <a href="<?php echo base_url('kontak')?>/ubah">
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
                                                                <h4>Apakah anda ingin menghapus surat ini?</h4>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-info" data-dismiss="modal"><b>Ya</b></button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </center>
                                            </td>
                                        </tr>
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