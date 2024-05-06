<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hihiha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        form {
            background-color: #fff;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }
        
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<form action="tugas2_tampil.php" method="post">
    <label>Masukkan Nama</label>
    <input type="text" name="nama">
    <label>Masukkan Usia</label>
    <input type="text" name="usia">
    <label>Masukkan Jenis Kelamin</label>
    <input type="text" name="jk">
    <label>Masukkan Agama</label>
    <input type="text" name="agama">
    <label>Masukkan Alamat</label>
    <input type="text" name="alamat">
    <label>Masukkan Tempat Lahir</label>
    <input type="text" name="tempat">
    <label>Masukkan Tanggal Lahir</label>
    <input type="text" name="lahir">
    <label>Masukkan Hobi</label>
    <input type="text" name="hobi">
    <label>Masukkan Cita-Cita</label>
    <input type="text" name="cita">
    <label>Masukkan Usia</label>
    <input type="text" name="usia">
    <label>Masukkan Asal Sekolah</label>
    <input type="text" name="asal">
    <input type="submit" value="oke">
</form>

<?php

?>

</body>
</html>
