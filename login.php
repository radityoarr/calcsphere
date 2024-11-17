<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php 
    require 'functions.php';

    if (isset($_SESSION['login'])) {
        header("Location: index.php");
        exit;
    }

    $error = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $conn = koneksi();
        $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($password === $row['password']) { 
                $_SESSION['login'] = true;
                echo "<script>
                        Swal.fire({
                            title: 'Berhasil!',
                            text: 'Login berhasil!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => {
                            window.location.href = 'index.php';
                        });
                    </script>";
            }
            else{
                echo "<script>
                Swal.fire({
                    title: 'Gagal!',
                    text: 'Username / password salah',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>";
            }
        }
}
?>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Login</h2>

                <form action="" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>