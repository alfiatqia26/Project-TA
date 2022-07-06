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
                    <form action="<?= site_url('/TambahProgram/editData')?>" method="post">
                       <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">EDIT PROGRAM</h1>
                            </div>

                            <input type="hidden" name="id" value="<?= $program_pondok['id']?>">
                            <div class="form">


                            <div class="form">

                                <div class="form-group col-md-6">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $program_pondok['nama']?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="hari">Hari</label>
                                    <input type="text" class="form-control" id="hari" name="hari" value="<?= $program_pondok['hari']?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="waktu">Waktu</label>
                                    <input type="text" class="form-control" id="waktu" name="waktu" value="<?= $program_pondok['waktu']?>">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="pengajar">Pengajar</label>
                                    <input type="text" class="form-control" id="pengajar" name="pengajar" value="<?= $program_pondok['pengajar']?>">
                                </div>

                                <button type="submit" class="btn btn-warning btn-user btn-block" name="btndaftar" onClick="return confirm('Yakin?')">Edit</a>
                            </div>

