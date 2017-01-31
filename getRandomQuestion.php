<?php 
	
    $dbc=mysqli_connect('localhost','root','','smart_test');
    $sql=mysqli_query($dbc,"select * from question where chosen=false");
	$result = array();
	$questionsId = array();
	while($res=mysqli_fetch_array($sql)){
		//array_push($result, $res);
		array_push($questionsId, $res['id']);
	}
	
		
	$randomId = $questionsId[array_rand($questionsId)];
	$sql2=mysqli_query($dbc,"select * from question where id=$randomId");
	while($res=mysqli_fetch_array($sql2)){
		array_push($result, $res);
	}
	echo json_encode($result);

	$sql3=mysqli_query($dbc,"update question set displayed_now=false");
	$sql4=mysqli_query($dbc,"update question set displayed_now=true where id=$randomId");
	$sql5=mysqli_query($dbc,"update question set chosen=true where id=$randomId");
	
	
	
	
	
	
	//$sql6=mysqli_query($dbc,"update question set chosen=false");
	
	
	
	
?>