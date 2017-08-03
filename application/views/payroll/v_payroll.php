    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="text-center">
                    <h1>
                        Payroll (Gaji)
                    </h1>
                </div>
            </div>
            <!-- Table Payroll -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <a href="tambah-payroll.html">
                                <a href="<?php echo base_url('payroll/')?>tambah"><button type="button" class="btn btn-success waves-effect">Tambah</button>
                                </a>
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
                                            <th>No. Payroll</th>
                                            <th>Tanggal</th>
                                            <th>Penerima</th>
                                            <th>Bulan</th>
                                            <th>Nominal</th>
                                            <th>Pilihan/Aksi</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>734</td>
                                            <td>1 Juli 2017</td>
                                            <td>Luqman</td>
                                            <td>Juni</td>
                                            <td>2000000</td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                    <a class="btn btn-primary waves-effect" href="<?php echo base_url('payroll/')?>ubah"> Ubah </a>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
                                                    </div >
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
                                                            <button type="button" class="btn btn-info" data-dismiss="modal"><b>Ya</b></button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>733</td>
                                            <td>1 Juli 2017</td>
                                            <td>Beni</td>
                                            <td>Juni</td>
                                            <td>2000000</td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                        <a class="btn btn-primary waves-effect" href="<?php echo base_url('payroll/')?>ubah"> Ubah </a>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
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
                                                                <button type="button" class="btn btn-info" data-dismiss="modal"><b>Ya</b></button>
                                                                <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>732</td>
                                            <td>1 Juli 2017</td>
                                            <td>Imaniar</td>
                                            <td>Juni</td>
                                            <td>2000000</td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                        <a class="btn btn-primary waves-effect" href="<?php echo base_url('payroll/')?>ubah"> Ubah </a>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
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
                                                            <button type="button" class="btn btn-info" data-dismiss="modal"><b>Ya</b></button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>731</td>
                                            <td>1 Juli 2017</td>
                                            <td>Ibnu</td>
                                            <td>Juni</td>
                                            <td>2500000</td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                        <a class="btn btn-primary waves-effect" href="<?php echo base_url('payroll/')?>ubah"> Ubah </a>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
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
                                                            <button type="button" class="btn btn-info" data-dismiss="modal"><b>Ya</b></button>
                                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><b>Batal</b></button>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Payroll -->
        </div>
</section>