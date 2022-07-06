<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DATA PESERTA DIDIK BARU</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th> No Registrasi</th>
                        <th>Jenjang Pendafaran</th>
                        <th>nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>NISN</th>
                        <th>Tempat Lahir</th>
                        <th>Agama</th>
                        <th>Alamat</th>
                        <th>No Hp</th>
                        <th>Media Sosial</th>
                        <th>Jurusan Ma</th>
                        <th>Jurusan SMK</th>
                        <th>Jenis Pendaftaran</th>
                        <th>Asal Sekolah</th>
                        <th>Kartu Keluarga</th>
                        <th>SKHU</th>
                        <th>Akte</th>
                        <th>KIP</th>
                        <th>Foto</th>
                        <th>Verifikasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                $no = 1;
                foreach ($ppdb as $row) {
                ?>
                    <tbody>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $row->no_reg ?></td>
                            <td><?= $row->jenjang_pendaftaran ?></td>
                            <td><?= $row->nama_lengkap ?></td>
                            <td><?= $row->jk ?></td>
                            <td><?= $row->nisn ?></td>
                            <td><?= $row->ttl ?></td>
                            <td><?= $row->agama ?></td>
                            <td><?= $row->alamat ?></td>
                            <td><?= $row->nomor_hp ?></td>
                            <td><?= $row->media_sosial ?></td>
                            <td><?= $row->jurusan_MA ?></td>
                            <td><?= $row->jurusan_SMK ?></td>
                            <td><?= $row->jenis_pendaftaran ?></td>
                            <td><?= $row->asal_sekolah ?></td>
                            <td><?= $row->kartu_keluarga ?></td>
                            <td><?= $row->skhu ?></td>
                            <td><?= $row->akte_kelahiran ?></td>
                            <td><?= $row->kartu_indonesia_pintar ?></td>
                            <td>
                                <img src="<?= base_url('assets/uploads/')?><?= $row->foto ?>" alt="Foto Peserta" height="100px" width="100px">
                            <td>
                                <a onclick="return confirm('Anda Yakin ?')" href="<?= site_url('verifikasi/statusV/'.$row->id)?>" class="btn btn-warning"> 
                                <?php if ($row->status == 'b'){?>Verifikasi</i><?php }?>
                                
                                </a>
                            </td>
                            <td>
                            <a href="<?= site_url('')?>/<?= $row->id?>" class="btn btn-warning btn-sm rounded-0 text-center" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-pen"></i></a>

                             <a href="<?= site_url('/verifikasi/hapus')?>/<?= $row->id?>" class="btn btn-danger btn-sm rounded-0 text-center" type="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a></td>
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