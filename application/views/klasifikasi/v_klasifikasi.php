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
                                        <tr>
                                            <td>1</td>
                                            <td>PI</td>
                                            <td>Praktik Industri</td>
                                            <td> 
                                                <a class="btn btn-primary waves-effect" href="<?php echo base_url('klasifikasi/')?>ubah"> Ubah </a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
                                        
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
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>KK</td>
                                            <td>Keterangan Kerja</td>
                                            <td> 
                                                <a class="btn btn-primary waves-effect" href="<?php echo base_url('klasifikasi/')?>ubah"> Ubah </a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
                                                
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
                                             </td>

                                        </tr>
                                         <tr>
                                            <td>3</td>
                                            <td>SP</td>
                                            <td>Surat Penawaran</td>
                                            <td> 
                                                <a class="btn btn-primary waves-effect" href="<?php echo base_url('klasifikasi/')?>ubah"> Ubah </a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
                                            
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
                                             </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </section>