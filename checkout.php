<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
   header('location:user_login.php');
};

if (isset($_POST['order'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $method = $_POST['method'];
   $method = filter_var($method, FILTER_SANITIZE_STRING);
   $address = 'Rumah No. ' . $_POST['flat'] . ', ' . $_POST['street'] . ', ' . $_POST['city'] . ', ' . $_POST['state'] . ', ' . $_POST['country'] . ' - ' . $_POST['pin_code'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);
   $total_products = $_POST['total_products'];
   $total_price = $_POST['total_price'];

   $check_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
   $check_cart->execute([$user_id]);

   if ($check_cart->rowCount() > 0) {

      $insert_order = $conn->prepare("INSERT INTO `orders`(user_id, name, number, email, method, address, total_products, total_price) VALUES(?,?,?,?,?,?,?,?)");
      $insert_order->execute([$user_id, $name, $number, $email, $method, $address, $total_products, $total_price]);

      $delete_cart = $conn->prepare("DELETE FROM `cart` WHERE user_id = ?");
      $delete_cart->execute([$user_id]);

      $message[] = 'permintaan order anda sukses!';
   } else {
      $message[] = 'keranjang anda kosong';
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
   <div class="product-container">
      <div class="container">
         <div class="sidebar  has-scrollbar" data-mobile-menu>
            <div class="product-showcase">
               <h3 class="showcase-heading">Pesanan Anda</h3>
               <div class="showcase-wrapper">
                  <div class="showcase-container">
                     <!-- <section class="checkout-orders"> -->
                     <form action="" method="POST">
                        <!-- <h3>Pesanan Anda</h3> -->
                        <div class="display-orders">
                           <?php
                           $grand_total = 0;
                           $cart_items[] = '';
                           $select_cart = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
                           $select_cart->execute([$user_id]);
                           if ($select_cart->rowCount() > 0) {
                              while ($fetch_cart = $select_cart->fetch(PDO::FETCH_ASSOC)) {
                                 $cart_items[] = $fetch_cart['name'] . ' (' . $fetch_cart['price'] . ' x ' . $fetch_cart['quantity'] . ') - ';
                                 $total_products = implode($cart_items);
                                 $grand_total += ($fetch_cart['price'] * $fetch_cart['quantity']);
                           ?>
                                 <p> <?= $fetch_cart['name']; ?> <span>(<?= 'Rp.' . $fetch_cart['price'] . ',00 x ' . $fetch_cart['quantity']; ?>)</span> </p>
                           <?php
                              }
                           } else {
                              echo '<b class="empty">keranjang anda kosong!</b>';
                           }
                           ?>
                           <input type="hidden" name="total_products" value="<?= $total_products; ?>">
                           <input type="hidden" name="total_price" value="<?= $grand_total; ?>" value="">
                           <div class="grand-total">total semua : <span>Rp.<?= $grand_total; ?>,00</span></div>
                        </div>
                        </div>
                  </div>
               </div>
            </div>
            <div class="product-box">
               <div class="product-main">
                  <h2 class="title">PRODUK</h2>
                  <div class="product-grid">
                     <!-- <h3>Masukkan Alamat Anda</h3> -->
                     <div class="inputkolom-field">
                        <span>Nama Anda :</span>
                        <input type="text" name="name" placeholder="masukkan nama anda" class="kolom-field" maxlength="20" required>
                     </div>
                     <div class="inputkolom-field">
                        <span>Nomor :</span>
                        <input type="number" name="number" placeholder="masukkan nomor anda" class="kolom-field" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false;" required>
                     </div>
                     <div class="inputkolom-field">
                        <span>email :</span>
                        <input type="email" name="email" placeholder="enter your email" class="kolom-field" maxlength="50" required>
                     </div>
                     <div class="inputkolom-field">
                        <span>Metode Pembelian :</span>
                        <select name="method" class="kolom-field" required>
                           <option value="Bayar Di Tempat">Bayar Di Tempat</option>
                        </select>
                     </div>
                     <div class="inputkolom-field">
                        <span>Nomor Rumah :</span>
                        <input type="text" name="flat" placeholder="contoh : 99" class="kolom-field" maxlength="50" required>
                     </div>
                     <div class="inputkolom-field">
                        <span>RT/RW:</span>
                        <input type="text" name="street" placeholder="contoh : Rt.1 rw.1" class="kolom-field" maxlength="50" required>
                     </div>
                     <div class="inputkolom-field">
                        <span>kecamatan :</span>
                        <input type="text" name="city" placeholder="contoh : menganti" class="kolom-field" maxlength="50" required>
                     </div>
                     <div class="inputkolom-field">
                        <span>Kabupaten </span>
                        <input type="text" name="state" placeholder="contoh : Gresik" class="kolom-field" maxlength="50" required>
                     </div>
                     <div class="inputkolom-field">
                        <span>Negara :</span>
                        <input type="text" name="country" placeholder="contoh : indonesia" class="kolom-field" maxlength="50" required>
                     </div>
                     <div class="inputkolom-field">
                        <span>kode pos :</span>
                        <input type="number" min="0" name="pin_code" placeholder="contoh : 123456" min="0" max="999999" onkeypress="if(this.value.length == 6) return false;" class="kolom-field" required>
                     </div>

                  </div>
                  <input type="submit" name="order" class="btn btn-login <?= ($grand_total > 1) ? '' : 'disabled'; ?>" value="pesan sekarang">

               </div>
            </div>
            </form>
            <!-- </section> -->
      </div>
      </div>
      <?php include 'components/footer.php'; ?>
      <script src="js/script.js"></script>
</body>
</html>
