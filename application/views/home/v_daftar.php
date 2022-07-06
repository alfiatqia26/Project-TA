<div class="container mt-3">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- / <div class="col-lg-6 d-none d-lg-block"></div> -->
                        <div class="col-lg-12">
                            <form action="<?= site_url('/ppdb/daftar') ?>" method="post" enctype="multipart/form-data">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">REGISTRASI PESERTA DIDIK BARU</h1>
                                    </div>

                                    <a>1. IDENTITAS CALON PESERTA DIDIK</a>
                                    <div class="form">

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="jenjang_pendaftaran">Jenjang Pendaftaran</label>
                                                <select class="form-control" name="jenjang_pendaftaran">
                                                    <option value="MTS">MTS</option>
                                                    <option value="MA">MA</option>
                                                    <option value="SMK">SMK</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="nama_lengkap">Nama lengkap</label>
                                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                                            </div>
                                        </div>

                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="jk">Jenis Kelamin</label>
                                                <select class="form-control" id="jk" name="jk">
                                                    <option value="Laki-Laki">Laki-Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="nisn">NISN</label>
                                                <input type="text" class="form-control" id="nisn" name="nisn">
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="nik">NIK</label>
                                                <input type="text" class="form-control" id="nik" name="nik">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="ttl">Tempat Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="ttl" name="ttl">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="agama">Agama</label>
                                                <select class="form-control" id="agama" name="agama">
                                                    <option value="ISLAM">ISLAM</option>
                                                    <option value="HINDU">HINDU</option>
                                                    <option value="BUDDHA">BUDHHA</option>
                                                    <option value="KHATOLIK">KHATOLIK</option>
                                                    <option value="KRISTEN">KRISTEN</option>
                                                    <option value="KONGHUCU">KONGHUCU</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="alamat">Alamat</label>
                                                <input type="longtext" class="form-control" id="alamat" name="alamat">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="tempat_tinggal">Tempat Tinggal</label>
                                                <select class="form-control" id="tempat_tinggal" name="tempat_tinggal">
                                                    <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                                                    <option value="Wali">Wali</option>
                                                    <option value="Asrama">Asrama</option>
                                                    <option value="Panti Asuhan">Panti Asuhan</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="anak_keberapa">Anak Keberapa</label>
                                                <input type="longtext" class="form-control" id="anak_keberapa" name="anak_keberapa">
                                            </div>
                                        </div>

                                        <a> 2. DATA AYAH KANDUNG </a>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="nama_ayah_kandung">Nama Ayah Kandung</label>
                                                <input type="longtext" class="form-control" id="nama_ayah_kandung" name="nama_ayah_kandung">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="nik_ayah_kandung">NIK Ayah</label>
                                                <input type="longtext" class="form-control" id="nik_ayah" name="nik_ayah">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="thn_lahir_ayah">Tahun Lahir</label>
                                                <input type="longtext" class="form-control" id="thn_lahir_ayah" name="thn_lahir_ayah">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="pekerjaan_ayah">Pekerjaan</label>
                                                <input type="longtext" class="form-control" id="Pekerjaan_ayah" name="pekerjaan_ayah">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="pendidikan_ayah">Pendidikan</label>
                                                <input type="longtext" class="form-control" id="pendidikan_ayah" name="pendidikan_ayah">
                                            </div>
                                        </div>


                                        <a> 3. DATA IBU KANDUNG </a>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="nama_ibu_kandung">Nama Ibu Kandung</label>
                                                <input type="longtext" class="form-control" id="nama_ibu_kandung" name="nama_ibu_kandung">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="nik_ibu">NIK Ibu</label>
                                                <input type="longtext" class="form-control" id="nik_ibu" name="nik_ibu">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="thn_lahir_ayah">Tahun Lahir</label>
                                                <input type="longtext" class="form-control" id="thn_lahir_ibu" name="thn_lahir_ibu">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="pekerjaan_ibu">Pekerjaan</label>
                                                <input type="longtext" class="form-control" id="Pekerjaan_ibu" name="pekerjaan_ibu">
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label for="pendidikan_ibu">Pendidikan</label>
                                                <input type="longtext" class="form-control" id="pendidikan_ibu" name="pendidikan_ibu">
                                            </div>
                                        </div>



                                        <a> 4. DATA WALI </a>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="nama_wali">Nama Wali</label>
                                                <input type="longtext" class="form-control" id="nama_wali" name="nama_wali">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="nik_wali">NIK Wali</label>
                                                <input type="longtext" class="form-control" id="nik_wali" name="nik_wali">
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="thn_lahir_wali">Tahun Lahir</label>
                                                <input type="longtext" class="form-control" id="thn_lahir_wali" name="thn_lahir_wali">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="pekerjaan_wali">Pekerjaan</label>
                                                <input type="longtext" class="form-control" id="Pekerjaan_wali" name="pekerjaan_wali">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="pendidikan_wali">Pendidikan</label>
                                                <input type="longtext" class="form-control" id="pendidikan_wali" name="pendidikan_wali">
                                            </div>
                                        </div>
                                        <a> 5. KONTAK </a>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="nomor_hp">Nomor HP</label>
                                                <input required type="longtext" class="form-control" id="nomor_hp" name="nomor_hp">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="media_sosial">Media Sosial</label>
                                                <input type="longtext" class="form-control" id="media_sosial" name="media_sosial">
                                            </div>
                                        </div>

                                        <a> 6. REGISTRASI PESERTA DIDIK </a>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="jurusan_MA">Jurusan MA</label>
                                                <select class="form-control" name="jurusan_MA">
                                                    <option value="Bahasa">Bahasa</option>
                                                    <option value="Agama">Agama</option>
                                                    <option value="IPA">IPA</option>
                                                    <option value="IPS">IPS</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="jurusan_SMK">Jurusan SMK</label>
                                                <select class="form-control" name="jurusan_SMK">
                                                    <option value="Desain Grafis">Desain Grafis</option>
                                                    <option value="Tata Busana">Tata Busana</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="jenis_pendaftaran">Jenis Pendaftaran</label>
                                                <select class="form-control" id="jenis_pendaftaran" name="jenis_pendaftaran">
                                                    <option value="Siswa Baru">Siswa Baru</option>
                                                    <option value="Pindahan">Pindahan</option>
                                                    <option value="Kembali Bersekolah">Kembali Bersekolah</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="asal_sekolah">Asal Sekolah</label>
                                                <input type="longtext" class="form-control" id="asal_sekolah" name="asal_sekolah">
                                            </div>
                                        </div>


                                        <a> 6. KELENGKAPAN DATA </a>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="kartu_keluarga">Kartu Keluarga</label>
                                                <select class="form-control" name="kartu_keluarga">
                                                    <option value="ADA">ADA</option>
                                                    <option value="TIDAK ADA">TIDAK ADA</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="ijazah">Ijazah</label>
                                                <select class="form-control" name="ijazah">
                                                    <option value="ADA">ADA</option>
                                                    <option value="TIDAK ADA">TIDAK ADA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label for="skhu">SKHU</label>
                                                <select class="form-control" name="skhu">
                                                    <option value="ADA">ADA</option>
                                                    <option value="TIDAK ADA">TIDAK ADA</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="akte_kelahiran">Akte Kelahiran</label>
                                                <select class="form-control" name="akte_kelahiran">
                                                    <option value="ADA">ADA</option>
                                                    <option value="TIDAK ADA">TIDAK ADA</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-md-4">
                                                <label for="kartu_indonesia_pintar">Kartu Indonesia Pintar</label>
                                                <select class="form-control" name="kartu_indonesia_pintar">
                                                    <option value="ADA">ADA</option>
                                                    <option value="TIDAK ADA">TIDAK ADA</option>
                                                </select>
                                            </div>
                                        </div>

                                        <P> 6. upload kk </P>
                                        <div class="mb-3">
                                            <label for="formFileSm" class="form-label">Small file input example</label>
                                            <input required class="form-control form-control-sm" id="formFileSm" type="file" name="foto">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block" name="btndaftar">Daftar</a>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>