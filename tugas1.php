

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hihiha</title>
    <style>
 .barang-box {
            margin: 10px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
            font-weight: 500;
            display: flex;
            flex-direction: column;
        }
        .barang-container {
            display: flex;
           
            justify-content: flex-starta; /* Mengatur agar berbaris ke kanan */
        }

    </style>
</head>
<body>

<div class="barang-container">
<?php
$dataProduk = array(
    array("Galaxy S21", "Samsung", 19000000, true),
    array("Galaxy A71", "Samsung", 6999000, false),
    array("iPhone 12 Pro Max", "Apple", 20999000, true),
    array("iPhone 12 Mini", "Apple", 10999000, false),
);

foreach ($dataProduk as $key => $value) {
    echo '<div class="barang-box">';
    echo "<p>$value[0]</p>";
    echo "<p>$value[1]</p>";
    echo "<p>$value[2]</p>";
    if ($value[3]) {
        echo "<button>Order</button>";
    }
    echo '</div>';
}


?>
</div>
</body>
</html>



