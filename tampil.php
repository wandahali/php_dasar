    <!-- menampilkan database -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
  <h2>HASIL DATA</h2>
<body>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>NIS</th>
            <th>Matematika</th>
            <th>Pipas</th>
            <th>Sejarah</th>
            <th>Produktif</th>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>Aksi</th>
        </tr>

    <a href="index.php">Kembali</a>
    <?php
    include "koneksi.php";
    $no =1;
    $sambil = mysqli_query($conn,"SELECT * from tb_nilai");
    while($data = mysqli_fetch_array($sambil)) {
      ?>
      
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data['nis']; ?></td>
        <td><?php echo $data['mtk']; ?></td>
        <td><?php echo $data['pipas']; ?></td>
        <td><?php echo $data['indo']; ?></td>
        <td><?php echo $data['sunda']; ?></td>
        <td><?php echo $data['pp'] ?></td>
        <td><?php echo $data['prod'] ?></td>
        <td>
          <a href="hapus.php?nis=<?php echo $data['nis']; ?>">Hapus</a>
          <a href=""></a>
        </td>
      </tr>
      <?php
    }
    
    
    
    
  ?>
    </table>
</body>
</html>