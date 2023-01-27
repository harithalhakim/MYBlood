<?php
include "myblood.php";
if (isset($_POST['eventsubmit'])) {

$eventname = $_POST['campaignname'];
$organizername = $_POST['organizername'];
$date = $_POST['date'];
$venue = $_POST['venue'];

echo $eventname;
echo $organizer;
echo $date;
echo $venue;


  $sql2 = "INSERT INTO campaign(campaign_name, organizer_name, Date, venue) VALUES('$eventname', '$organizername', '$date', '$venue')";
           $result2 = mysqli_query($con, $sql2);
           if ($result2) {
           	 header("Location: viewcampaign.php?success=A new campaign has been created successfully");
	         exit();
           }else {
	           	header("Location: CreateEvent.php?error=unknown error occurred&$user_data");
		        exit();
           }


}
