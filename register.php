<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - Perpustakaan Digital UKK</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-secondary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Register </h3>
                                </div>
                                <div class="card-body">
                                    <?php
                                    if (isset($_POST['register'])) {
                                        $nama = $_POST['nama'];
                                        $username = $_POST['username'];
                                        $no_telepon = $_POST['no_telepon'];
                                        $email = $_POST['email'];
                                        $alamat = $_POST['alamat'];
                                        $level = $_POST['level'];
                                        $password = md5($_POST['password']);

                                        $insert = mysqli_query($koneksi, "INSERT INTO user(nama,email,alamat,no_telepon,username,password,level) VALUES('$nama','$email','$alamat','$no_telepon','$username','$password','$level')");
                                        if ($insert) {
                                            echo "<script>alert('Registrasi Berhasil');window.location='login.php'</script>";
                                        } else {
                                            echo "<script>alert('Registrasi Gagal');window.location='register.php'</script>";
                                        }
                                    
                                    } 
                                    ?>
                                    <form method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="nama" type="text" required
                                                placeholder="Nama Lengkap" />
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="username" type="text" required
                                                placeholder="username" />
                                            <label>Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="text" required
                                                placeholder="email" />
                                            <label>Email</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="no_telepon" type="text" required
                                                placeholder="no_telepon" />
                                            <label>no_telepon</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea name="alamat" class="form-control" required placeholder="alamat"></textarea>
                                            <label>Alamat</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select name="level" required class="form-select" aria-label="Default select exampled="">
                                            <option value="peminjam">Peminjam</option>    
                                        </select>
                                            <label>Level</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="password"
                                                placeholder="Password" name="password" />
                                            <label>PASSWORD</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary" type="submit" name="register"
                                                value="register">Register</button>
                                                <a href="" class="btn btn-success">login</a>
                                        </div>
                                    </form>
                                </div>
                                <div class=" card-footer text-center py-3">
                                    &copy; NXRts
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>