<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">


    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 content">
                        <h4>Keterangan pengumuman : <br>
                        <?php
                        $pesan = $this->session->flashdata('pesan');
                        if ($pesan) {
                            echo $pesan;
                            echo '<br>';
                            echo 'Nomor Registrasi Anda :<b>' .$this->session->flashdata('no_reg').'</b>';
                            echo '<br>';
                            echo 'Silahkan Cek Status Pendaftaran anda pada bagian informasi menggunakan nomor Registrasi diatas.';
                        }

                        ?>
                        </h4>
                    </div>
                </div>

            </div>


        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->