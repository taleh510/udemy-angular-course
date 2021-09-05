<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin Panel</title>

  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form action="../netting/process.php" method="POST">
          <h1>Admin Panel</h1>
          <div>
            <input type="text" name="admin_mail" class="form-control" placeholder="Username and Mail" required="" />
          </div>
          <div>
            <input type="password" name="admin_password" class="form-control" placeholder="Password" required="" />
          </div>
          <a class="reset_pass" href="#">Forgot password?</a>
          <button type="submit" class="btn btn-primary" name="adminlog">Log in</button>
          <div class="separator">
            <div>
              <!-- <h1><i class="fa fa-user"></i>  Admin Panel</h1> --></br>
              <p>©2021 All Rights Reserved. <a href="http://taleh.az">Taleh Maharramov</a></p>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
  </div>
</body>

</html>