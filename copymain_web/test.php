<?php
 include('connection.php');
 if(isset($_POST) && !empty($_POST)){
   $user = $_POST['user'];
   $tel = $_POST['tel'];
    $type = $_POST['name'];
    $optional = $_POST['name2'];
    $date_checkin = $_POST['date'];
    $date_checkout = $_POST['date2'];
    $adult = $_POST['quantity'];
    $children = $_POST['quantity2'];
    $amount = $_POST['quantity3'];
    $sql= "INSERT INTO balee (username,tel,date_checkin,date_checkout,room_type,optional,adult,children,amount)
    VALUES ( '$user','$tel','$date_checkin', '$date_checkout','$type','$optional','$adult','$children','$amount')";
    $query = mysqli_query($conn,$sql);

 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="confirm.css">
    <title>Document</title>

</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap');
*{
    padding:10;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    font-family: 'Kanit', sans-serif;

   
}
.allbookingpage{
   margin-left:200px
}
.bookingpage{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 800px;
    height: 550px;
    margin-left: 260px;  
    margin-top: 80px;  
    padding-top: 10px;
    padding-left: 100px;
    
   
    
}
.piggy{
        width: 250px;
        height: 200px;
        position: absolute;
        margin-top: -300px;
        margin-left: 400px;
   
}
@media (min-width: 400px) and (max-width: 736px)  {
    .bookingpage{
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 320px;
        height: 830px;
        margin-left: 50px;  
        margin-top: 50px;  
        padding-top: 10px;
        padding-left: 15px;    
    }
    .piggy{
       margin-left:50px;
       margin-top:80px
    }
}
.login{
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 420px;
    height: 200px;
    margin-left: 700px;  
    margin-top: 300px;  
    padding-top: 10px;
    padding-left: 15px; 
    display:flex;
}


</style>
<body>
<div class="allbookingpage">
   <div class="bookingpage" >
   <div class="minipage">
   <h1 >การจองของคุณเสร็จสิ้นเเล้ว !</h1>
    <p>กรุณาถ่ายภาพหน้าจอนี้ไว้เป็นหลักฐาน</p>
   <br>
   <h>user:</h>
   <?php 
      echo $_POST['user'];
   ?>
       <br> <br>
      <h>tel:</h>
   <?php 
      echo $_POST['tel'];
   ?>
   <br><br>
   <h>date check-in:</h>
   <?php
    echo $_POST['date'];
   ?>
   <br>
   <br>
   <h>date check-out:</h>
      <?php
    echo $_POST['date2'];
   ?>
      <br>
      <br>
   <h>room type:</h>
   <?php
   echo $_POST['name'];
   ?>
      <br>
      <br>
   <h>option special:</h>
   <?php
   echo $_POST['name2'];
   ?>
   <br>
   <br>
   <h>adult:</h>
   <?php 
      echo $_POST['quantity'];
   ?>
      <br>
      <br>
      <h>children:</h>
   <?php 
      echo $_POST['quantity2'];
   ?>
      <br>
      <br>
      <h>room:</h>
   <?php 
      echo $_POST['quantity3'];
   ?>


   </div>
   <img class="piggy" src="qrcode.png" >
   </div>
   
   </div>
</body>
</html>