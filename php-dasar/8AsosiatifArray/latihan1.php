<?php 
$angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
?>
<style>
  .kotak {
    cursor: pointer;
    padding: 20px;
    font-size: 1.2em;
    display: inline-block;
    background-color: lime;
    color: white;
    transition: .5s;
    margin-bottom: 3px;
  }
  .kotak:hover {
    transform: rotate(180deg);
  }
  .clear{clear: both;}
</style>

<?php foreach($angka as $an) : 
  foreach ($an as $a) :?>
    <div class="kotak"><?= $a; ?></div>
  <?php endforeach; ?>
  <div class="clear"></div>
<?php endforeach ;?>
