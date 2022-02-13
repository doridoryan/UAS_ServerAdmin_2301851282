
<?php
  

    include_once("connect.php"); 
    $query = "SELECT * FROM users";
  
    if ($result = mysqli_query($con, $query)) {
  
    $rowcount = mysqli_num_rows( $result );
      
    printf("Total rows in this table : %d\n", $rowcount);
}
  
mysqli_close($con);
  
?>
