
<body>
                      <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DATA EKSTRAKULIKULER</h6>
                            <a href="<?= site_url('/TambahEkskul/lihatData')?>" class="btn btn-info" role="button">Tambah Data</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                        <th >No</th>
                                        <th >Nama</th>  
                                        <th >Hari</th>
                                        <th >Waktu</th>
                                        <th >Pembimbing</th>
                                        <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                            $no=1;
                                            foreach($ekskul as $row){
                                        ?>
                                    <tbody>
                                        <tr> 
                                        <td><?=$no?></td>
                                        <td><?= $row->nama?></td>
                                        <td><?= $row->hari?></td>
                                        <td><?= $row->waktu?></td>
                                        <td><?= $row->pembimbing?></td>
                                      
                                        <td>
                                            <a href="<?= site_url('/TambahEkskul/edit')?>/<?= $row->id?>" class="btn btn-warning btn-sm rounded-0 text-center" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-pen"></i></a>

                                            <a href="<?= site_url('/TambahEkskul/hapus')?>/<?= $row->id?>" class="btn btn-danger btn-sm rounded-0 text-center" type="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a>
                                        
                                        </td>

                                      
                                        </tr>
                                        <?php 
                                            $no++;
                                            }
                                        ?>
    
                                    </tbody> 
                                </table>
                            </div>
                        </div>
                    </div>
    <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url();?>assets/js/demo/datatables-demo.js"></script>
</body>
</html>