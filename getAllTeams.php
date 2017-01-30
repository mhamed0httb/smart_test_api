<?php 
	
    $dbc=mysqli_connect('localhost','root','','smart_test');
    $sql=mysqli_query($dbc,"select * from team");
	$result = array();
	while($res=mysqli_fetch_array($sql)){
		array_push($result, $res);
	}
	
	echo json_encode($result);

?>