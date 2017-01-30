<?php 
	
	$team1 = $_GET['team1'];
	$team2 = $_GET['team2'];
    $dbc=mysqli_connect('localhost','root','','smart_test');
    $sql=mysqli_query($dbc,"update team set playing=false");
	$sql2=mysqli_query($dbc,"update team set playing=true where id=$team1");
	$sql3=mysqli_query($dbc,"update team set playing=true where id=$team2");
	$sql4=mysqli_query($dbc,"update team set number=1 where id=$team1");
	$sql5=mysqli_query($dbc,"update team set number=2 where id=$team2");
	$result = array();
	if($sql){
		echo "good";
	}
	else{
		echo "bad";
	}
	
	//echo json_encode($result);

?>