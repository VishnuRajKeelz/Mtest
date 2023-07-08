
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login and Registration Form</title>

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

    .container {
      max-width: 400px;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      background-color: #fff;
    }

    .container h2 {
      font-size: 24px;
      margin-bottom: 20px;
      text-align: center;
    }

    .form-outline {
      position: relative;
    }

    .form-outline input {
      height: 40px;
    }

    .form-outline label {
      position: absolute;
      top: 50%;
      left: 16px;
      transform: translateY(-50%);
      pointer-events: none;
      color: #999;
      transition: 0.2s;
    }

    .form-outline input:focus~label,
    .form-outline input:not(:placeholder-shown)~label {
      top: 0;
      font-size: 12px;
      color: #3f51b5;
    }

    .form-outline .form-label {
      margin-bottom: 5px;
    }

    .text-center {
      text-align: center;
    }

    .text-decoration-none {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Register</h2>
        <form action="{{ route('register_store') }}" method="POST">
            @csrf
          <!-- Name input -->
          @error('name')
                    <div class"" style="color: red;">Name Required</div>
              @enderror
          <div class="form-outline mb-4">
            <input type="text" id="form3Example1" name="name" class="form-control" />
            <label class="form-label" name="name" for="form3Example1">Name</label>
          </div>
         
          <!-- Email input -->
          @error('email')
                    <div class"" style="color: red;">Mail ID Required</div>
              @enderror
          <div class="form-outline mb-4">
            <input type="email" name="email" id="form3Example2" class="form-control" />
            <label class="form-label" name="email" for="form3Example2">Email address</label>
          </div>

          <!-- Password input -->
          @error('password')
                    <div class"" style="color: red;">Password Required</div>
              @enderror
          <div class="form-outline mb-4">
            <input type="password" name="password" id="form3Example3" class="form-control" />
            <label class="form-label"  name="password" for="form3Example3">Password</label>
          </div>

          <!-- Confirm Password input -->
          <div class="form-outline mb-4">
            <input type="password" name="cpassword" id="form3Example4" class="form-control" />
            <label class="form-label" name="cpassword" for="form3Example4">Confirm Password</label>
          </div>

       
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Register</button>

          <!-- Login link -->
          <p class="text-center">Already a member? <a href="login" class="text-decoration-none" id="login-link">Login</a></p>
        </form>
      </div>
    </div>
  </div>

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
  
</body>

</html>
