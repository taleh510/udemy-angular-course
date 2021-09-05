<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/login.css">
</head>

<body style="background-color:#E6E6FA;">
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <a href="/"><img src="http://konullu.gov.az/img/icon.svg" id="icon" alt="User Icon" style="height: 70px;width: 70px;" /></a>
      </div>

      <!-- Login Form -->
      <form id="frmid" action="process" method="POST">
        <input type="text" id="login" name="logname" class="fadeIn second inp" name="logname" placeholder="İstifadəçi adı">
        <input type="password" id="password" name="logpass" class="fadeIn third ps" name="logpass" placeholder="Şifrə">
        <input type="submit" class="fadeIn fourth" id="submit" name="logele" value="Giriş">
      </form>
    </div>
  </div>
</body>

</html>