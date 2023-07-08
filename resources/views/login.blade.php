<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.css" rel="stylesheet">
  
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f8f9fa;
    }
  </style>
</head>

<body>
  <form class="w-25" action="{{route('login_user')}}" method="POST">
    @csrf
    <!-- Email input -->
    @error('email')
                    <div class"" style="color: red;">User ID Required</div>
              @enderror
    <div class="form-outline mb-4">
      <input type="email" name="email" id="form2Example1" class="form-control" />
      <label class="form-label" for="form2Example1">Email address</label>
    </div>
   
    <!-- Password input -->
    @error('password')
                    <div class"" style="color: red;">Password Required</div>
              @enderror
    <div class="form-outline mb-4">
      <input type="password"  name="password" id="form2Example2" class="form-control" />
      <label class="form-label"  for="form2Example2">Password</label>
    </div>
    
    <!-- 2 column grid layout for inline styling -->
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <!-- Checkbox -->
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
          <label class="form-check-label" for="form2Example31"> Remember me </label>
        </div>
      </div>

      <div class="col">
        <!-- Simple link -->
        <a href="#!" class="text-decoration-none">Forgot password?</a>
      </div>
    </div>

    <!-- Submit button -->
    <button type="submit" name="login" value="Login" class="btn btn-primary btn-block mb-4">Sign in</button>

    <!-- Register buttons -->
    <div class="text-center">
      <p>Not a member? <a href="register" class="text-decoration-none">Register</a></p>
      <p>or sign up with:</p>
      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-facebook-f"></i>
      </button>

      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-google"></i>
      </button>

      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-twitter"></i>
      </button>

      <button type="button" class="btn btn-link btn-floating mx-1">
        <i class="fab fa-github"></i>
      </button>
    </div>
  </form>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
</body>

</html>
