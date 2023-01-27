<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Free Blood Donation App Tracker">
  <title>MYBlood | User Login</title>
  <link rel="stylesheet" href="logindummycss.css">

</head>

<body>


  <div class="navigation">
    <div class="logo">
      <a href="indexuser.php"><img src="mainlogo.png"></a>
    </div>

  <div class="naviTitle">
    <a class="Title" href="indexuser.php"><b>MYBlood</b></a>
    </div>

    <div class="naviOption">

    <a href="logindummy.php"><b>Login</b></a>


  </div>
  </div>

  <div class="hero">

    <div class="main">

    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="userlogin.png" alt="user login image"></figure>
                    <a href="registerdummy.php" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">User Login</h2>
                    <form method="POST" class="register-form" id="login-form" action = "login-new.php">
                      <div class="form-group">
                          <label for="email"><i class="zmdi zmdi-email"></i></label>
                          <input type="email" name="email" id="email" placeholder="Email" required/>
                      </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="your_pass" placeholder="Password" required/>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Login"/>
                        </div>
                    </form>
                    <div class="social-login">
                      <a href="AdminLogin.php" class="signup-image-link">Admin Login</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

</div>





  </div>


</body>

</html>
