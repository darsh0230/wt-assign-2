<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Successful Submission</title>
</head>
<body>
<?php

    $con = mysqli_connect("localhost", "root", "", "feedback");
    if(!$con){
        die("Could not connect: " . mysql_error());
    }   

    $sql = "INSERT INTO forms VALUES('$_POST[srn]','$_POST[sec]','$_POST[teachId]','$_POST[dos]','$_POST[feedback]')";

    if(!mysqli_query($con, $sql)){
        die ('Error: '. mysql_error());
    }

    // echo '<script>alert("Submitted Successfully")</script>';

    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
    header('Location: '.$uri.'/feedback/');
	exit;


    mysqli_close($con);


?>

    
</body>
</html>