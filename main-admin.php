<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title> تسجيل الدخول </title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/leon.css" />
    
</head>

<body>
    <header class="header">
        <?php include( "header.php"); ?>
    </header>

    <div class="main">
        <section id="team" class="wrapper">
            <div class="padding">
                <div class="flex">
                    <div class="team-member">
                        <div class="team-member-photo">
                            <img src="images/user.jpg" alt="">
                        </div>
                        <br>
                        <script> alert("wellcome admin");</script>
                        <h1><mark><q><font color="#F8060A">  wellcome admin  </font>
                    	</q></mark></h1>

                        <form action="http://localhost/project/Registration.php" method="post">
                            <div class="name">
                                <input class="button" type="submit" value="تسجيل طلاب">
                        </form>
                        <form action="http://localhost/project/select.php" method="post">
                            <div class="name">
                                <input class="button" type="submit" value="عرض الطلاب المسجلين">
                        </form>
                        <form action="http://localhost/project/select-email.php" method="post">
                            <div class="name">
                                <input class="button" type="submit" value="عرض الحسابات">
                        </form>
                        <form action="http://localhost/project/create_login.php" method="post">
                            <div class="name">
                                <input class="button" type="submit" value="إنشاء حساب">
                        </form>
                        <form action="http://localhost/project/update.php" method="post">
                            <div class="name">
                                <input class="button" type="submit" value="تعديل">
                        </form>
                        <form action="http://localhost/project/delete.php" method="post">
                            <div class="name">
                                <input class="button" type="submit" value="حذف">
                        </form>
                        <br><br>
                        <form action="http://localhost/project/main.php" method="post">
                                <input class="button" type="submit" value="الرئيسية ">
                        </form>

                        <br>


                        </div>
                    </div>

                </div>
        </section>
        </div>


</body>
<footer>
    <?php include( "footer.php"); ?>
</footer>


</html>