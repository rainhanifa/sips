
    <section class="content">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <div class="text-center"><h1>
                                USER
                            </h1>
                            </div>
                            <div class="body">
                            <div class="button-info">
                                <a href="<?php echo base_url('user/tambah')?>"><button type="button" class="btn btn-success waves-effect">Tambah</button></a>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nama Lengkap</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>admin</td>
                                            <td>Administrator</td>
                                            <td>Super Admin</td>
                                            <td> 
                                                <a class="btn btn-primary waves-effect" href="<?php echo base_url('user/ubah')?>"> Ubah </a>
                                                <a class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>persuratan</td>
                                            <td>Persuratan</td>
                                            <td>Persuratan</td>
                                            <td> 
                                                <a class="btn btn-primary waves-effect" href="ubah-user.html"> Ubah </a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
                                             </td>

                                        </tr>
                                         <tr>
                                            <td>3</td>
                                            <td>ibnu</td>
                                            <td>Ibnu Shodiqin</td>
                                            <td>Manager</td>
                                            <td> 
                                                <a class="btn btn-primary waves-effect" href="ubah-user.html"> Ubah </a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
                                             </td>
                                        </tr>

                                        <tr>
                                            <td>4</td>
                                            <td>faiz</td>
                                            <td>Faiz Alqurni</td>
                                            <td>Manager</td>
                                            <td> 
                                                <a class="btn btn-primary waves-effect" href="ubah-user.html"> Ubah </a>
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Hapus</button>
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
            <p>Hapus User ? </p>
          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-primary" data-dismiss="modal">Ya</button></a>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
        </div>    
      </div>
    </div>