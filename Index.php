<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<head>
<style>
.container-fluid {
  background-image: url(images/back.jpg);
  background-size: cover;
}
</style>
  <title>Login</title>
</head>
<body>
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            <div class="card card-body">
                <h3 class="card-title text-info"><b>Nyeri Hospice</b> Login</h3>
                <hr>
                
                <form name="login-form" method="POST" action="process_login.php" style="align: centre">
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control" placeholder="username">
                </div>
                
                <div class="form-group">
                <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" placeholder="password">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" name="login">Sign In</button>
                </div>
    </form>
    </div>
    </div>
    </div>
    
</body>
</html>
  