<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trucorp-db</title>
</head>
<body>
<table>
  <tr>
    <th>ID</th>
    <th>nama</th>
    <th>alamat</th>
    <th>jabatan</th>
  </tr>
    <?php
    include_once ("connect.php"); 
    $db_query = "SELECT * FROM users";
    $res = $conn->query($db_query);
    while($row = $res->fetch_assoc()){
    ?>
            <tr>
            <td><?=$row['ID'];?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$row['alamat'];?></td>
            <td><?=$row['jabatan'];?></td>
            </tr>
    <?php
    }
    ?>
</body>
</html>
