<?php 
	
    $dbc=mysqli_connect('localhost','root','','smart_test');
    $sql=mysqli_query($dbc,"select * from question where displayed_now=true");
	$questionId = 0;
	while($res=mysqli_fetch_array($sql)){
		$questionId = $res['id'];
	}
	
	
	$sql6=mysqli_query($dbc,"update question set validated=true where id=$questionId");
	
	//$sql6=mysqli_query($dbc,"update question set validated=false");
	
	
	
	
?>