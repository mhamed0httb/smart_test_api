<?php 
	
	$newTeam = $_GET['new_team'];
	$oldTeam = $_GET['old_team'];
    $dbc=mysqli_connect('localhost','root','','smart_test');
	$sql=mysqli_query($dbc,"select * from team where id=$oldTeam");
	$teamNumber = 0;
	while($res=mysqli_fetch_array($sql)){
		$teamNumber = $res['number'];
	}
	$sql2=mysqli_query($dbc,"update team set playing=true where id=$newTeam");
	$sql3=mysqli_query($dbc,"update team set playing=false where id=$oldTeam");
	$sql4=mysqli_query($dbc,"update team set number=$teamNumber where id=$newTeam");
	$sql5=mysqli_query($dbc,"update team set number=0 where id=$oldTeam");
	$result = array();
	if($sql){
		echo "good";
	}
	else{
		echo "bad";
	}
	
	//echo json_encode($result);

?>