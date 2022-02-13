 <?php
	$conn = mysqli_connect("172.23.0.3","root","uas","trucorp-db");
    	if($conn -> connect_error){
        	die('Connection to Database Error!'.$conn->error);
    }
?>
