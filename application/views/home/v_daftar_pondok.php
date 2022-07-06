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
                    <form action="<?= site_url('/registrasi_pondok/daftarPondok')?>" method="post">
                       <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">DAFTAR PROGRAM PONDOK</h1>
                                <h2>No Registrasi : <?=$data->no_reg;?></h2>
                            </div>

                            <div class="form">

                                <div class="form-group col-md-6">
                                    <label for="nama_lengkap">Nama</label>
                                    <input readonly type="hidden" value="<?=$data->no_reg?>" class="form-control" id="no_reg" name="no_reg">
                                    <input readonly type="text" value="<?=$data->nama_lengkap?>" class="form-control" id="nama_lengkap" name="nama_lengkap">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="jenjang">Jenjang</label>
                                    <input readonly type="text" class="form-control" id="jenjang"  value="<?=$data->jenjang_pendaftaran?>" name="jenjang">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="tempat_tinggal">Tempat Tinggal</label>
                                    <input readonly type="text" class="form-control" id="tempat_tinggal" name="tempat_tinggal"  value="<?=$data->tempat_tinggal?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="program_pilihan">Program Pilihan</label>
                                    <input type="text" class="form-control" id="program_pilihan" name="program_pilihan">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="no_reg">Nomo registrasi</label>
                                    <input readonly type="text" class="form-control" id="no_reg" name="no_reg"  value="<?=$data->no_reg?>">
                                </div>


                                <button type="submit" class="btn btn-primary btn-user btn-block" name="btndaftar">Tambah</a>
                            </div>

