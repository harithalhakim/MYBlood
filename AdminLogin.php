<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Admin Login">
  <title>MYBlood | Admin Login</title>
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
                    <figure><img src="admin.png" alt="admin login image"></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Admin Login</h2>
                    <form method="POST" class="register-form" id="login-form" action = "adminlogin-new.php">
                      <div class="form-group">
                          <label for="email"><i class="zmdi zmdi-email"></i></label>
                          <input type="email" name="admin_email" id="admin_email" placeholder="Email" required/>
                      </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="admin_pass" id="admin_pass" placeholder="Password" required/>
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Login"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
</div>

  </body>
</html>
