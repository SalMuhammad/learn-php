<?php 
require 'functions.php';
$id = $_GET["id"];
if(hapus($id) > 0) { ?>
  <script>
        alert('data berhasil di hapus👌')
        document.location.href = 'index.php'
        console.log('jangan') 
      </script>
      <?php 
}

?>