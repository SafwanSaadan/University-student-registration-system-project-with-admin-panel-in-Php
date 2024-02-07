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
                            <img src="images/user1.jpg" alt="">
                        </div>
                        <br>
                        <h1><mark><q><font color="#F8060A"> تسجيل الدخول  </font>
	</q></mark></h1>
                 <form action="" method="post">
                     <div class="name">
                        <label class="texet"><h5 class="txet"> البريد الإلكتروني</h5></label>
                        <input class="email" type="email" placeholder="البريد الالكتروني" value="" required name="email"><br>

                        <label class="txet"><h5 class="txet"> كلمة المرور</h5></label><br>
                        <input class="password" type="password" placeholder="كلمة المرور" value="" required name="password"><br>

                        <br>
                        <input class="button" type="submit" name="ok" value="تسجيل">
                </form>
                       
<?php
include_once 'db.php';
if (isset($_POST["ok"])){
$email = $_POST["email"];
$pass = $_POST["password"];

session_start();
if(isset($_SESSION["email"])){
    header("Location: http://localhost/project/Registration.php");
    exit();
}

if (($_POST['email'] == 'safwan@gmail.com')&&($_POST['password'] == 'safwan@123')){
    header( 'Location: http://localhost/project/main-admin.php' );
}else{
$errors = [];

$stm = "SELECT * FROM email WHERE email='$email'";
$q =$conn->prepare($stm);
$q->execute();
$data = $q->fetch();
if(!$data){
    header( 'Location: http://localhost/project/create_login.php' );
    $errors[] = "خطأ في تسجيل الدخول ";
}else{
    $password_hash = $data['password'];
    if(!password_verify($password,$password_hash)){
        $errors[] = "خطأ في تسجيل الدخول ";
    }else{
        $_SESSION['email']=[
            "email" =>$email,
            "password" =>$password_hash,
           ];
    header( 'Location: http://localhost/project/create_login.php' );
    }
    echo $password = $data['password'];
    header( 'Location: http://localhost/project/Registration.php' ); 
    } 
   }
 }
    ?>

    <?php
    if (isset($errors)){
        if (!empty($errors)){
            foreach($errors as $msg){
                echo $msg ."<br />";
            }
        }
    }
    ?>

                        <br><br>
                        <form action="http://localhost/project/main.php" method="post">
                                <input class="button" type="submit" value="الرئيسية ">
                        </form>

                        </div>
                    </div>

                </div>
        </section>
        </div>


<footer>
    <?php include( "footer.php"); ?>
</footer>


</body>
</html>