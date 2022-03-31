<html lang="en">
    <head>
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <style>
        
    </style>
    <body>
        <form action="dataregister.php" method="GET">
            <div class="container d-flex justify-content-center">
                <div class="col-4">
                    <div class="upper" style="padding-top: 100px">
                        <h1 style="text-align: center">Register</h1>
                        <input type="text" id="username" name="username" class="form-control" placeholder="Input Username"></input>
                        <br>
                        <input type="email" id="email" name="email" class="form-control" placeholder="Input Email"></input>
                        <br>
                        <input type="password" id="password" name="password" class="form-control" placeholder="Input Password"></input>
                        <br>
                        <input type="file" id="foto" name="foto">
                        <br><button type="submit" id="cmd" name="cmd" class="btn btn-dark" value="submit">Register</button>
                    </div>

                    <div class="footer">
                        <div class="col-12">
                            <br><span>Sudah punya akun?</span>
                            <a href="login.php">Login disini</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>
