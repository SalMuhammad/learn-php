<?php 
if(!isset($_GET["nama"])) {
  header("Location: latihan2.php");
  exit;
  // echo "<s cript>alert('ol')</s>";
}

require_once('../8AsosiatifArray/latihan2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>

<!-- <?php var_dump($_GET) ?> -->

<table border="1" cellspacing="0">
  <tr>
    <td>gambar</td>
    <td>nama</td>
    <td>rasa</td>
    <td>asal Negara</td>
    <td>tanda matang</td>
    <td>di temukan pada abad</td>
  </tr>
  <?php 
      $found = false;
      foreach($buah_buahan as $buah) : 
        if(isset($_GET["nama"]) && $buah["nama"] == $_GET["nama"]): // apabila ada 
          $found = true;
          ?>

        <?php cetakTR($buah) ?>
        <!-- <tr>  
          <td><img src='<?= $buah["gambar"]; ?>' alt="ini gambar" width="50px"></td>
          <td><?= $buah["nama"]; ?></td>
          <td><?= $buah["rasa"]; ?></td>
          <td><?= $buah["asal_negara"]; ?></td>
          <td><?= $buah["tanda_matang"]; ?></td>
          <td><?= $buah["kebebasan_makan"]; ?></td>
          <td><?= $buah["ditemukan"]; ?></td>
        </tr> -->
      <?php endif; 
      endforeach;
      ?>

      <?php foreach($buah_buahan as $buah) : ?>
        <?php if(!$found) : ?>
          <?php cetakTR($buah) ?>

          <!-- <tr>
            <td><img src='<?= $buah["gambar"]; ?>' alt="ini gambar" width="50px"></td>
            <td><?= $buah["nama"]; ?></td>
            <td><?= $buah["rasa"]; ?></td>
            <td><?= $buah["asal_negara"]; ?></td> 
            <td><?= $buah["tanda_matang"]; ?></td>
            <td><?= $buah["kebebasan_makan"]; ?></td>
            <td><?= $buah["ditemukan"]; ?></td>
          </tr>  -->
          <?php endif;?>
        <?php endforeach; ?>
  </table>
        

  <?php function cetakTR($buah) { ?>
    <tr>
      <td><img src='<?= $buah["gambar"]; ?>' alt="ini gambar" width="50px"></td>
      <td><?= $buah["nama"]; ?></td>
      <td><?= $buah["rasa"]; ?></td>
      <td><?= $buah["asal_negara"]; ?></td> 
      <td><?= $buah["tanda_matang"]; ?></td>
      <td><?= $buah["kebebasan_makan"]; ?></td>
      <td><?= $buah["ditemukan"]; ?></td>
    </tr>
  <?php } ?>
</body>
</html>