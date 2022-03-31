<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
</div>
    <div class="container d-flex justify-content-center">
        <form action="datalogin.php" method="post" class="col-4">
            <div class="upper" style=" padding-top: 120px">
                <h1 style="text-align: center">LOGIN</h1>
                <br><input type="text" class="form-control" name="username" placeholder="Masukkan Username"></input>
                <br><input type="password" class="form-control" name="password" placeholder="Masukkan Password"></input>
            <br><input type="submit" name="login" class="btn btn-dark" value="Login">
            <div class="register">
                <div class="col-12">
                    <br><span>Belum punya akun?</span>
                    <a href="register.php">Register disini</a>
                </div>
            </div>
            </div>
        </form>
    </div>
</body>
</html>
