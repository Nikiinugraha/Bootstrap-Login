<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <title>Signin Template for Bootstrap</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/signin.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <form class="form-signin" action="proses-login.php" method="POST">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            
            <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == 'gagal') {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Login gagal! Cek kembali username dan password anda.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>';
                    }else if($_GET['pesan'] == 'logout'){
                        echo '<div class="alert alert-success" role="alert">
                                Anda berhasil Logout!
                            </div>';
                    }else if($_GET['pesan'] == 'belum_login'){
                        echo '<div class="alert alert-warning" role="alert">
                                Anda belum melakukan login!
                            </div>';
                    }
                }
            ?>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">&copy; <?= date('Y'); ?></p>
        </form>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.alert').alert()
    </script>
</html>