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
                                        <tr>
                                            <td>1</td>
                                            <td>1831</td>
                                            <td>21 Juli 2017</td>
                                            <td>Bahram</td>
                                            <td>Pelunas Invoice #123</td>
                                            <td>1500000</td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                    <a href="<?php echo base_url('receipt')?>/ubah"><button type="button" class="btn btn-primary">Ubah</button></a>
                                                    <button type="button" class="btn btn-danger" >Hapus</button>
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
                                            <td>2</td>
                                            <td>1880</td>
                                            <td>20 Juli 2017</td>
                                            <td>Eren</td>
                                            <td>Pelunasan Proyek Game</td>
                                            <td>700000</td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                    <a href="<?php echo base_url('receipt')?>/ubah"><button type="button" class="btn btn-primary">Ubah</button></a>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
                                                    </div >
                                                </div>
                                                    
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>1879</td>
                                            <td>20 Juli 2017</td>
                                            <td>Satriyo</td>
                                            <td>DP Aloma Go</td>
                                            <td>3400000</td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                    <a href="<?php echo base_url('receipt')?>/ubah"><button type="button" class="btn btn-primary">Ubah</button></a>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
                                                    </div >
                                                </div>
                                                   
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>1878</td>
                                            <td>20 Juli 2017</td>
                                            <td>Anton</td>
                                            <td>Biaya Sertifikat Guru</td>
                                            <td>2500000</td>
                                            <td>
                                                <div class="row">
                                                    <div class="text-center">
                                                   <a href="<?php echo base_url('receipt')?>/ubah"><button type="button" class="btn btn-primary">Ubah</button></a>
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
                                                    </div >
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
        </section>