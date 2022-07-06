
<!-- <style>
    body{
        background-color: greenyellow;
    }
</style> -->

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
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Visi - Misi.</h3>
            <p class="fst-italic">
              
            </p>
            <?php 
               foreach($profil as $row){
          ?>
            <h4><?= $row->visi_misi?></h4>
          </div>
        </div>
        <?php 
            }
        ?>

    

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
