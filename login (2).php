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
                                <input class="email" type="email" value=" " required name="email"><br>

                                <label class="txet"><h5 class="txet"> كلمة المرور</h5></label><br>
                                <input class="password" type="password" value="" required name="password"><br>

                                <br>
                                <input class="button" type="submit" name="ok" value="تسجيل">
                        </form>


<?php
// $filters = array("name"=>array("filter"=>FILTER_SANITIZE_STRING),

$filters = array("email"=>array("filter"=>FILTER_VALIDATE_EMAIL,),
"password"=>array("options"=>array(
    "min_value"=>8,
    "max_value"=>20)
));
$res = filter_input_array(INPUT_POST,$filters);
if (isset($_POST["ok"])){
if (!$res["email"]){
    echo ("E-mail is not valid <br />");
    // header( 'Location: http://localhost/project/login.php' ); 
}if(!$res["password"]){
    echo ("the password must not be less than 8 characters");
    // header( 'Location: http://localhost/project/login.php' ); 
}else {
    if (isset($_POST["ok"])){
        if (($_POST['email'] == 'safwan@gmail.com')&&($_POST['password'] == 'safwan@123')){
           header( 'Location: http://localhost/project/main-admin.php' );
        }else {
           header( 'Location: http://localhost/project/Registration.php' ); 
       }}
}}


    ?>

<?php

include_once 'db.php';
if (isset($_POST["ok"])){
$e = $_POST["email"];
$p = $_POST["password"];
$sql = "INSERT INTO pro.email (email,password)
 VALUES ('$e', '$p')";
mysqli_close($conn);
}

<?php
include_once 'db.php';
$e = $_POST["email"];
$p = $_POST["password"];

$sql = "INSERT INTO email (email,password)
VALUES ('$e', '$p')";

?>

// $res = mysqli_query($conn,'select * from  email'); 

// while ($row = mysqli_fetch_array($res)){
// $ee = $row["email"];
// $pp = $row["password"];
// if(($ee == $e)&&($pp == $p)){ 
//     break; 
// }else{

// include_once 'db.php';
// if (isset($_POST["ok"])){
// $e = $_POST["email"];
// $p = $_POST["password"];
// function email_user ($e){
//         if(empty($_POST)==true){
//         $sql_u ="select * from  email where email = $e";
//         $res_u = mysqli_query($conn,$sql_u);
//         if(mysqli_num_rows($res_u)>0){
//             return true;
//         }else{
//             return false;
//             }}}

// if((empty($_POST)==true)&&(email_user($e)==false)){


    ?>

                        <br><br>
                        <a href="http://localhost/project/main.php" target="_blank"></a><button class="button"> 
		الرجوع الى الصفحة الرئيسية </button></a><br>


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