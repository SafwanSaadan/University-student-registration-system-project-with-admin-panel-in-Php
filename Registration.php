<?php
// session_start();
// if(!isset($_SESSION["email"])){
//     header("Location: http://localhost/project/create_login.php");
//     exit();
// }
?>

<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <title> بوابة التسجيل الإلكتروني </title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/leon.css" />
    <link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
    <header class="header">
        <?php include( "header.php"); ?>
    </header>
    <div class="regform">
        <h1> Registration Form </h1>
    </div>

    <div class="main">
    <script> alert("مرحباً بكم في صفحة تسجيل كلية الحاسبات وتكنولوجيا المعلومات ");</script>
    <script> alert("فضلاً قم بإدخال البيانات المذكورة أدناه بالشكل الصحيح ");</script>
        <br>
        <h1><mark><q><font color="#F8060A">
		مرحباً بكم في صفحة تسجيل كلية الحاسبات وتكنولوجيا المعلومات  </font>
	</q></mark></h1>
        <h1><mark><q><font color="#170DF8"><u>
		فضلاً قم بإدخال البيانات المذكورة أدناه بالشكل الصحيح </u></font></q>
		</mark></h1>
        <hr>

        <form action="insert.php" method="post">
            <div class="name">
                <label class="namelabel"><h5 class="name"> الاسم الأول</h5></label>
                <input class="fullname" type="text" placeholder="الاسم الأول" value="" required name="firstname">
                <label class="namelabel"><h5 class="name"> الاسم الثاني</h5></label>
                <input class="fullname" type="text" placeholder="الاسم الثاني" value="" required name="fname">  <br>
                <label class="namelabel"><h5 class="name"> اللقب </h5></label>
                <input class="fullname" type="text" placeholder="اللقب " value="" required name="lastname"> <br>

                <label class="sitlabel"><h5 class="name"> رقم الجلوس  </h5></label>
                <input class="sitnumber" type="number" placeholder="رقم الجلوس " value="" required name="sitnumber">

                <label class="degreelabel"><h5 class="name"> مجموع الدرجات  </h5></label>
                <input class="degree" type="number" placeholder="مجموع الدرجات " value="" required name="degree"><br>

                <label class="phonelabel"><h5 class="name"> رقم الهاتف </h5></label>
                <input class="number" type="tel" placeholder="رقم الجوال" value="" required name="phone"><br>
<!-- 
                <label class="emaillabel"><h5 class="name"> البريد الإلكتروني</h5></label>
                <input class="email" type="text" value="" required name="email"><br>

                <label class="passwordlabel"><h5 class="name"> كلمة المرور</h5></label>
                <input class="password" type="password" value="" required name="password"><br> -->

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
                <input class="button" type="submit" value="تسجيل"><br><br>
        </form>
        <form action="http://localhost/project/main.php" method="post">
                                <input class="button" type="submit" value="الصفحة الرئيسية ">
                        </form>
                        <br>



        </div>
</div>


</body>
<footer>
    <?php include( "footer.php"); ?>
</footer>


</html>