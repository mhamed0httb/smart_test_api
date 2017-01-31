<?php 
	
    $dbc=mysqli_connect('localhost','root','','smart_test');
    $sql=mysqli_query($dbc,"select * from question where displayed_now=true");
	$result = array();
	$questionsId = array();
	while($res=mysqli_fetch_array($sql)){
		array_push($result, $res);
	}
	echo json_encode($result);
		
	
	
	
	
	
?>