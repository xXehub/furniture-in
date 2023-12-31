<?php
include 'components/connect.php';
session_start();
if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};
if (isset($_POST['submit'])) {

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if ($select_user->rowCount() > 0) {
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   } else {
      $_SESSION['error'] = 'username dan password salah!';
   }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Jawir.In - eCommerce Website</title>

   <!--- favicon-->
   <link rel="shortcut icon" href="./assets/images/logo/favicon.ico" type="image/x-icon">

   <!--- css link lur, eksternal btw-->
   <link rel="stylesheet" href="./assets/css/style_sakkarepmu.css">

   <!--- google font link-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
   <?php include 'components/user_header.php'; ?>
   <!-- <div class="modal" data-modal> -->
   <div class="login">
      <div class="container">
         <div class="slider-item">
            <!-- <img src="./assets/images/Quirky-house-Banner.jpg" alt="women's latest fashion sale" class="banner-img"> -->
            <div class="login-content">
               <form action="" method="post">
                  <!-- <h3 class="login-text">Login Sekarang</h3> -->
                  <input type="email" name="email" required placeholder="masukkann email" class="kolom-field">
                  <input type="password" name="pass" required placeholder="masukkan password" class="kolom-field" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">

                  <p style="color:red;">
                     <?php
                     if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                     }
                     ?>
                  </p>
                  <input type="submit" value="login sekarang" class="btn-login" name="submit">
                  <p>tidak punya akun?<a href="user_register.php" class="login-subtittle">buat akun</a></p>

               </form>
            </div>
         </div>
         <!-- <div class="alert">
                     <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            This is an alert box.
         </div> -->
      </div>
   </div>
   <?php include 'components/footer.php'; ?>
   <script src="js/script.js"></script>
</body>
</html>
