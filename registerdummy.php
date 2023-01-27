<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Free Blood Donation App Tracker">
  <title>MYBlood | User Register</title>
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

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form method="POST" class="register-form" id="register-form" action = "register-page.php">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone number" class="zmdi zmdi-phone"></label>
                                <input type="text" name="phone" id="phone" placeholder="Phone Number" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat password" required/>
                            </div>

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="register.png" alt="sing up image"></figure>
                        <a href="logindummy.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
            </div>





  </div>


</body>

</html>
