
  <!-- ======= Hero Section ======= -->
  <section id="bgEkskul" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Ekstrakulikuler</h1>
      <h2>PP DARUSHHIDDIQIEN NW MERTAK PAOK</h2>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <div class="container mt-4 mb-4">
    <div class="table-responsive-sm">          
    <table class="table table-succes">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Hari</th>
          <th>Waktu</th>
          <th>Pembimbing</th>
        </tr>
      </thead>
      <?php 
             $no=1;
                 foreach($ekskul as $row){
            ?>
      <tbody>
        <tr>
        <td><?=$no?></td>
        <td><?= $row->nama?></td>
        <td><?= $row->hari?></td>
        <td><?= $row->waktu?></td>
        <td><?= $row->pembimbing?></td>
        </tr>
        <?php 
             $no++;
              }
              ?>
         
      </tbody>
    </table>
    </div>
  </div>

  </main><!-- End #main -->