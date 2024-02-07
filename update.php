<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>update </title>
   <link rel="stylesheet" href="css/style.css" />
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
?>
</header>
<br><br>
<div class="main">
<div class="main">
<div class="name">
<br>
    <form action="" method="post">
               <label class="sitlabel"><h5 class="name">أدخل رقم جلوس الطالب الذي تريد تعديل بياناته </h5></label>
                <input class="sitnumber" type="number" value="" required name="sitnumber">
                <br>
                <label class="namelabel"><h5 class="name"> الاسم الأول</h5></label>
                <input class="fullname" type="text" value="" required name="firstname">
                <label class="namelabel"><h5 class="name"> الاسم الثاني</h5></label>
                <input class="fullname" type="text" value="" required name="fname"> 
                <label class="namelabel"><h5 class="name"> اللقب </h5></label>
                <input class="fullname" type="text" value="" required name="lastname"> <br>

                <label class="degreelabel"><h5 class="name"> مجموع الدرجات  </h5></label>
                <input class="degree" type="number" value="" required name="degree"><br>

                <label class="phonelabel"><h5 class="name"> رقم الهاتف </h5></label>
                <input class="number" type="number" value="" required name="phone"><br>

                <label class="name"><h5 class="name"> التخصص  </h5></label>
                <select class="dep" type="text" value="" required name="dep">
	            <option disabled="disabled" selected="selected">-- إضغط هنا لرؤية تخصصات كلية الحاسبات--</option>	
            	<option  class="dep" >  تقنية معلومات عربي </option>	
            	<option  class="dep" >  تقنية معلومات إنجليزي </option>
            	<option  class="dep" > جرافكس </option>
                <option  class="dep" > أمن سيبراني </option>
                <option  class="dep" > علوم الحاسوب </option>
                <option  class="dep" > نظم المعلومات </option>
	            </select></br>
              


                <label class="name"><h5 class="name"> نوع الدراسة </h5></label>
                <select class="sub" type="text" value="" required name="sub" >
	            <option disabled="disabled" selected="selected">-- إضغط هنا لرؤية أنواع الدراسة المتاحه--</option>	
            	<option class="sub"  >  منتظم </option>	
            	<option class="sub"  >  مفتوح </option>
            	<option class="sub"  > عن بعد </option>
	            </select><br>
                

                <label class="name"><h5 class="name">  الجنس </h5><br>
                <span class="check">   ذكر </span>
                <input class="radio-one" type="radio" value="ذكر" required  name="radio">
                <span class="check">   أنثى   </span>
                <input class="radio-two" type="radio" value="أنثى" required  name="radio">
                </label>

                <br><br>

                <input class="button" type="submit" name="ok" value="تحدبث"><br>
                <form action="http://localhost/project/main.php" method="post">
                                <input class="button" type="submit" value="الرئيسية">
                        </form>
    </form>
    <br>
    
         
                
   </div>
   </div>
   </div>
<?php
include_once 'db.php';
if (isset($_POST["ok"])){
$firstname = $_POST["firstname"];
$fname = $_POST["fname"];
$lastname = $_POST["lastname"];
$sitnumber = $_POST["sitnumber"];
$degree = $_POST["degree"];
$phone = $_POST["phone"];
$departmint = $_POST["dep"];
$subject = $_POST["sub"];
$six = $_POST["radio"];

$sql ="UPDATE safwan SET firstname = '"
 . $firstname . "',fname = '". $fname
 ."',lastname = '" . $lastname
 . "',sitnumber = '" . $sitnumber . 
 "',degree = '" . $degree . "',phone = '" . 
 $phone . "',departmint = '" . $departmint . 
 "',subject = '" . $subject . "',six = '" . $six
  . "' WHERE sitnumber = '" . $sitnumber . "'";
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
        <script> alert(" تم التعديل بنجاح ");</script>
        <?php
    echo "Data seccessfully updated.";  
 }}
?>

<footer>
<?php
include ("footer.php")
?></footer>
</body>
</html>