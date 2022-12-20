<?php
include("connection.php");
$sql = "SELECT * FROM  $dbname";
$query = mysqli_query($conn,$sql);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
้<h2 style=" font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Balee's admin</h2>
<table style="width:100%">
  <tr>
  <th>user</th>
  <th>tel</th>
    <th>date_checkin</th>
    <th>date_checkout</th>
    <th>room_type</th>
    <th>optional</th>
    <th>adult</th>
    <th>children</th>
    <th>amount</th>
  </tr>
    <?php foreach($query as $data){?>
        <tr>
        <th><?=$data['username']?></th>
        <th><?=$data['tel']?></th>
        <th><?php echo $data['date_checkin']?></th>
        <th><?=$data['date_checkout']?></th>
        <th><?=$data['room_type']?></th>
        <th><?=$data['optional']?></th>
        <th><?=$data['adult']?></th>
        <th><?=$data['children']?></th>
        <th><?=$data['amount']?></th>
     </tr>
     <?php }?>    
</table>
</body>
</html>