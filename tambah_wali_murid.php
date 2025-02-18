<?php
include 'koneksi.php';

// Proses tambah wali murid
if (isset($_POST['submit'])) {
    // Ambil data dari form
    $nama_wali = $_POST['nama_wali'];
    $hubungan = $_POST['hubungan'];

    // Query untuk menyimpan data wali murid ke database
    $query_insert = "INSERT INTO wali_murid (nama_wali, hubungan) 
                     VALUES ('$nama_wali', '$hubungan')";

    if (mysqli_query($koneksi, $query_insert)) {
        echo "<script>alert('Data wali murid berhasil ditambahkan!'); window.location.href = 'wali_murid.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan saat menambahkan data wali murid.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Wali Murid</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <h2 class="mb-3">Tambah Wali Murid</h2>

        <form method="POST">
            <div class="mb-3">
                <label for="nama_wali" class="form-label">Nama Wali Murid</label>
                <input type="text" class="form-control" id="nama_wali" name="nama_wali" required>
            </div>

            <div class="mb-3">
                <label for="hubungan" class="form-label">Hubungan dengan Siswa</label>
                <input type="text" class="form-control" id="hubungan" name="hubungan" required>
            </div>

            <button type="submit" name="submit" class="btn btn-success">Tambah Wali Murid</button>
            <a href="wali_murid.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
