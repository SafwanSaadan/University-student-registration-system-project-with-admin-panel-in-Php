<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>header</title>
    <link rel="stylesheet" href="css/leon.css" />
    <script src="js/script.js"></script>
</head>
<!-- Start Header -->
<div class="header">
    <div class="container">
        <!--  لجعل العناصر في المنتصف -->
        <img src="https://ust.edu.ye/wp-content/uploads/2020/06/ustlogo2.png" alt="جامعة العلوم والتكنولوجيا">

        <div class="d">
             <a href="http://localhost/project/main.php#contact">التواصل</a>
            <a href="http://localhost/project/main.php#services">خدمات الجامعة</a>
            <?php
            if(!isset($_SESSION["email"])){
            ?>
            <a href="http://localhost/project/create_login.php">إنشاء حساب</a>
            <?php
            }else{
            ?>
            <a href="http://localhost/project/login.php">التسجيل</a>
            <?php
            }
            ?>
            <a href="http://localhost/project/main.php#portfolio">أقسام الحاسوب</a>
            <a href="http://localhost/project/main.php#features">الكليات</a>
            <a href="http://localhost/project/main.php"> الصفحة الرئيسية</a>
        </div>

        <div class="links">
            <span class="icon">    <!-- ايقونة قائمة الروابط حق الاقسام -->
				<span></span>
            <span></span>
            <span></span>
            </span>
            <ul>
                <li><a href="http://localhost/project/main.php"> الصفحة الرئيسية</a></li>
                <li><a href="http://localhost/project/main.php#features">الكليات</a></li>
                <li><a href="http://localhost/project/main.php#portfolio">أقسام الحاسوب</a></li>
    <?php
    if(isset($_SESSION["email"])){
    ?>
                <li><a href="http://localhost/project/create-login.php">إنشاء حساب</a></li>
    <?php
    }else{
    ?>
                 <li><a href="http://localhost/project/login.php">التسجيل</a></li>
    <?php
    }
    ?>
                <li><a href="http://localhost/project/main.php#services">خدمات الجامعة</a></li>
                <li><a href="http://localhost/project/main.php#contact">التواصل</a></li>

            </ul>
        </div>
    </div>
</div>
<!-- End Header -->
</body>

</html>