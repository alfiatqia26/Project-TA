
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
          <h2 class="text-center">BIODATA PONDOK</h2>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          
            <?php 
               foreach($profil as $row){
          ?>
            <!-- <div class="container">
            <h4>Nama Sekolah : <?= $row->nama_sekolah?></h4>
            <h4>Tahun Berdiri : <?= $row->tahun_berdiri?></h4>
            <h4>Alamat : <?= $row->alamat?></h4>
            <h4>Akreditasi : <?= $row->akreditasi?></h4>
            <h4>Pimpinan : <?= $row->pimpinan?></h4> 
</div> -->
<section class="columns">
	
	<div class="column" class="text-center">
		<h4>Nama Sekolah</h4>
		<p><?= $row->nama_sekolah?></p>
	</div>
	
	<div class="column">
		<h4>Tahun Berdiri</h4>
		<p><?= $row->tahun_berdiri?></p>
	</div>
  
  <div class="column">
		<h4>Alamat</h4>
		<p><?= $row->alamat?></p>
	</div>

  <div class="column">
		<h4>Pimpinan</h4>
		<p><?= $row->pimpinan?></p>
	</div>

  
	
</section>
          </div>
        </div>
        <?php 
            }
            ?>

      </div>


      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->
