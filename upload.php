<html>
	<head>
		<title>Upload User Data</title>
	</head>
	<body>
	<?php


/*** example usage ***/


	 include('config.php');
   include('passcode.php');
	if ($_POST) {
    $nam=$_POST['name'];
    $unam=$_POST['username'];
    $emal=$_POST['email'];
    $pass=$_POST['password'];
	  $dept=$_POST['dept'];
    $gen=$_POST['gender'];

		$converter = new Encryption;
		$hash = $converter->encode($pass);

   //For Image Upload
   $file_name       = date("Y-m-d-H-i-s").$_FILES['image']['name'];
   $destination     = "image/".$file_name;
   $filename        = $_FILES['image']['tmp_name'];

   move_uploaded_file($filename, $destination);

   $sql = "INSERT INTO admin (name,username,email,passcode,dept,gender,image) values ('$nam','$unam','$emal','$hash','$dept','$gen','$destination')";
				//$sql = "INSERT INTO admin (name) values ($nam)";

    $result = mysqli_query($db, $sql);
		if ($result) {
		    echo "New record created successfully";
		} else {
		    echo "Error: "."<br>".mysqli_error($db);
   }
    mysqli_close($db);
     }
	?>
	</body>
<script>

	alert('Employee info Uploaded Successfully');
//    window.location.href='welcome.php';

</script>
</html>
