<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/index.css">
    <title>One Stop Realtor Login</title>
  </head>
  <body>
    <!-- font-family: 'Cinzel', serif; -->
    <div class="jumbotron vertical-align-center">
      <h1>One Stop Realty</h1>
      <p>Lead Management Tool</p>
    </div>
    <div class="container d-flex-column justify-content-center form-container">


        <form class="Login " action="index.html" method="post">
          <div class="d-flex justify-content-center">
            <h3>Login</h3>
          </div>
          <div class="form-group">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password: </label>
            <input type="text" name="password" id="password" class="form-control">
          </div>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
          <div class="form-group submit-button d-flex justify-content-center">
            <button name="submit" type="submit">Submit</button>
          </div>
          <div class="form-group d-flex justify-content-between bottom">
            <a href="#">Forgot password</a>
            <a href="#">Register</a>
          </div>
        </form>
    </div>
  </body>
</html>
