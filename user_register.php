<?php
include 'components/connect.php';
session_start();
if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};
if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
   $select_user->execute([$email,]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if ($select_user->rowCount() > 0) {
      $_SESSION['duplikat'] = 'email sudaah terdaftar!';
   } else {
      if ($pass != $cpass) {
         $_SESSION['error'] = 'konfirmasi password tidak sama!';
      } else {
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, password) VALUES(?,?,?)");
         $insert_user->execute([$name, $email, $cpass]);
         $_SESSION['register_berhasil'] = 'buat akun sukses, login sekarang!';
      }
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="./assets/css/style_sakkarepmu.css">

   <!--- google font link-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>
   <?php include 'components/user_header.php'; ?>
   <div class="login">
      <div class="container">
         <div class="slider-item">
            <!-- <img src="./assets/images/Quirky-house-Banner.jpg" alt="women's latest fashion sale" class="banner-img"> -->
            <div class="login-content">
               <section class=" form-container">

                  <form action="" method="post">
                     <!-- <h3>buat akun</h3> -->
                     <input type="text" name="name" required placeholder="masukkan username" maxlength="20" class="kolom-field">
                     <input type="email" name="email" required placeholder="masukkan email" maxlength="50" class="kolom-field" oninput="this.value = this.value.replace(/\s/g, '')">
                     <input type="password" name="pass" required placeholder="masukan password" maxlength="20" class="kolom-field" oninput="this.value = this.value.replace(/\s/g, '')">
                     <input type="password" name="cpass" required placeholder="konfirmasi password" maxlength="20" class="kolom-field" oninput="this.value = this.value.replace(/\s/g, '')">
                     <p style="color:red;">
                     <!-- kalo password salah -->
                        <?php
                        if (isset($_SESSION['error'])) {
                           echo $_SESSION['error'];
                           unset($_SESSION['error']);
                        }
                        ?>
                     </p>

                     <!-- kalo duplikat email -->
                     <p style="color:red;">
                     <?php
                        if (isset($_SESSION['duplikat'])) {
                           echo $_SESSION['duplikat'];
                           unset($_SESSION['duplikat']);
                        }
                        ?>
                     </p>

                     <!-- kalo sukses regist -->
                     <p style="color:green;">
                        <?php
                        if (isset($_SESSION['register_berhasil'])) {
                           echo $_SESSION['register_berhasil'];
                           unset($_SESSION['register_berhasil']);
                        }
                        ?>
                     </p>
                     <input type="submit" value="daftar sekarang" class="btn-login" name="submit">
                     <p>sudah punya akun?</p>
                     <a class="login-subtittle" href="user_login.php" class="option-btn">login sekarang</a>
                  </form>
               </section>
            </div>
         </div>
      </div>
   </div>
   <?php include 'components/footer.php'; ?>
   <script src="js/script.js"></script>
</body>

</html>
