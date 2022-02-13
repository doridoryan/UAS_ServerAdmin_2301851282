<?php
  

    include_once("connect.php"); 
    $query = "SELECT * FROM users";
  
    if ($result = mysqli_query($conn, $query)) {
  
    $rowcount = mysqli_num_rows( $result );
      
    printf("Total user in this table : %d\n", $rowcount);
}
  
mysqli_close($conn);
  
?>
