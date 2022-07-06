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
                    <form action="<?= site_url('/TambahEkskul/TambahData')?>" method="post">
                       <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">TAMBAH EKSTRAKULIKULER</h1>
                            </div>

                            <div class="form">

                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="hari">Hari</label>
                                    <input type="text" class="form-control" id="hari" name="hari">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="waktu">Waktu</label>
                                    <input type="text" class="form-control" id="waktu" name="waktu">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="pembimbing">Pembimbing</label>
                                    <input type="text" class="form-control" id="pembimbing" name="pembimbing">
                                </div>


                                <button type="submit" class="btn btn-primary btn-user btn-block" name="btndaftar">Tambah</a>
                            </div>

