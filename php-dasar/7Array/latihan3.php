
<h1>Daftar mahasiswa</h1>
<ul>
  <!-- <?php $mhs = explode("-", "Mohamad Faisal-10222062-Informatika-moh.faisal10222062@sttcipasung.ac.id");?> -->
  <!-- <li><?= $mhs[0]; ?></li>
  <li><?= $mhs[1]; ?></li>
  <li><?= $mhs[2]; ?></li>
  <li><?= $mhs[3]; ?></li>
  <li><?= $mhs[4]; ?></li> -->
  <!-- <?php foreach($mhs as $m) { ?>
    <li><?= $m; ?></li>
  <?php } ?> -->

  <?php 
   $mhs1 = explode("-", "Mohamad Faisal-10222062-Informatika-moh.faisal10222062@sttcipasung.ac.id");
   $mhs2 = explode("-", "Farhan-10222504-Informatika-farhan10222504@sttcipasung.ac.id");
   $mhs3 = explode("-", "Dani Arham-10222504-Informatika-farhan10222504@sttcipasung.ac.id");
   
   $mahasiswa = [$mhs1, $mhs2, $mhs3];
   
   foreach($mahasiswa as $m ) :
   ?>
    <!-- <?php for ($j=0; $j < count($m); $j++) : ?>
      <li><?= $m[$j]; ?></li>
    <?php endfor ?> -->

    <li>Nama: <?= $m[0]; ?></li> 
    
  <?php endforeach; ?>
</ul>