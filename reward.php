<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Free Blood Donation App Tracker">
  <title>MYBlood | Reward</title>
  <link rel="stylesheet" href="rewardcss.css">
</head>

<body>


  <div class="navigation">
    <div class="logo">
      <a href="index-dummy.php"><img src="mainlogo.png"></a>
    </div>

  <div class="naviTitle">
    <a class="Title" href="index-dummy.php"><b>MYBlood</b></a>
    </div>

    <div class="naviOption">

      <a href="indexuser.php"><b>Log Out</b></a>
      <a href="profiledummy.php"><b>Profile</b></a>
      <a href="newsdummy.php"><b>News</b></a>
      <a href="campaigndummy.php"><b>Campaign</b></a>
      <a href="userviewblood.php"><b>Bloodbank</b></a>

  </div>
  </div>

  <div class="hero">

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                              <a class="nav-link" href="fillattendances.php">
                                Current Accumulated Point:</a></div>
                                <div style = margin-left:15px; class="h5 mb-0 font-weight-bold text-gray-800">50</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            <a class="nav-link" href="fillattendances.php">
                              A Class Ward</a></div>
                              <div style=margin-left:15px; class="h5 mb-0 font-weight-bold text-gray-800">100 Points</div>

                            </br/> <button style=margin-left: 50px; onclick="myFunction()" name = "redeem" id = "redeem" >Redeem</button>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            <a class="nav-link" href="fillattendances.php">
                              Free Health Checkup</a></div>
                              <div style=margin-left:15px; class="h5 mb-0 font-weight-bold text-gray-800">150 Points</div>

                            </br/> <button style=margin-left: 50px; onclick="myFunction()" name = "redeem" id = "redeem" >Redeem</button>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            <a class="nav-link" href="fillattendances.php">
                              Free Medical Treatment (up to RM5K)</a></div>
                              <div style=margin-left:15px; class="h5 mb-0 font-weight-bold text-gray-800">300 Points</div>

                            </br/> <button style=margin-left: 50px; onclick="myFunction()" name = "redeem" id = "redeem" >Redeem</button>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>





  </div>
  <script>
  function myFunction() {
    alert("Sorry, you have insufficient Reward Point(s).");
  }
  </script>

</body>

</html>
