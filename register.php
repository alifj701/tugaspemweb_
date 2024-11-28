<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <!-- Card untuk Form Register -->
                <div class="card mt-5">
                    <div class="card-body">
                        <h1 class="text-center">Register</h1>
                        <form action="./backend/register.php" method="post">
                            <!-- Input Nama -->
                            <div class="form-group">
                                <label for="name">Nama Anda</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama anda" required>
                            </div>

                            <!-- Input Email -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email anda" required>
                            </div>

                            <!-- Input Password -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password anda" required>
                            </div>

                            <!-- Input Konfirmasi Password -->
                            <div class="form-group">
                                <label for="confirm">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="confirm" name="confirm" placeholder="Masukkan konfirmasi password anda" required>
                            </div>

                            <!-- Tombol Submit -->
                            <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap dan jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
