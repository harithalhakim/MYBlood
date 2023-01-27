<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="description" content="Free Blood Donation App Tracker">
  <title>MYBlood | Homepage</title>
  <link rel="stylesheet" href="selecthospitalcss.css">
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
      <div class="col-1">

        <h3>Select Your Specific Location and Date.</h3><br>

<form action="dummyparticipate.php">
  <label for="hospital">Choose a location:</label>
  <select name="hospital" id="hospital">
    <option value="hkl">Hospital Kuala Lumpur</option>
    <option value="selayang">Hospital Selayang</option>
    <option value="sungaibuloh">Hospital Sungai Buloh</option>
    <option value="ampang">Hospital Ampang</option>
  </select>

  <div class="formbold-input-group">
      <div class="formbold-form-label">
        <div class="formbold-mb-5 w-full">
          <br /><label for="date" class="formbold-form-label" required> Date: </label>
          <input
            type="date"
            name="date"
            id="date"
            class="formbold-form-input"
          />
        </div>
      </div>
      </div>
  <br><br>
  <button name = "participate" id = "participateevent" >Participate</button>

</form>







  </div>
  </div>
  </div>

</body>

</html>
