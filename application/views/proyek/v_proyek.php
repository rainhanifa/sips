    <section class="content">
    <!-- Data Proyek -->
              <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                          <div class="text-center">
                              <h1>
                                  DATA PROYEK
                              </h1>
                          </div>
            
                            <div class="body">
                                <div class="button-demo">
                                    <a href="<?php echo base_url('proyek')?>/tambah"><button type="button" class="btn btn-success btn-lg"><b>Tambah</b></button></a>
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
                              <?php if($this->session->flashdata("message") != ""){
                                echo $this->session->flashdata("message");
                            }
                            ?>
                                  <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                      <thead>
                                          <tr>
                                              <th>No</th>
                                              <th>Nama Proyek</th>
                                              <th>Kode Proyek</th>
                                              <th>Pilihan/Aksi</th>    
                                          </tr>
                                      </thead>

                                      <tfoot>
                                          <tr>
                                              <th>No</th>
                                              <th>Nama Proyek</th>
                                              <th>Kode Proyek</th>
                                              <th>Pilihan/Aksi</th>
                                              
                                          </tr>
                                      </tfoot>

                                      <tbody>
                                    <?php 
                                        $nomor = 1;
                                        foreach ($proyek as $project) { ?>
                                        <tr>
                                            <td><?php echo $nomor?></td>
                                            <td><?php echo $project['name_project']?></td>
                                            <td><?php echo $project['code_project']?></td>
                                            <td> 
                                                <a href=<?php echo base_url()."proyek/ubah/".$project['id_project']?> class="btn btn-primary waves-effect"> Ubah </a>
                                                
                                                <button type="button" class="btn btn-danger" onclick="ClickModalDelete(<?=$project["id_project"]?>)" data-toggle="modal" data-target="#myModal" id="modalKlik">Hapus</button>
                                            </td>
                                        </tr>
                                        <?php
                                            $nomor++;
                                        }?>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
        </section>
    <!-- #END# Basic Examples -->

    <!-- Hapus -->
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
        <form action="<?php echo base_url('Proyek/hapus')?>" method="POST">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">
                    Konfirmasi Hapus
                  </h4>
          </div>

          <div class="modal-body">
            <h4>Apakah anda ingin menghapus data ini ? </h4>
              <input type="hidden" name="id_hapus" id="id_delete"></input>
          </div>

          <div class="modal-footer">
            <button type="submit" name="submit" value="submit" id="btnDelete" class="btn btn-primary">Ya</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
          </div>
        </form>
      </div>    
    </div>
  </div>