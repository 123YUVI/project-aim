<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="E:\xampp\htdocs\Libraryms\css\bootstrap.min.css" rel="stylesheet">
    <link href="E:\xampp\htdocs\Libraryms\font-awesome-4.7.0" rel="stylesheet">
    <link href="admin.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-6/assets/css/login-6.css">
</head>

<body class="aim">
    <div class="container">
        <div class="row a-image">
            <div class="col-lg-6 admin_img">

                <img src="img\Aim-logo-official (1).webp" class="img-responsive">
            </div>
            <div class="col-lg-6">
                <!-- Login 6 - Bootstrap Brain Component -->
                <section>
                    <div class="container">
                        <div class="row">

                            <div class="r1">
                                <div class="card border-0 shadow-s rounded-4">
                                    <div class="card-body p-3 p-md-4 p-xl-5  b-1">
                                        <div class="row">
                                            <div class="col-12">
                                                <?php if (isset($_GET['msg'])) { ?>
                                                    <div class="alert alert-danger d-flex align-items-center" role="alert">
                                                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"
                                                            aria-label="Danger:">
                                                            <use xlink:href="#exclamation-triangle-fill" />
                                                        </svg>
                                                        <div>
                                                            Wrong Credentials </div>
                                                    </div>
                                                <?php } ?>
                                                <div class="mb-5 form1">
                                                    <h3>Log in</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="validation.php" method="POST">
                                            <div class="row gy-3 overflow-hidden">
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" name="email"
                                                            placeholder="@" required>
                                                        <label for="email" class="form-label">User-id</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-floating mb-3">
                                                        <input type="password" class="form-control" name="password"
                                                            id="password" value="" placeholder="Password" required>
                                                        <label for="password" class="form-label">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button class="btn bsb-btn-2xl  btn-dark con-btn" type="submit"><a
                                                            href="validation.php"></a>Log in
                                                    </button>
                                                </div>
                                                <a href="admin_login.php" class="r-btn">
                                                </span><i class="fa fa-refresh" aria-hidden="true"></i> Refresh
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>

    </div>
    </div>


</body>

</html>