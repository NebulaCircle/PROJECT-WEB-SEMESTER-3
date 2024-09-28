<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="<?= assets("auth.css") ?>">

</head>

<body class="body">
    <div class="container">
        <div class="images">
            <img src="<?= assets("assets/login_img.png") ?>" alt="Medical Cross Logo" width="70" height="70">
        </div>
        <h2>Login</h2>
        <h6>Masukkan detail akun anda untuk melanjutkan</h6>
        <form action="login" method="post">
            <div>
                <label for="E-mail">E-mail:</label>
                <input type="text" id="e-mail" name="email" placeholder="Masukkan E-mail" class="form_input" require>
                <?php if (isset($_SESSION["emailErr "])): ?>
                    <small><?= $_SESSION["emailErr"] ?></small>
                    <?php unset($_SESSION['emailErr']); ?>
                <?php endif; ?>
            </div>
            <div>
                <label for="password">Kata sandi:</label>
                <input type="password" id="password" name="password" placeholder="Masukkan kata sandi" class="form_input" require>
                <?php if (isset($_SESSION["passwordErr"])): ?>
                    <small><?= $_SESSION["passwordErr"] ?></small>
                    <?php unset($_SESSION['passwordErr']); ?>
                <?php endif; ?>
            </div>
            <button type="submit"> Masuk</button>
            <div class="forgot-password">
                <a href="#">Lupa kata sandi ?</a>
            </div>
        </form>
    </div>
</body>

</html>