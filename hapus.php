<?php
include "koneksi.php";

// $hapus = mysqli_query("DELETE FROM `tb_nilai` WHERE nis='$_GET[nis]'");

   $hapus = mysqli_query($conn,"DELETE FROM `tb_nilai` WHERE nis='$_GET[nis]'");
  if($hapus){
      echo "data telah berhasil dihapus";
      echo "<br>";
      echo "<a href='tampil.php'>Kembali</a>";
  }
  ?>
