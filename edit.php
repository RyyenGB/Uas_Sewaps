<?php
require_once 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM t_sewa WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $nomer_telepon = $row['nomer_telepon'];
        $email = $row['email'];
        $pilihan_playstation = $row['pilihan_playstation'];
        $durasi_jam = $row['durasi_jam'];
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "ID tidak ditemukan.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomer_telepon = $_POST['nomer_telepon'];
    $email = $_POST['email'];
    $pilihan_playstation = $_POST['pilihan_playstation'];
    $durasi_jam = $_POST['durasi_jam'];


    
    $sql = "UPDATE t_sewa SET nama='$nama', alamat='$alamat', nomer_telepon='$nomer_telepon', email='$email', pilihan_playstation='$pilihan_playstation', durasi_jam='$durasi_jam' WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        
        header("Location: sisa_sewa.php");
        exit;
    } else {
        
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
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
    <title>Rental PSCOY - Edit Data Sewa</title>
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
</head>

<body>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>

        <label for="nomer_telepon">Nomer Telepon:</label>
        <input type="text" id="nomer_telepon" name="nomer_telepon" value="<?php echo $nomer_telepon; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

        <label for="pilihan_playstation">Pilihan PlayStation:</label>
        <select id="pilihan_playstation" name="pilihan_playstation" required>
            <option value="Playstation4" <?php if ($pilihan_playstation == 'Playstation4') echo 'selected'; ?>>PlayStation 4</option>
            <option value="Playstation5" <?php if ($pilihan_playstation == 'Playstation5') echo 'selected'; ?>>PlayStation 5</option>
        </select>

        <label for="durasi_jam">Durasi Jam:</label>
        <input type="time" id="durasi_jam" name="durasi_jam" value="<?php echo $durasi_jam; ?>" required>

        <button type="submit">Update</button>
    </form>
</body>

</html>
<?php
require_once 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM t_sewa WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $nomer_telepon = $row['nomer_telepon'];
        $email = $row['email'];
        $pilihan_playstation = $row['pilihan_playstation'];
        $durasi_jam = $row['durasi_jam'];
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "ID tidak ditemukan.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomer_telepon = $_POST['nomer_telepon'];
    $email = $_POST['email'];
    $pilihan_playstation = $_POST['pilihan_playstation'];
    $durasi_jam = $_POST['durasi_jam'];


    
    $sql = "UPDATE t_sewa SET nama='$nama', alamat='$alamat', nomer_telepon='$nomer_telepon', email='$email', pilihan_playstation='$pilihan_playstation', durasi_jam='$durasi_jam' WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        
        header("Location: sisa_sewa.php");
        exit;
    } else {
        
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
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
    <title>Rental PSCOY - Edit Data Sewa</title>
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
</head>

<body>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>

        <label for="nomer_telepon">Nomer Telepon:</label>
        <input type="text" id="nomer_telepon" name="nomer_telepon" value="<?php echo $nomer_telepon; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

        <label for="pilihan_playstation">Pilihan PlayStation:</label>
        <select id="pilihan_playstation" name="pilihan_playstation" required>
            <option value="Playstation4" <?php if ($pilihan_playstation == 'Playstation4') echo 'selected'; ?>>PlayStation 4</option>
            <option value="Playstation5" <?php if ($pilihan_playstation == 'Playstation5') echo 'selected'; ?>>PlayStation 5</option>
        </select>

        <label for="durasi_jam">Durasi Jam:</label>
        <input type="time" id="durasi_jam" name="durasi_jam" value="<?php echo $durasi_jam; ?>" required>

        <button type="submit">Update</button>
    </form>
</body>

</html>
<?php
require_once 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM t_sewa WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $alamat = $row['alamat'];
        $nomer_telepon = $row['nomer_telepon'];
        $email = $row['email'];
        $pilihan_playstation = $row['pilihan_playstation'];
        $durasi_jam = $row['durasi_jam'];
    } else {
        echo "Data tidak ditemukan.";
        exit();
    }
} else {
    echo "ID tidak ditemukan.";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomer_telepon = $_POST['nomer_telepon'];
    $email = $_POST['email'];
    $pilihan_playstation = $_POST['pilihan_playstation'];
    $durasi_jam = $_POST['durasi_jam'];


    
    $sql = "UPDATE t_sewa SET nama='$nama', alamat='$alamat', nomer_telepon='$nomer_telepon', email='$email', pilihan_playstation='$pilihan_playstation', durasi_jam='$durasi_jam' WHERE id='$id'";

    if (mysqli_query($koneksi, $sql)) {
        
        header("Location: sisa_sewa.php");
        exit;
    } else {
        
        echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
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
    <title>Rental PSCOY - Edit Data Sewa</title>
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
</head>

<body>
    <form action="edit.php?id=<?php echo $id; ?>" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>

        <label for="nomer_telepon">Nomer Telepon:</label>
        <input type="text" id="nomer_telepon" name="nomer_telepon" value="<?php echo $nomer_telepon; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>

        <label for="pilihan_playstation">Pilihan PlayStation:</label>
        <select id="pilihan_playstation" name="pilihan_playstation" required>
            <option value="Playstation4" <?php if ($pilihan_playstation == 'Playstation4') echo 'selected'; ?>>PlayStation 4</option>
            <option value="Playstation5" <?php if ($pilihan_playstation == 'Playstation5') echo 'selected'; ?>>PlayStation 5</option>
        </select>

        <label for="durasi_jam">Durasi Jam:</label>
        <input type="time" id="durasi_jam" name="durasi_jam" value="<?php echo $durasi_jam; ?>" required>

        <button type="submit">Update</button>
    </form>
</body>

</html>
