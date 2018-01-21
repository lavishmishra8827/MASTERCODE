<?php
	include ("connect.php");
	mysql_select_db("hr") or die ( 'Unable to select database.(login)' );
	$query = "select Candidate_Role, Status from candidatedetails";
	$result = mysql_query($query);

	
	while($row = mysql_fetch_array($result,MYSQL_NUM)) {
	    //echo $row["Candidate_Role"]+", ";
//		echo "'".$row[0].",' ";
		$type[$row[0]] = 0;
	}
	$query = "select Candidate_Role, Status from candidatedetails";
	$result = mysql_query($query);
	while($row = mysql_fetch_array($result,MYSQL_NUM)) {
	    //echo $row["Candidate_Role"]+", ";
		if($row[1] == "Selected") {
			$type[$row[0]]++;
		}
	}
	echo "{ [ ";
	foreach ($type as $key => $value) {
		# code...
		echo $key.", ";
		
	}
	echo " ], ";
	echo "[ ";
	foreach ($type as $key => $value) {
		# code...
		echo $value.", ";
		
	}
	echo " ] } ";

?>