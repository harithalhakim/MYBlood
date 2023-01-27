<form action="register-page.php" method="post">
     <h2>SIGN UP</h2>
     <?php if (isset($_GET['error'])) { ?>
       <p class="error"><?php echo $_GET['error']; ?></p>
     <?php } ?>

         <?php if (isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
         <?php } ?>

         <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
         <?php if (isset($_GET['name'])) { ?>
              <input type="text"
                     name="name"
                     placeholder="Name"
                     value="<?php echo $_GET['name']; ?>"><br>
         <?php }else{ ?>
              <input type="text"
                     name="name"
                     placeholder="Name"><br>
         <?php }?>

         <label for="email"><i class="zmdi zmdi-email"></i></label>
         <?php if (isset($_GET['email'])) { ?>
              <input type="text"
                     name="email"
                     placeholder="Email"
                     value="<?php echo $_GET['email']; ?>"><br>
         <?php }else{ ?>
              <input type="text"
                     name="email"
                     placeholder="Email"><br>
         <?php }?>

         <label for="phone number"><i class="zmdi zmdi-phone"></i></label>
         <input type="text"
                    name="phone"
                    placeholder="Phone Number"><br>

       <label for="pass"><i class="zmdi zmdi-lock"></i></label>
       <input type="password"
                  name="password"
                  placeholder="Password"><br>

           <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
           <input type="password"
                  name="re_password"
                  placeholder="Re_Password"><br>

       <button type="submit">Sign Up</button>
           <a href="index.php" class="ca">Already have an account?</a>
      </form>
