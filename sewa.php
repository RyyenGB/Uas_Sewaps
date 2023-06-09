<?php
include 'koneksi.php';

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mengambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomer_telepon = $_POST['nomer_telepon'];
    $email = $_POST['email'];
    $pilihan_playstation = $_POST['pilihan_playstation'];
    $durasi_jam = $_POST['durasi_jam'];

    // Proses penyimpanan data ke dalam basis data
    $sql = "INSERT INTO t_sewa (nama, alamat, nomer_telepon, email, pilihan_playstation, durasi_jam) 
            VALUES ('$nama', '$alamat', '$nomer_telepon', '$email', '$pilihan_playstation', TIME('$durasi_jam:00'))";

    if ($koneksi->query($sql) === TRUE) {
        // Data berhasil disimpan
        echo '<script>
                function showPopup() {
                    alert("Sewa berhasil!");
                    window.location.href = "sisa_sewa.php";
                }
                showPopup();
            </script>';
        exit;
    } else {
        // Terjadi kesalahan saat menyimpan data
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}

$koneksi->close();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Images/attachment_22860590.png" type="image/png">
    <title>Rental PSCOY</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url(Images/wp.jpg) no-repeat scroll border-box bottom center;
            background-size: 1920px;
            padding: 20px;
        }

        form {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            box-sizing: border-box;
            margin-bottom: 20px;
            transition: border-bottom-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="number"]:focus,
        select:focus {
            border-bottom-color: steelblue;
            outline: none;
        }

        button[type="submit"] {
            background-color: steelblue;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #2d6ca2;
        }
    </style>
    <script>
        function showPopup() {
            alert("Sewa berhasil!");
            window.location.href = "sisa_sewa.php";
        }
    </script>
</head>

<body>
    <form action="sewa.php" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="nomer_telepon">Nomer Telepon:</label>
        <input type="text" id="nomer_telepon" name="nomer_telepon" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="pilihan_playstation">Pilihan PlayStation:</label>
        <select id="pilihan_playstation" name="pilihan_playstation" required>
            <option value="Playstation4">PlayStation 4</option>
            <option value="Playstation5">PlayStation 5</option>
            <!-- Tambahkan opsi lain sesuai kebutuhan -->
        </select>

        <label for="durasi_jam">Durasi Jam:</label>
        <input type="timer" id="durasi_jam" name="durasi_jam" value="1" required>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
