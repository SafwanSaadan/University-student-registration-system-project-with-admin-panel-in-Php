<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تم التسجيل</title>
</head>
<body>
<header>
<?php
include ("header.php")
?></header>
 <link rel="stylesheet" href="css/login.css">
 <style>
    p{
        text-align: center;
        font-size: 30px;
        color : red;
        background-color:yellow;
    }
 </style>
<?php
include_once 'db.php';
$fr = $_POST["firstname"];
$f = $_POST["fname"];
$l = $_POST["lastname"];
$si = $_POST["sitnumber"];
$d = $_POST["degree"];
$ph = $_POST["phone"];
$dep = $_POST["dep"];
$st = $_POST["sub"];
$ra = $_POST["radio"];
$sql = "INSERT INTO safwan
(firstname,fname,lastname,sitnumber,degree,phone,departmint,subject,six)
VALUES ('$fr','$f','$l', '$si', '$d','$ph','$dep','$st','$ra')";
if (mysqli_query($conn,$sql)){

    $res = mysqli_query($conn,"SELECT * FROM pro.safwan WHERE sitnumber='$si'");
    $stm = [];
    while ($row = mysqli_fetch_array($res)){
        if ($row['sitnumber']==$si){
        $stm = $row['id']; }
    }
    ?>
        <script> alert(" تم التسجيل بنجاح !!!");</script>
       <p> <?php
    echo "!!! تم التسجيل بنجاح "."<br/>";
    echo $stm."  رقم التسجيل الخاص بك هو"."<br/>";
    echo "  عليك سرعة تسديد رسوم التسجيل لإعتماد تسجيلك"."<br/>";
    echo " R.Y 2500  رسوم التسجيل التي يجب عليك دفعها هي"."<br/>";
    ?></p>
    <?php
} else {
echo "Error : ". $sql . ":-" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<br><br><br><br><br><br><br><br><br>
<footer>
<?php
include ("footer.php")
?></footer>
    
</body>
</html>