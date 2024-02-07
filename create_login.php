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
                        <h1><mark><q><font color="#F8060A"> إنشاء حساب </font>
	                        </q></mark></h1>

                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="name">

                                <label class="txet"><h5 class="txet"> الاسم </h5></label><br>
                                <input class="email" type="text" placeholder="الاسم " value="" required name="firstname"><br>
                                <label class="txet"><h5 class="txet"> اللقب </h5></label><br>
                                <input class="email" type="text" placeholder="اللقب " value="" required name="lastname"> <br>

                                <label class="txet"><h5 class="txet"> البريد الإلكتروني</h5></label><br>
                                <input class="email" type="email" placeholder="البريد الالكتروني" value="" required name="email"><br>

                                <label class="txet"><h5 class="txet"> كلمة المرور</h5></label><br><br>
                                <input class="password" type="password" placeholder="كلمة المرور" value="" required name="password"><br>
                                <label class="txet"><h5 class="txet"> تأكيد كلمة المرور</h5></label><br>
                                <input class="password" type="password" placeholder="تأكيد كلمة المرور" value="" required name="password2"><br>

                                <label class="txet"><h5 class="txet"> رقم الهاتف </h5></label><br>
                                <input class="email" type="tel" placeholder="رقم الجوال" value="" required name="phone"><br>

                                <label class="txet"><h5 class="txet"> صورة شخصية </h5></label>
                                <input class="email" type="file" name="file" id="file" />
                                <br><br>

                                <br>
                                <input class="button" type="submit" name="ok" value="إنشاء">
                        </form>
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
<?php
    
// session_start();
// if(!isset($_SESSION["email"])){
//     header("Location: http://localhost/project/Registration.php");
//     exit();
// }

$errors = [];
    if(isset($_POST["ok"])){
    include_once 'db.php';
    $fname =filter_var($_POST["firstname"],FILTER_SANITIZE_STRING);
    $lname =filter_var($_POST["lastname"],FILTER_SANITIZE_STRING);
    $email =filter_var($_POST["email"],FILTER_VALIDATE_EMAIL);
    $password =strval($_POST["password"]);
    $password2 =strval($_POST["password2"]);
    $phone =filter_var($_POST["phone"],FILTER_VALIDATE_INT);
   
    //strong password
    $uppercas = preg_match('@[A-Z]@',$password);
    $lowercas = preg_match('@[a-z]@',$password);
    $specialchars = preg_match('@[^s]@',$password);
    $number = preg_match('@[0-9]@',$password);
        

    if(empty($fname)){
        $errors[] ="يجب كتابة الاسم"; 
        ?>
        <script> alert("يجب كتابة الاسم");</script>
        <?php
    }else if(strlen($fname)>50){
        $errors[] ="يجب الا يكون الاسم أكبر من 50 حرف";
        ?>
        <script> alert("يجب الا يكون الاسم أكبر من 50 حرف");</script>
        <?php
    } 
    if(empty($lname)){
        $errors[] ="يجب كتابة اللقب"; 
        ?>
        <script> alert("يجب كتابة اللقب");</script>
        <?php
    }else if(strlen($lname)>20){
        $errors[] ="يجب الا يكون اللقب أكبر من 20 حرف";
        ?>
        <script> alert("يجب الا يكون اللقب أكبر من 20 حرف");</script>
        <?php
    } 

    if(empty($email)){
        $errors[] ="البريد الإلكتروني غير صالح ";
        ?>
        <script> alert("البريد الإلكتروني غير صالح ");</script>
        <?php 
    }else if(strpos($email,"gmail") == false){
        $errors[] =" gmail يجب أن يحتوي البريد الإلكتروني على كلمة";
        ?>
        <script> alert(" gmail يجب أن يحتوي البريد الإلكتروني على كلمة");</script>
        <?php
    } 
    
    if(empty($password) ){
        $errors[] ="يجب كتابة كلمة المرور "; 
        ?>
        <script> alert("يجب كتابة كلمة المرور ");</script>
        <?php
    }else if(strlen($password)<8){
        $errors[] ="يجب الا تقل كلمة المرور عن 8 حرف";
        ?>
        <script> alert("يجب الا تقل كلمة المرور عن 8 حرف");</script>
        <?php
    }else if(!$uppercas || !$lowercas || !$specialchars || !$number){
        $errors[] ="يجب ان تتكون كلمة المرور من الحروف الكبيرة والصغيرة والأرقام ";
        ?>
        <script> alert("يجب ان تتكون كلمة المرور من الحروف الكبيرة والصغيرة والأرقام ");</script>
        <?php
    }
    if(!($password2==$password)){
        $errors[] =" يجب الا تختلف كلمة المرور "; 
        ?>
        <script> alert(" يجب الا تختلف كلمة المرور ");</script>
        <?php
    }

    if(empty($phone) ){
        $errors[] ="يجب كتابة رقم الجوال ";
        ?>
        <script> alert("يجب كتابة رقم الجوال ");</script>
        <?php 
    }else if(strlen($phone)<9){
        $errors[] ="يجب الا يقل رقم الجوال عن 9 أرقام";
        ?>
        <script> alert("يجب الا يقل رقم الجوال عن 9 أرقام");</script>
        <?php
    }


    if(empty($errors)){
        $folder = "seve/";
        $img = $_FILES["file"]["name"];
        $tmp = $_FILES["file"]["tmp_name"];
        $type = $_FILES["file"]["type"];
        $path = "seve/" . $_FILES["file"]["name"];

        $password = password_hash($password,PASSWORD_DEFAULT);
        $res = mysqli_query($conn,"SELECT * FROM pro.email WHERE email='$email'");
        $stm = [];
        while ($row = mysqli_fetch_array($res)){
            if ($row['email']==$email){
            $stm = $row['email']; }
        }
        if(!empty($stm)){
        ?>
                <script>
                     alert(" هذا الحساب تم إنشائه من قبل !!!");
                </script>
        <?php
        }else {
            $sql = "INSERT INTO email (firstname,lastname,email,password,phone,img_name,img_type,img_path)
            VALUES ('$fname','$lname','$email','$password','$phone','$img','$type','$path')";
            if (mysqli_query($conn,$sql)){
                ?>
                <script>
                alert(" تم إنشاء الحساب بنجاح!!!");
                if(confirm("هل تريد إنشاء حساب جديد ")==true ) {
                        alert( "قم بإدخال البيانات المطلوبة في أسفل" );
                    }else {
                        close();
                    }
                    </script>
            <?php
        }
        move_uploaded_file($_FILES["file"]["tmp_name"],"seve/". $_FILES["file"]["name"]);    
        mysqli_close($conn);

   $_SESSION['email']=[
    "firstname" =>$fname,
    "lastname" =>$lname,
    "email" =>$email,
    "password" =>$password,
   ];
    }}
    }else{
     
    }
?>
  <script src="js/script.js"></script>
               <script src="https://unpkg.com/sweetalert@2.1.2/dist/sweetalert.min.js"></script>
                <script>
                    function alert1{
                    swal("تم إنشاء الحساب بنجاح","شكراً لإستخدامكم موقع جامعة العلوم والتكنولوجيا","success")
                    }
            alert1();
            </script>
</body>
</html>