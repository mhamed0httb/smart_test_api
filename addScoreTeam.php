<?php 
	
	$team = $_GET['team'];
    $dbc=mysqli_connect('localhost','root','','smart_test');
	
	$sql=mysqli_query($dbc,"select * from team where id=$team");
	$currentScore = 0;
	while($res=mysqli_fetch_array($sql)){
		$currentScore = $res['score'];
	}
	
	$currentScore = $currentScore + 1;
	
	$sql2=mysqli_query($dbc,"update team set score=$currentScore where id=$team");
	
	$result = array();
	if($sql){
		echo "good";
	}
	else{
		echo "bad";
	}
	
	//echo json_encode($result);

?>