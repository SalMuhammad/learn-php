<?php 
// echo "<table border=\"1\" celspacing=\"0\">";
//   for ($i=0; $i < 5; $i++) { 
//     echo "<tr>";
//       for ($j=0; $i < 3; $i++) { 
//         echo "<td>$i.$j</td>";
//       }
//       echo "</tr>";
//   }
// echo "</table>";
?>

<table border="1" cellspacing="0">
  <tbody>
    <?php for ($i=1; $i <= 5; $i++) : ?>
      <tr>
        <?php for ($j=1; $j <=5; $j++) :?>
          <td><?= "$i.$j"; ?></td>
        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </tbody>
</table>