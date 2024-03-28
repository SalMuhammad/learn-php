
// menampilkan gambar setelah file di muat ke document
let loadFile = function(event) {
  let gambar = document.getElementById("img")
  gambar.src = URL.createObjectURL(event.target.files[0])
  gambar.onload = function() {
    URL.revokeObjectURL(gambar.src)
  }
}