<?php require_once('../8AsosiatifArray/latihan2.php') ?>
<table>
  <tr>
    <th>nama</th>
    <th>detile</th>
  </tr>
  <ul>
    <?php foreach($buah_buahan as $buah) : ?>
      <li><a href='ind.php?nama=<?= $buah["nama"] ?>'><?= $buah["nama"]; ?></a></li>
    <?php endforeach; ?>
    <li><a href="ind.php?nama=semua">lihat semua</a></li>
    
  </ul>
</table>