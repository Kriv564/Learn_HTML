<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>Data Siswa</title>

<style>

body{
    font-family:Arial;
}

#box{
    width:500px;
    margin:30px auto;
    border:1px solid #ccc;
    padding:20px;
}

table{
    width:100%;
    border-collapse:collapse;
}

th,td{
    border-bottom:1px solid #ddd;
    padding:8px;
}

th{
    background:#f2f2f2;
}

.btn{
    padding:5px 10px;
    text-decoration:none;
    color:white;
    border-radius:3px;
}

.tambah{
    background:green;
}

.edit{
    background:dodgerblue;
}

.hapus{
    background:red;
}

</style>

</head>

<body>

<div id="box">

<h2 align="center">Data Siswa</h2>

<a href="tambah.php" class="btn tambah">
Tambah Data
</a>

<br><br>

<table>

<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Kelas</th>
    <th>Aksi</th>
</tr>

<?php

$data = $conn->query("SELECT * FROM siswa");

while($row = $data->fetch_assoc()){

?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['nama']; ?></td>

    <td><?php echo $row['kelas']; ?></td>

    <td>

        <a class="btn edit"
           href="edit.php?id=<?php echo $row['id']; ?>">
           Edit
        </a>

        <a class="btn hapus"
           href="hapus.php?id=<?php echo $row['id']; ?>">
           Hapus
        </a>

    </td>

</tr>

<?php
}
?>

</table>

</div>

</body>
</html>