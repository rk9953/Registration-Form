<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Registration Project</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6.col-xm-12">
                <h1 class="text-center">Sign up</h1>
                <form action="signup.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username"
                            autocomplete="off" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="passowrd" class="form-control" id="passowrd" placeholder="Enter passowrd"
                            autocomplete="off" name="password">
                    </div>
                    <div class="form-group">
                        <label for="cpassowrd">comfirm Password</label>
                        <input type="passowrd" class="form-control" id="cpassowrd" placeholder="Enter confirm passowrd"
                            autocomplete="off" name="cpassword">

                    </div>
                    <button type="submit" class="btn btn-success w-100 my-3" name="signup">Sign up</button>
                </form>
            </div>

            <div class="col-md-6.col-xm-12 my-5">
                <h1 class="text-center">Login</h1>
                <form action="login.php method">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username"
                            autocomplete="off" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="passowrd" class="form-control" id="passowrd" placeholder="Enter passowrd"
                            autocomplete="off" name="password">
                    </div>


                    <button type="submit" class="btn btn-dark w-100 my-3" name="login">Login</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>