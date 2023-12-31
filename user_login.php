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
      $message[] = 'username dan password salah!';
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
   <link rel="stylesheet" href="./css/style_sakkarepmu.css">

   <!--- google font link-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

   <?php include 'components/user_header.php'; ?>
   <!-- <div class="modal" data-modal> -->
   <div class="banner">
      <div class="container">
         <div class="slider-item">
            <img src="./assets/images/Quirky-house-Banner.jpg" alt="women's latest fashion sale" class="banner-img">
            <div class="banner-content">
               <form action="" method="post">
                  <h3>login sekarang</h3>
                  <input type="email" name="email" required placeholder="masukkann email" class="email-field">
                  <input type="password" name="pass" required placeholder="masukkan password" class="email-field" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
                  <input type="submit" value="login sekarang" class="btn-newsletter" name="submit">
                  <p>tidak punya akun?</p>
                  <a href="user_register.php" class="option-btn">buat akun</a>
               </form>
            </div>
         </div>


         <!-- <div class="modal-close-overlay" data-modal-overlay>
            <div class="modal-content">
               <button class="modal-close-btn" data-modal-close>
                  <ion-icon name="close-outline"></ion-icon>
               </button>
               <div class="newsletter-img">
                  <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
               </div>
               <div class="newsletter">
                  <section class="form-container">

                     <form action="" method="post">
                        <h3>login sekarang</h3>
                        <input type="email" name="email" required placeholder="masukkann email" class="email">
                        <input type="password" name="pass" required placeholder="masukkan password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
                        <input type="submit" value="login sekarang" class="btn-newsletter" name="submit">
                        <p>tidak punya akun?</p>
                        <a href="user_register.php" class="option-btn">buat akun</a>
                     </form>
                     </div>
               </div>
            </div>
         </div> -->
      </div>
   </div>
   <!-- </section> -->





   <!--
- MODAL
-->

   <!-- <div class="modal" data-modal>
   <div class="modal-close-overlay" data-modal-overlay></div>
   <div class="modal-content">
      <button class="modal-close-btn" data-modal-close>
         <ion-icon name="close-outline"></ion-icon>
      </button>
      <div class="newsletter-img">
         <img src="./assets/images/newsletter.png" alt="subscribe newsletter" width="400" height="400">
      </div>
      <div class="newsletter">
         <form action="#">
            <div class="newsletter-header">
               <h3 class="newsletter-title">Subscribe Newsletter.</h3>
               <p class="newsletter-desc">
                  Subscribe the <b>Jawir.In</b> to get latest products and discount update.
               </p>
            </div>
            <input type="email" name="email" class="email-field" placeholder="Email Address" required>
            <button type="submit" class="btn-newsletter">Subscribe</button>
         </form>

      </div>
   </div>
</div> -->





   <!--
- NOTIFICATION TOAST
-->







   <?php include 'components/footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>