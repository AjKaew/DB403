<?php
session_start();
include 'db_connect.php';
$sql = "select * from accounts where email='{$_SESSION['email']}'";
try {
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
}
catch(Exception $e) {
  echo $e->getMessage();
}
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
</head>
<body>
  <table>
    <tr>
      <th>email: </th>
      <td><?=$row['email']?></td>
    </tr>
    <tr>
      <th>fname: </th>
      <td><?=$row['fname']?></td>
    </tr>
    <tr>
      <th>lname: </th>
      <td><?=$row['lname']?></td>
    </tr>
    <tr>
      <th>passw: </th>
      <td><?=$row['passw']?></td>
    </tr>
  </table>
</body>
</html>