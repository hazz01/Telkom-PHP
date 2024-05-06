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
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .result {
            margin-bottom: 10px;
        }

        .result label {
            font-weight: bold;
        }

        .result span {
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="result">
        <label>Nama:</label>
        <span><?php echo $_POST['nama']; ?></span>
    </div>
    <div class="result">
        <label>Usia:</label>
        <span><?php echo $_POST['usia']; ?></span>
    </div>
    <div class="result">
        <label>Jenis Kelamin:</label>
        <span><?php echo $_POST['jk']; ?></span>
    </div>
    <div class="result">
        <label>Agama:</label>
        <span><?php echo $_POST['agama']; ?></span>
    </div>
    <div class="result">
        <label>Alamat:</label>
        <span><?php echo $_POST['alamat']; ?></span>
    </div>
    <div class="result">
        <label>Tempat Lahir:</label>
        <span><?php echo $_POST['tempat']; ?></span>
    </div>
    <div class="result">
        <label>Tanggal Lahir:</label>
        <span><?php echo $_POST['lahir']; ?></span>
    </div>
    <div class="result">
        <label>Hobi:</label>
        <span><?php echo $_POST['hobi']; ?></span>
    </div>
    <div class="result">
        <label>Cita-Cita:</label>
        <span><?php echo $_POST['cita']; ?></span>
    </div>
    <div class="result">
        <label>Cita-Cita:</label>
        <span><?php echo $_POST['asal']; ?></span>
    </div>
</div>

</body>
</html>
