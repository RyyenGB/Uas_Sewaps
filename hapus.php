<?php
require_once 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM t_sewa WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Data berhasil dihapus, redirect ke halaman sisa_sewa.php
        header("Location: sisa_sewa.php");
        exit();
    } else {
        // Data gagal dihapus
        echo "Gagal menghapus data.";
    }
} else {
    // Jika tidak ada parameter id, redirect ke halaman sisa_sewa.php
    header("Location: sisa_sewa.php");
    exit();
}
?>
<?php
require_once 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM t_sewa WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Data berhasil dihapus, redirect ke halaman sisa_sewa.php
        header("Location: sisa_sewa.php");
        exit();
    } else {
        // Data gagal dihapus
        echo "Gagal menghapus data.";
    }
} else {
    // Jika tidak ada parameter id, redirect ke halaman sisa_sewa.php
    header("Location: sisa_sewa.php");
    exit();
}
?>
