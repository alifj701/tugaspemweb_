<?php
require './config/db.php';

// Cek apakah ID produk ada di URL dan apakah merupakan angka
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Menggunakan prepared statement untuk mengambil data produk berdasarkan ID
    $stmt = mysqli_prepare($db_connect, "SELECT * FROM products WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    // Tutup statement
    mysqli_stmt_close($stmt);

    // Jika form di-submit, update data produk
    if (isset($_POST['update'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image']; // Jika ingin mengubah gambar juga

        // Menggunakan prepared statement untuk update data produk
        $stmt = mysqli_prepare($db_connect, "UPDATE products SET name = ?, price = ?, image = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "sssi", $name, $price, $image, $id);

        // Eksekusi query update
        if (mysqli_stmt_execute($stmt)) {
            // Redirect ke halaman data produk setelah berhasil di-update
            header("Location: index.php");
            exit();
        } else {
            echo "Error: Gagal mengupdate produk.";
        }

        // Tutup statement
        mysqli_stmt_close($stmt);
    }
} else {
    // Jika ID tidak valid, tampilkan pesan error
}

// Tutup koneksi database
mysqli_close($db_connect);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form method="post">
        <label>Nama Produk:</label>
        <input type="text" name="name" value="<?= isset($row['name']) ? htmlspecialchars($row['name']) : ''; ?>" required><br><br>

        <label>Harga:</label>
        <input type="text" name="price" value="<?= isset($row['price']) ? htmlspecialchars($row['price']) : ''; ?>" required><br><br>

        <label>Gambar URL:</label>
        <input type="text" name="image" value="<?= isset($row['image']) ? htmlspecialchars($row['image']) : ''; ?>"><br><br>

        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php">Kembali ke Data Produk</a>
</body>
</html>
