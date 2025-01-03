<?php
    session_start();
    require "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg,	#DEB887 0%, #2575fc 100%);
            color: #fff;
        }
        .main {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-box {
            width: 380px;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
        }
        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: #fff;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #fff;
        }
        .btn {
            background-color: #fff;
            color: #2575fc;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #2575fc;
            color: #fff;
        }
        .alert {
            background-color: rgba(255, 255, 255, 0.85);
            color: #2575fc;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="login-box">
            <h3 class="text-center mb-4">Welcome Back!</h3>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Your username">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Your password">
                </div>
                <button class="btn w-100 mt-3" type="submit" name="loginbtn">Login</button>
            </form>
            <div class="mt-3">
                <?php
                    if (isset($_POST["loginbtn"])) {
                        $username = htmlspecialchars($_POST["username"]);
                        $password = htmlspecialchars($_POST["password"]);

                        $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
                        $countdata = mysqli_num_rows($query);
                        $data = mysqli_fetch_array($query);

                        if ($countdata > 0) {
                            if (password_verify($password, $data['password'])) {
                                $_SESSION['username'] = $data['username'];
                                $_SESSION['login'] = true;
                                header('location: ../adminpanel');
                            } else {
                                echo '<div class="alert alert-danger mt-3" role="alert">Password Salah!</div>';
                            }
                        } else {
                            echo '<div class="alert alert-danger mt-3" role="alert">Akun Tidak Tersedia</div>';
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>