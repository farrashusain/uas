<?php 
 $nama     = $_POST['nama'];
 $email    = $_POST['email'];
 $komentar = $_POST['komentar'];

 echo "<head><title>My Guest Book</head></title>";
 $fp = fopen("guestbook.txt","a+");
 fputs($fp,"$nama|$email|$komentar\n");
 fclose($fp);

 echo "terimakasih atas partisipasin anda mengisi guest book <br>";
 echo "<a href=tampilan.php> Isi buku tamu </a><br>";
 echo "<a href=lihat.php> Lihat buku tamu </a><br>";
 ?>