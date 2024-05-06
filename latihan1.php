<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hihiha</title>
    <style>
        .siswa-box {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<?php
$siswa = array(
    ['nama' => 'Ahmad Habibi', 'kelas' => 'X', 'jurusan' => 'RPL'],
    ['nama' => 'Zainul Abidin', 'kelas' => 'XII', 'jurusan' => 'RPL'],
    ['nama' => 'Firdaus', 'kelas' => 'XI', 'jurusan' => 'TKJ'],
    ['nama' => 'Achmad Ilham', 'kelas' => 'X', 'jurusan' => 'TKJ'],
);

foreach ($siswa as $key => $value) {
    echo '<div class="siswa-box">';
    foreach ($value as $field => $data) {
        echo "<p>$field: $data</p>";
    }
    echo '</div>';
}


?>
</body>
</html>
