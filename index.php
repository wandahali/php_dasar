<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asgard</title><form action="" method="post">
</head>
<body>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQU2iKwR_Jr-4X_G7ImlAaZt_Jj6PFGNdVdLQ&usqp=CAU" alt="" >
    <h1>Masukan Nilai Kamu</h1> 
    <input type="number" name="nis" required placeholder="NIS"><br>
    <input type="number" name="mtk" required placeholder="MTK"><br>
    <input type="number" name="indo" required placeholder="INDO"><br>
    <input type="number" name="pipas"required placeholder="PIPAS"><br>
    <input type="number" name="sunda"required placeholder="SUNDA"><br>
    <input type="number" name="pp"required placeholder="PP"><br>
    <input type="number" name="prod"required placeholder="PRODUKTIFITAS"><br>
   
    
    <input type="submit" name="submit"><hr>   
    <br>
    <a href="tampil.php">Tampilkan</a><br>
    </body>
   </html>

<?php
if(isset($_POST['submit'])){
include "koneksi.php";
$mtk=$_POST['mtk'];
$nis=$_POST['nis'];
$indo =$_POST['indo'];
$pipas=$_POST['pipas'];
$sunda=$_POST['sunda'];
$pp=$_POST['pp'];
$prod=$_POST['prod'];
$sql="INSERT INTO `tb_nilai`(`nis`,`mtk`, `indo`, `pipas`, `sunda`, `pp`, `prod`) VALUES ('$_POST[nis]','$_POST[mtk]','$_POST[indo]','$_POST[pipas]','$_POST[sunda]','$_POST[pp]','$_POST[prod]')";
$apakah=mysqli_query($conn,$sql);
if($apakah){
    echo "berhasil dimasukan";
    
}else{
    "gagal";
    exit;
}
echo "<br>";

$n = array($mtk,$indo,$pipas,$sunda,$pp,$prod);
// $jumlah=count($n);
$jumlah = $mtk+$indo+$pipas+$sunda+$pp+$prod;
echo "Jumlah Nilai kamu adalah : ". $jumlah;
//$rata =array_sum($n);
$rata = $jumlah / 6;
echo "<br>";
echo "rata-rata Nilai Kamu Adalah : ". $rata;

echo "<br>";
echo "nilai maks nya:". max($n);
echo "<br>";
echo "nilai min nya:". min($n);
echo "<br>";
echo "Grade Kamu adalah : ";
if($rata>=90){
    echo "A";
}elseif($rata>=80){
    echo "B";
}elseif($rata>=70){
    echo "C";
}else{
    echo "D";
}
}
?>

</form>