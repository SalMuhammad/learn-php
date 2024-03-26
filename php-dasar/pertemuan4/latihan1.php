<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .warna {
      color: magenta;
    }
  </style>
</head>
<body>
  <table border="1" cellspacing="0">
    <tbody>
      <?php for ($i=1; $i <= 5; $i++) :?>
        <?php if($i % 2 == 0) : ?>
          <tr class="warna">
        <?php else: ?>
          <tr>
        <?php endif; ?>
          <?php for ($j = 1; $j <= 5; $j++) :?>
            <td><?= "$i.$j"; ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
    </tbody>
  </table>
  </body>
  </html>