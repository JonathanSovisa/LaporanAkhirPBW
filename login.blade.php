<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        body {
          background-image: url('https://wallpapercave.com/wp/PYwy6gH.jpg');
          background-size: cover;
          background-position: center;
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
        }

        .card {
          background-color: rgba(255, 255, 255, 0.9);
          border-radius: 10px;
          padding: 20px;
          width: 100%;
          max-width: 400px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .card-header {
          text-align: center;
          font-size: 1.5em;
          font-weight: bold;
          color: #333;
        }
        .form-group {
          margin-bottom: 15px;
        }
        .btn-primary {
          width: 100%;
          background-color: #ff7f50;
          border-color: #ff7f50;
        }
        .btn-primary:hover {
          background-color: #ff6347;
          border-color: #ff6347;
        }
        .social-login {
          display: flex;
          justify-content: space-between;
          margin-top: 10px;
        }
        .social-login button {
          width: 48%;
        }
        .form-check-label, .forgot-password {
          color: #333;
        }
        .forgot-password {
          float: right;
        }
    </style>

    <title>Login</title>
  </head>
  <body>
    <div class="card">
      <div class="card-header">
      MYUMKM
      </div>
      <div class="card-body">
        <div class="text-center mb-4">
          Have an account?
        </div>
        <form action="/login" method="POST">
          @csrf
          <div class="form-group">
            <input type="email" name="email" placeholder="E-Mail" class="form-control" autofocus required>
          </div>
          <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">SIGN IN</button>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember Me</label>
            <a href="#" class="forgot-password">Forgot Password</a>
          </div>
        </form>
        <div class="text-center mt-3">
          <span>Or Sign In With</span>
        </div>
        <div class="social-login">
          <button class="btn btn-outline-primary">Google</button>
          <button class="btn btn-outline-primary">Facebook</button>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
