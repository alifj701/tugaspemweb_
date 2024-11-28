<?php
require './config/db.php';

// Cek apakah ID produk ada di URL dan apakah merupakan angka
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Menggunakan prepared statement untuk menghindari SQL injection
    $stmt = mysqli_prepare($db_connect, "DELETE FROM products WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $id);

    // Eksekusi query
    if (mysqli_stmt_execute($stmt)) {
        // Redirect ke halaman data produk setelah berhasil dihapus
        header("Location: index.php");
        exit();
    } else {
        echo "Error: Gagal menghapus produk.";
    }

    // Tutup statement
    mysqli_stmt_close($stmt);
} else {
    // Jika ID tidak valid, redirect ke halaman data produk dengan pesan error
    echo "Error: ID produk tidak valid.";
}

// Tutup koneksi database
mysqli_close($db_connect);
?>
