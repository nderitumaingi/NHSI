<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
  <title>Login</title>
</head>
<body>
<div class="container">
<img src="images/back.jpg">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card card-body my-2">
                <h3 class="text-info">Nyeri Hospice Login</h3>
                <hr>
                <form name="login-form" method="POST" action="process_login.php">
                <div class="form-group">
                  <input type="text" name="username">
                </div>
                <div class="form-group">
                  <input type="password" name="password">
                </div>
                <div class="form-group">
                  <input type="submit" name="login">
                </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>
  