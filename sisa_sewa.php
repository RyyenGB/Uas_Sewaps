<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="Images/attachment_22860590.png" type="image/png">
  <title>Data Sewa</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: url(Images/wp.jpg) no-repeat scroll border-box bottom center;
      background-size: 1920px;
      padding: 20px;
    }

    h3 {
      text-align: center;
      color: white;
    }

    .container {
      margin-top: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: rgba(0, 0, 0, 0.5);
      color: white;
    }

    table th,
    table td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    table th {
      background-color: #f2f2f2;
      color: black;
    }

    .btn {
      display: inline-block;
      padding: 6px 12px;
      margin-bottom: 0;
      font-size: 14px;
      font-weight: normal;
      line-height: 1.42857143;
      text-align: center;
      white-space: nowrap;
      vertical-align: middle;
      cursor: pointer;
      border: 1px solid transparent;
      border-radius: 4px;
      color: #fff;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }

    .btn-danger:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }

    /* Responsiveness for Mobile */
    @media (max-width: 600px) {
      body {
        padding: 10px;
      }

      table th,
      table td {
        padding: 6px;
        font-size: 12px;
      }
    }
  </style>
</head>

<body>
  <div class="container">
    <h3>Data Sewa</h3>

    <?php
    require_once 'koneksi.php';

    $query = "SELECT * FROM t_sewa";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
    ?>
      <div style="overflow-x:auto;">
        <table>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Nomer Telepon</th>
              <th>Email</th>
              <th>Pilihan PlayStation</th>
              <th>Durasi Jam</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['alamat']; ?></td>
                <td><?php echo $row['nomer_telepon']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['pilihan_playstation']; ?></td>
                <td><?php echo $row['durasi_jam']; ?></td>
                <td>
                  <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a>
                  <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    <?php
    }
    ?>

    <a href="index.php" class="btn btn-primary">Kembali ke Halaman Utama</a>
  </div>
</body>

</html>
