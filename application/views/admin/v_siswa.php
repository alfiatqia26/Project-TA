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
                        <th>Tempat Tinggal</th>
                        <th>Anak Ke Berapa</th>
                        <th>Nama Ayah Kandung</th>
                        <th>Nik Ayah</th>
                        <th>Thn Lahir Ayah</th>
                        <th>Pendidikan Ayah</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Nama Ibu Kandung</th>
                        <th>Nik Ibu</th>
                        <th>Tahun Lahir Ibu</th>
                        <th>Pendidikan Ibu</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Nama Wali</th>
                        <th>Nik Wali</th>
                        <th>Thn Lahir Wali</th>
                        <th>Pendidikan Wali</th>
                        <th>Pekerjaan Wali</th>
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
                        <th>Status</th>
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
                            <td><?= $row->tempat_tinggal ?></td>
                            <td><?= $row->anak_keberapa ?></td>
                            <td><?= $row->nama_ayah_kandung ?></td>
                            <td><?= $row->nik_ayah ?></td>
                            <td><?= $row->thn_lahir_ayah ?></td>
                            <td><?= $row->pendidikan_ayah ?></td>
                            <td><?= $row->pekerjaan_ayah ?></td>
                            <td><?= $row->nama_ibu_kandung ?></td>
                            <td><?= $row->nik_ibu ?></td>
                            <td><?= $row->thn_lahir_ibu ?></td>
                            <td><?= $row->pendidikan_ibu ?></td>
                            <td><?= $row->pekerjaan_ibu ?></td>
                            <td><?= $row->nama_wali ?></td>
                            <td><?= $row->nik_wali ?></td>
                            <td><?= $row->thn_lahir_wali ?></td>
                            <td><?= $row->pendidikan_wali ?></td>
                            <td><?= $row->pekerjaan_wali ?></td>
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
                                <a onclick="return confirm('Anda Yakin ?')" href="<?= site_url('verifikasi/statusV/'.$row->id)?>" class="<?= $row->status=='b' ? 'btn btn-warning' : 'btn btn-success' ?>"> 
                                <?php if ($row->status == 's'){?>Terverifikasi</i><?php }else{?>
                                    Belum Verifikasi
                                    <?php }?>
                                </a>

                                <td>
                                <a href="<?= site_url('/verifikasi/hapus')?>/<?= $row->id?>" class="btn btn-danger btn-sm rounded-0 text-center" type="button" data-toggle="tooltip" data-placement="top" title="Delete" onClick="return confirm('Yakin?')"><i class="fa fa-trash"></i></a></td>

                                </td>
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