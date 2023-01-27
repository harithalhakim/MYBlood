<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Free Blood Donation App Tracker">
  <title>MYBlood | Homepage</title>
  <link rel="stylesheet" href="styledummy.css">
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



    <div class="row">
      <div class="col-1">
        <h1>Donate <br>Blood</h1>
        <p>Blood is meant to circulate
          <br>
          Pass it around
          <br>
          YOU CAN HELP SAVE A LIFE!
        </p>





      </div>


      <div class="col-2">
        <img src="pic3.png" id="banner">

        <ul>
          <li class="btn active"></li>
          <li class="btn"></li>
          <li class="btn"></li>
        </ul>

      </div>

    </div>
  </div>

  <script>
    var btn = document.getElementsByClassName("btn");
    var banner = document.getElementById("banner");

    btn[0].onclick = function() {
      banner.src = "pic3.png";
      animation();
      this.classList.add("active");
    }

    btn[1].onclick = function() {
      banner.src = "pic2.png";
      animation();
      this.classList.add("active");
    }

    btn[2].onclick = function() {
      banner.src = "pic1.png";
      animation();
      this.classList.add("active");
    }

    function animation() {
      banner.classList.add("zoom");
      setTimeout(function() {
        banner.classList.remove("zoom");
      }, 500);

      for(b of btn){
        b.classList.remove("active");
      }
    }
  </script>


</body>

</html>
