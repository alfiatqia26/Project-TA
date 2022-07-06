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
                            <form action="<?= site_url('/Pengaturan/ubahData') ?>" method="post">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">PENGATURAN PROFIL</h1>
                                    </div>

                                    <div class="form">
                                        <h1 class="h4 text-gray-900 mb-4">DATA PONPES</h1>
                                        <div class="form-group col-md-12">
                                            <label for="nama_sekolah">Nama</label>
                                            <input type="text" class="form-control" id="nama_sekolah" name="nama_sekolah" value="<?= $profil->nama_sekolah; ?>">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="tahun_berdiri">
                                                <Table>Tahun Berdiri</Table>
                                            </label>
                                            <input type="text" class="form-control" id="tahun_berdiri" name="tahun_berdiri" value="<?= $profil->tahun_berdiri; ?>">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $profil->alamat; ?>">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="akreditasi">Akreditasi</label>
                                            <input type="text" class="form-control" id="akreditasi" name="akreditasi" value="<?= $profil->akreditasi; ?>">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label for="pimpinan">Pimpinan</label>
                                            <input type="text" class="form-control" id="pimpinan" name="pimpinan" value="<?= $profil->pimpinan; ?>">
                                        </div>
                                       

                                     <div class="form">
                                        <div class="form-group col-md-12">
                                        <h1 class="h4 text-gray-900 mb-4">VISI & MISI</h1>
                                        <label for="visi_misi">Visi Misi</label>
                                        <textarea name="visi_misi" id="visi_misi" cols="30" rows="10" class="form-control"><?= $profil->visi_misi; ?></textarea>
                                    </div>
                            </div>

                            <div class="form">
                                <h1 class="h4 text-gray-900 mb-4">STRUKTUR OGANISASI</h1>

                                <div class="form-group col-md-12">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                                <div class="form-group col-md-12">
                                            <button type="submit" class="btn btn-primary btn-user btn-block" name="btndaftar">Tambah</a>
                                    </div>

                            </div>
                            </form>