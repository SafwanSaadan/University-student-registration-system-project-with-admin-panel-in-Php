<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>select table E-mail</title>
    
    <style>
        body {
    /*تنسيق جسد الصفحة */
    background-color: rgb(13, 50, 56);
    background-position: center;
    background-size: cover;
    font-family: sans-serif;
    margin: 0px;
}
        th{
           width:8%; 
        }
        tr{
            height: 10%;
            background-color:white;
        }
        .tr{
            height: 12%;
            font-size: 20px;
            background-color: #10cab7;
        }
    </style>
</head>
<body>
<header>
<?php
include ("header.php")
?></header>
<?php
   include_once 'db.php';
   if(!$conn){
    die('Could not connect : ' . mysqli_error());
   } 
   $res = mysqli_query($conn,'select * from  email');
   ?>
   <br>
   
   <div class="main">
    <div class="main">
<div class="name">
<br>
   <form method='POST'>
    <center>
   <table border='1'>
   <tr class="tr">
   <th>مسار الصورة</th>
   <th>نوع الصورة</th>
   <th>إسم الصورة</th>
   <th>رقم الجوال</th>
   <th>كلمة المرور</th>
   <th>البريد الإلكتروني</th>
   <th> اللقب</th>
   <th> الاسم</th>
   </tr>
   
   <?php
   while ($row = mysqli_fetch_array($res))
   {
    echo "<tr>";
    echo "<td>" . $row['img_path'] . "</td>";
    echo "<td>" . $row['img_type'] . "</td>";
    echo "<td>" . $row['img_name'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "</tr>";
   }
   
 ?>
 </table>
</center>
</form >
</div>
   </div>
   </div>
<br><br><br><br><br><br>
<footer>
<?php
include ("footer.php")
?></footer>
</body>
</html>