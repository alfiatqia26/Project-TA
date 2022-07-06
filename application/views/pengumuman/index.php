<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row ">
                <div class="col-md-6">
                    Cek Status Pendaftarn : <br>
                    <form action="<?= site_url('pengumuman/cari') ?>" method="POST">
                        <input placeholder="Masukkan nomor registrasi anda" type="text" name="no_reg" class="form-control">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Cari Status">
                    </form>
                    <hr>
                    <?php
                    $pesan = $this->session->flashdata('pesan');
                    $status_ket = $this->session->flashdata('status_ket');
                    $status = $this->session->flashdata('status');
                    $no_reg = $this->session->flashdata('no_reg');
                    if ($pesan or $status_ket) {
                        echo $pesan;
                        echo $status_ket;
                        echo '<hr>';
                    }
                    if ($status == 's') {
                        echo "Silahkan Cetak Formulir pendaftaran : <a href='" . site_url('pengumuman/cetak/' . $no_reg) . "' class='btn btn-success btn-sm'>disini</a> <hr>";
                        echo "Untuk pendaftaran pondok, Klik link berikut : <a href='" . site_url('registrasi_pondok/index/' . $no_reg) . "' class='btn btn-success btn-sm'>Daftar Pondok</a> <hr>";

                    }
                    ?>
                </div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->
</main><!-- End #main -->