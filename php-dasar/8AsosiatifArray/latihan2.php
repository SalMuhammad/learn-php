<?php 
// $mhs = [
//   "nama" => "muhamad faisal",
//   "jurusan" => "informatika",
//   "nim" => "10222062",
//   "email" => "paisal@gmail.com",
// ];
// echo $mhs['jurusan']


$buah_buahan = [
   [
      "nama" => "apel",
      "gambar" => "https://images.tokopedia.net/img/cache/700/hDjmkQ/2022/12/9/2c6e6cfc-ad6d-49aa-9754-8e7b6f12cbc6.jpg",
      "rasa" => "manis",
      "asal_negara" => "Amerika Serikat",
      "tanda_matang" => "berwarna merah cerah",
      "kebebasan_makan" => true,
      "ditemukan" => "abad ke-19"
    ],
    [
      "nama" => "mangga",
      "gambar" => "data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQTEhUSExMVFhUVFhcVGBgVFRUWFRcVFRUXFxYVFRUYHSggGBolGxUVITEhJSkrLi4uGB80OTQtOCgtLisBCgoKDg0OGhAQGy0lHyYtLS0tLS0tLS8tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALcBEwMBIgACEQEDEQH/xAAbAAEAAgMBAQAAAAAAAAAAAAAABAUCAwYBB//EADgQAAIBAgMGAwcEAQMFAAAAAAABAgMRBCExBRJBUWFxIoGhBhMykbHR8EJSweEUFRZiQ3KSovH/xAAaAQEAAgMBAAAAAAAAAAAAAAAAAwQBAgUG/8QAMREAAgECBAMGBgIDAQAAAAAAAAECAxEEEiExBUFREyJhsdHwMnGBkaHhFMEjQpIG/9oADAMBAAIRAxEAPwD7iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAeMA9Br94ua+aMrowmnsDIGO8jB1o/uRhyUd3YzY2giyxsFx9Ga57Wprj6FWXEMLHerH/pepsqc3smTgRqGMhP4ZG+Mk9CxTqwqq8JJrwafkauLW6MgASGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACrx2PcZOnFWsk3LvwRC97J5u7LLaGHv41qsn2Ie4eT4x/Idezfd5Llb1LlBxUfE1xxUVqexxUXo7dXxMa1BP4suSWq8ysxVJ09HdX/Mjj1KtaGjs/w/Vfh9eaLUIQns3csp1Irj6mnfb+H5sqJ1rkh4xrsVJVLva3yLH8dx+ZYKFlrf8AORprUFLVW7OxG/1Ai18e2L+/dzMKNS5ZYWShdRlm+L5cjOWJa428yowlTMsYK+XobKUtvt75fQVKajLXU3Q2zOP6rrqXGzdpqrk1ZnG7Qk1LdeVvxFz7PYiNPOSu5ceR1uHcQr060Y1KjyX1za/teS56EWJwkOyzRWvKx1YK7/U430y5k6E01daHrqGMo121Sknb39V4rQ5Eqco7ozABZNAAAAAAAAAAAAAAAAAAAAAAAAAAAACHicfCGru+SKbFbaqP4fCvX5soYnieHoaSd30Wr9F9WS06E6nwo6Kpa2drddCnpVY3aUlJJ2vdNW7nPYupOS8Um33bNXs7iN2cqTeUvEu/H+PkcLE8TjimoqFrbXd35W8y4sHKCzNnUuaWfpzfI0zwykvGs5Zt8EuFkewjnfik8ud+P/wVpZX0/PUpq0o95J+Hm/66rfnc1Wj0KDEYGSb3fEvX5GmTJWOxtnl+eZGVRT1eZyp2W2x2IObinI0zRojFt2Su2SpxaNmAhupzeryXbizGbKrkufLFsm4LZyjZzd3yvp3ZM31FWirFbDE5m1VDaMrvXQpThNu8mZ4rDKtbO0lx5rkzVKW74UtMjJ5O69D2VWLyln15eZtUSlZMK6Vt10NKrsn7P2m4PW64p/wVMjT71LXyFCtOlNTpuzRNKhGas0fQaFVTW9F3TNpzvs05Nt3suK+jOiPf4HEyxFBVJRs37uvemx5+vTVObhe4ABbIgAAAAAAAAAAAAAAAAAADGUks3kiox+2oxyhm+fAr18VSoRzVHbzfyRtCEpu0VqWWJxEYK8n5cylxm1JTyj4V6lVUruct6TuzF1Dy2M4vVrd2Hdj+X83/AEjp0sEo6y1Zvl1ZplYwcrmqUjkWRejA9qzWhT4mu4TU1+l38uPpcsplZtCBJDSSZYUE00dbKtvQUqbW87NFRV2tKV4TVpLn9yJ7PY3wypP9Oa7Mm4zD+9eaV0spcb8FkYryyza5P38ipRgotqa258/fgVVSTlKyTbeiWpdbP2eoeKrqlfd4J8Lta9iPsq1PejJJTu/EuK4G+tUZE520iizVqSl3I6Lr1/RnibN34Phl+Ih18Rw5GcJ8GQ9oU2s0RxV3ZinBJ2Zn7w2Qxditp1rnqjKpLdgrv0Xdsl7LqWXTT32Js9oN6ZEnD6Z8TKl7Pyjb3jSeuWd0b6VBRzv08hUp2eXbqVp1aTVqbK3aFdxtGzvJXXbt5GnD4eV7y79S4r2avk2sutu5EcjTMlpFG0KvdslbqbcJXlCW8m0+Z1Gydo7/AIZvxcHpfmjk5TsbMNi7STWTWhcwWPqYWpmT7vNcn1+vjv4lXEYZVY7anfA0YStvwUua9eJvPfRkpRUo7M8+007MAA2MAAAAAAAAAAAjYjFKOWr/ADU0nUjBZpPQEhuxBxe0owWWZErYltNyenAocViHJnFxfFJJWpK3jz9/ctYfDurKz2JONx8qmry5EPdMYyPGzz826ks0tX4nZhSUFljoZnm6YIORHlRvYylYxdkY3sYJ3NXZGyiJETEQuS5GEomjZLF2KTfdOoprRZPtxX5yOkp4hOOWjzKLHUzVs3G7r92/L7ElSHawvzRFWjZqX39fUu8XT31k7SWj+5roV5aTi0+N07d7nkqySuyJKpUq5LKL4v7FeEbrX79CaMdLPYk4jGU4LW76PJeZHobTc3uxTlfkr/NlfgNn78pe9fii2t2/h7vmXVCmo2SVkuCJakacNN2btU4q1rsgY2jKm03kpcsvn1LDB4qKVo5GdemqkXF+T5M5qniHTm4SyaMRj20bPdGIJTWWR23+U5R1vYizmVFDaFs75GrEbcjpBXfRXNVRm3ZK5pHCyTsloXMJu5hVyZFwEpPOSd+uXoSJYfLebbfLK3kRuFmw0oysR6uKv4YpyfRG7CQesl6mcZ2G+ZzK2iMt6WSOw2NjVKKhazivnYtjiNmYncqRfL6afS52yPZ8FxksRQan8UXb6W0/tfQ85jKHZVNNnr6noAOwVAAAAAAAAAActi8T45d39TqTitrwcakl1Zy+Kp9nG3X+jaJvrYi8SuazI7xGeZtburo83Wltc62AktY8z1yPDyELmdiFtnRdkYSfUxUvz+jJxu8jyUSOT5mTGTPYuxg3nY9tzI2bcjM8seXPGzQEbEwuUOOp2d0dFUepU46iyxQlZklro2bMxqqLP4o6r+UWaqHH3lTlvR4fJrkX+ExSmlJea5G2IoW70diCP+OWV7cvT0JOJottVIO018pL9r+5spV95X0ejT1T5MwqYiMVvSaSKiptadR2w9Le4Obyj2uQxpymttue3mWF0L+Eis25QhWtuyXvY6WzuuUmtO7IVHCVat3UqS1zjF7sVbg7alvgcKqaskl2NsqpSzKV34bfncy4Ja31KHBYPelu1XJbuThpn1f2OrwmEp04eCKV/n5vUo/aOk4uOIjwtGfbhL+PkStlY3eWupvWlKcFNbdOjMSTqQuntuiwnI9o1b5PRmuSEIlN2saZVaxnNWdjGLM66yT8n/DIbpVW9YKPdtv0EVfmZjqtSbQd3kd5gd73cd5WdrPyyucTstypO6cb83r2VzuMHU3oRk9Ws+/E9H/55QU6lm72WnK1979fta/Plx+Kvay06kgAHqTkAAAAAAAAAA5z2lw9mp8GrPuv6+h0ZoxdBVIOL4+j4Mhr0u1g4mU7HznGRNGFxe67PQttpYNwbi1mikq0MzzFehe6ZZpzcXdFzCS1QmUdGrKGhPobQXFW7HNqUJxOlSxcZfFoyeoWRjJHkK6fE9lUK7kW4tswdPieOPA276EkuBhyNrvmadw83CVu5IWXY1bMdoRFSNNTD3LBnjRlTN1UaKDFYAgQTpSvw4rmjp8Ra2qRQbRlDnctUJyehBXr08tpMkx3KiTaTXC6uTKRzGH2gqcv+L1X8l9h8QmlJO65ivQlH5EeHxal3Wbasd2W+tHlJfR9ze2YXueSkoxzyXoVnrY6CaZv3VJNNJpqzXBp6o52vhpYWfF0m/C+XR9fqWS2tG+7Ti6j6fD/AOX2JE6VSovFJwVtIvLz5ktNyp/Fs90FeLuVz25+mMHLrov7N9DFTlm15Ii7PajN06i8Sdn16ruXroRjnHiZqqENFH9kjlCPLcUHva5MwbabXLIyi8zHFRe9ktUn9yqlrYi/2M6R22wZ3ox6XXqcRQozvovmdpsLKlb/AJP6I7PAbrFvplfmvQ5vE7dn9S1AB7M4QAAAAAAAAAAABB2ls+NWPKS0f8PocZtDZ0oSaat9H1R9BNNehGatJJr80fAqYjCKrqtGbRlY+Z1KBodKx2uP9nHrTd+j18mc5jcJOm7Ti491r2fE41XDTp/EvQlUr7FZFMzVV82ZTkjROSKU6UZbokjNx2ZvWJfM2wxbK51DH35C8NAlWJqrmXP+aYPHlS65oniupp/Eh0MvE1OpcT2iyNUx7fEqKuNSK3F7VitZJE1PCq+iIpVJPdl3icb1KfF4xFHitvx/TeXYq6uOqT6L1OlSwUuasRORcYnHIk7E2pKnK97xesf5XI5+lSfEnUY2LLoQy5XqYu90fRcBjYzV4u/1XclzwdOec1fldnAYTESi7xdmdLs7byeVTJ81p58ji4jASh3qb9f2dChjGtJF7hcNGOiJUSJRrJq6d0+RIpzOU1K+p041VLW5D2tgN61SC8cf/Zcu/I2bKr78dfnzJm+1orlRWo7lRPc3VJ/pbSvxNoPNHK+W3obptrKW04W1PKsvCnbJceKPaWHj8SvmuJIguHB5EMlbU1ckeYKbZ0GyK1m481f5P+zncL4brjoWux6l6nZM6XB244mNuv6KGPSyM6VSM1I0RZmj3JxDdc9MImSMg9AAAAAAAAAAMZAHjmRcRWVrOzXJ5ozqldirmkmCp2lhqD/6aX/beP0OX2jhacbuMpLzTX0OhxyZzuPotlGpShLeK+xumzmcdjnDR39Cpq+0E1+j1/ousXs9vgQZbK6ECo0+aMlTPb9Z6QS839jXLaOIl+1eTf8AJdx2WuRvp7M6Eip0ltFDU5qVOtP4py8rL6GMdl31u++Z2FLZL5EyjsV8iRNrZWBxUNl9CTDZnQ7mlsLoSobA6DLJmbo+frAPke/4rXA+h/7e6GL9mehq6MhmOBjTZtjBncf7W6GS9mHyNewkMyOQwlepD4W104fIucJtyS+OPnH7P7lr/tt/tPH7OS/a/kVquCjU+JepJGo47M9o7Tpy/VburEqVVTja6a6fU0U/Z2f7WbYey1R8LFWXB4v4W/P0f5LEcZNbmyNayS5GX+UbaPsrU/e15ss8L7JpfFKT87ED4JVb0sS/zlzKh1W9OJ0Ps9gZRTlNWcn6dfUscHsqFP4Yrvx+ZPjTOtgOFrDyzyd3+PzqU6+IdT5GuMTZGJmkenXKp4kegGQAAAAAAAAAAAAYSgR62HuSwYsCjxGz7lbW2Pfgda0YuCNXBGbnEVNhdDS/Z7od57lHnuEa9khc4WPs90JFP2fXI7L3KPVSRns0LnLUthLkS6Wx0uB0Cij2xlQRi5UU9mLkSIbPXIsAbWBEjg0ZrCRJAFgaVh48j33EeRtAsDX7qPIe5jyNgMgwUFyPdxcjICwPD0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA//2Q==",
      "rasa" => "manis dan sedikit asam",
      "asal_negara" => "India",
      "tanda_matang" => "berwarna kuning",
      "kebebasan_makan" => true,
      "ditemukan" => "abad ke-4 SM"
    ], 
    [
      "nama" => "pisang",
      "gambar" => "data:image/jpeg;base64,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",
      "rasa" => "manis",
      "asal_negara" => "Asia Tenggara",
      "tanda_matang" => "kulit berubah warna menjadi kuning atau coklat",
      "kebebasan_makan" => true,
      "ditemukan" => "abad ke-7"
    ], 
    [
      "nama" => "stroberi",
      "gambar" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0TPz0Hv6mWyLJpxDyVIuq_OOGc71fOeMDlA&usqp=CAU",
      "rasa" => "manis",
      "asal_negara" => "Belanda",
      "tanda_matang" => "berwarna merah cerah",
      "kebebasan_makan" => true,
      "ditemukan" => "abad ke-18"
    ], 
    [
      "nama" => "nanas",
      "gambar" => "https://awsimages.detik.net.id/community/media/visual/2022/07/04/diet-nanas-bikin-bb-turun-1-kg-seminggu-apa-aman-untuk-kesehatan-3.jpeg?w=1200",
      "rasa" => "asam manis",
      "asal_negara" => "Brasil",
      "tanda_matang" => "bau wangi dan berwarna kuning keemasan",
      "kebebasan_makan" => true,
      "ditemukan" => "abad ke-15"
  ]
];

// foreach ($buah_buahan as $buah) {
//     echo "<h2>" . $buah['nama'] . "</h2>";
//     echo "<img src='" . $buah['gambar'] . "' width='100px' alt='" . $buah['nama'] . "'><br>";
//     echo "<p>Rasa: " . $buah['rasa'] . "</p>";
//     echo "<p>Asal Negara: " . $buah['asal_negara'] . "</p>";
//     echo "<p>Tanda Matang: " . $buah['tanda_matang'] . "</p>";
//     echo "<p>Ditemukan: " . $buah['ditemukan'] . "</p>";
//     echo "<hr>";
//   }
  ?>

<!-- 
<ul>
  <?php foreach ($buah_buahan as $buah) : ?>
    <li><img src='<?= $buah["gambar"]; ?>' width="100px" alt='gambar'></li>
  <?php endforeach; ?>
</ul> -->

<br>
<!-- <img src="https://img.ws.mms.shopee.co.id/1a01a78a9fba28f97b33648dea01be5a" alt=""> -->