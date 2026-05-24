<?php

include "koneksi.php";

$id = $_GET['id'];

$data = $conn->query("
SELECT * FROM siswa
WHERE id='$id'
");

$row = $data->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Data</title>

<style>

body{
    font-family:Arial;
}

#box{
    width:400px;
    margin:30px auto;
    border:1px solid #ccc;
    padding:20px;
}

input[type=text]{
    width:100%;
    padding:8px;
}

.btn{
    padding:5px 10px;
    color:white;
    border:none;
}

.update{
    background:green;
}

.kembali{
    background:dodgerblue;
    text-decoration:none;
    padding:5px 10px;
}

</style>

</head>

<body>

<div id="box">

<h2 align="center">Edit Data Siswa</h2>

<form action="proses_edit.php" method="post">

<input type="hidden"
       name="id"
       value="<?php echo $row['id']; ?>">

Nama:
<br>
<input type="text"
       name="nama"
       value="<?php echo $row['nama']; ?>">

<br><br>

Kelas:
<br>
<input type="text"
       name="kelas"
       value="<?php echo $row['kelas']; ?>">

<br><br>

<input type="submit"
       value="Update"
       class="btn update">

<br><br>

<a href="index.php" class="kembali">
Kembali
</a>

</form>

</div>

</body>
</html>