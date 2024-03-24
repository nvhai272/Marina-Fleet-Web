<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="log_reg.css">
    <title>Đăng nhập quyền Admin</title>
</head>

<body style="background:url('img/ocean.webp');background-repeat:no-repeat; background-size:cover;">
    <form id="login-form" method="post">
        <h2>Login</h2>
        <div>
            <label for="login-username"><i class="fas fa-user"></i> Admin:</label>
            <input type="text" id="login-username" name="user" required>
        </div>
        <div>
            <label for="login-password"><i class="fas fa-lock"></i> Password:</label>
            <input type="password" id="login-password" name="pass" required> <br>
        </div>
        <?php
        session_start();
        $c = mysqli_connect("localhost", "root", "", "marina_fleet");
        if (isset($_POST["log"])) {
            $u = $_POST["user"];
            $p = $_POST["pass"];
            $s = "SELECT * FROM admin WHERE username = '$u'";
            $r = mysqli_query($c, $s);
            $n = mysqli_num_rows($r);
            if ($n == 0) {
                echo '<div class="error-message">Không tồn tại tên đăng nhập</div>';
            } else {
                $pass = mysqli_fetch_array($r)['password'];
                if ($pass != $p) {
                    echo '<div class="error-message">Mật khẩu hoặc tài khoản chưa đúng</div>';
                } else {
                    header('location:admin.php');

                    $_SESSION['username'] = $u;

                    if (isset($_POST['remember'])) {
                        $time = time() + 60;
                        setcookie("username", $u, $time);
                    }
                }
            }
        }
        if (isset($_COOKIE['username'])) {
            header('location:admin.php');
        }
        ?>
       
        <div class="checkbox-section">
            <input type="checkbox" id="save-password" name="remember">
            <label for="save-password">Save Login</label>

        </div>
        <a style="margin-left:10px" href="#" id="forgot-password-link">Forgot Password?</a>
        <button style="font-size:larger" type="submit" name="log"><i class="fas fa-sign-in-alt"></i> Login</button>
    </form>
</body>

</html>