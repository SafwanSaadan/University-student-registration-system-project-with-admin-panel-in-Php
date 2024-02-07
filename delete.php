<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>delete</title>
   <link rel="stylesheet" href="css/Registration.css" />
   <style>
   body{text-align: center;
      background-color: rgb(13, 50, 56);
    background-position: center;
    background-size: cover;
    font-family: sans-serif;
    margin: 0px;}
    </style>
</head>
<body>
<header>
<?php
include ("header.php")
?></header>
<br><br>
    <form action="" method="post">
    <div class="main">
    <form action="" method="post">
    <div class="main">
<div class="name">
   <br><br><br>
               <label class="sitlabel"><h5 class="name">أدخل رقم جلوس الطالب الذي تريد حذف بياناته </h5></label>
                <input class="sitnumber" type="number" value="" required name="sitnumber"><br><br>
    <input class="button" type="submit" name = "ok" value="حذف"><br><br>
    </form>
    
    <form action="http://localhost/project/main.php" method="post">
                                <input class="button" type="submit" value=" الصفحة الرئيسية ">
                        </form><br><br>
         
</div>
</div>
</div>
<?php
 include_once 'db.php';
 
 if (isset($_POST["ok"])){
 $sitnumber = $_POST["sitnumber"]; 

$sql ="DELETE FROM pro.safwan WHERE sitnumber = '" . $sitnumber . "'";
 $query = mysqli_query($conn,$sql);
 if(!$query)
 {
   ?>
        <script> alert(" رقم الطالب الذي أدخلته غير موجود ");</script>
        <?php
    echo " رقم الطالب الذي أدخلته غير موجود ." .mysqli_error($conn);die;
 }
 else{
   ?>
        <script> alert(" تم الحذف بنجاح ");</script>
        <?php
    echo "Data seccessfully deleted.";  
 }}
?>
<footer>
<?php
include ("footer.php")
?></footer>
</body>
</html>