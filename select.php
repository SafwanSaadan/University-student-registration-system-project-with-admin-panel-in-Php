<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>select table</title>
    
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
           width:10%; 
        }
        tr{
            height: 10%;
            background-color:white;
        }
        .tr{
            height: 15%;
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
   $res = mysqli_query($conn,'select * from  safwan');
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
   <th>الجنس</th>
   <th>نوع الدراسة</th>
   <th>التخصص</th>
   <th>رقم الهاتف</th>
   <th>مجموع الدرجات</th>
   <th>رقم الجلوس</th>
   <th>اللقب </th>
   <th>الإسم الثاني</th>
   <th>الإسم الأول</th>
   <th> رقم التسجيل </th>
   </tr>
   
   <?php
   while ($row = mysqli_fetch_array($res))
   {
    echo "<tr>";
    echo "<td>" . $row['six'] . "</td>";
    echo "<td>" . $row['subject'] . "</td>";
    echo "<td>" . $row['departmint'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['degree'] . "</td>";
    echo "<td>" . $row['sitnumber'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['fname'] . "</td>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['id'] . "</td>";
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