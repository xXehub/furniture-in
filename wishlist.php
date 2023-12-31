<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
   header('location:user_login.php');
};

include 'components/wishlist_cart.php';

if (isset($_POST['delete'])) {
   $wishlist_id = $_POST['wishlist_id'];
   $delete_wishlist_item = $conn->prepare("DELETE FROM `wishlist` WHERE id = ?");
   $delete_wishlist_item->execute([$wishlist_id]);
}

if (isset($_GET['delete_all'])) {
   $delete_wishlist_item = $conn->prepare("DELETE FROM `wishlist` WHERE user_id = ?");
   $delete_wishlist_item->execute([$user_id]);
   header('location:wishlist.php');
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!--- css link lur, eksternal btw-->
   <link rel="stylesheet" href="./css/style_sakkarepmu.css">

   <!--- google font link-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

   <?php include 'components/user_header.php'; ?>
   <div class="product-container">

      <div class="container">



         <div class="product-box">
            <!-- <section class="products"> -->
            <div class="product-main">
               <h2 class="title">New produk_sakkarepmu</h2>
               <div class="product-grid">
                  <div class="product-grid">
                  <?php
                     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
                     $select_products->execute();
                     if ($select_products->rowCount() > 0) {
                        while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
                           
                     ?>
                     <!-- query buat select whishlist -->
                     <?php
                     $grand_total = 0;
                     $select_wishlist = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
                     $select_wishlist->execute([$user_id]);
                     if ($select_wishlist->rowCount() > 0) {
                        while ($fetch_wishlist = $select_wishlist->fetch(PDO::FETCH_ASSOC)) {
                           $grand_total += $fetch_wishlist['price'];
                     ?>
                           <form action="" method="post" class="swiper-slide slide">
                              <div class="showcase">
                                 <div class="showcase-banner">
                                    <input type="hidden" name="pid" value="<?= $fetch_wishlist['pid']; ?>">
                                    <input type="hidden" name="wishlist_id" value="<?= $fetch_wishlist['id']; ?>">
                                    <input type="hidden" name="name" value="<?= $fetch_wishlist['name']; ?>">
                                    <input type="hidden" name="price" value="<?= $fetch_wishlist['price']; ?>">
                                    <input type="hidden" name="image" value="<?= $fetch_wishlist['image']; ?>">

                                    <img src="uploaded_img/<?= $fetch_wishlist['image']; ?>" alt="wishlist" width="300" class="product-img default">


                                    <div class="showcase-content">
                                       <a href="#" class="showcase-category"><?= $fetch_product['kategori']; ?></a>
                                       <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>">
                                          <h3 class="showcase-title"><?= $fetch_product['name']; ?></h3>
                                          <div class="price-box">
                                             <div class="price">Rp. <?= $fetch_wishlist['price']; ?>,00</div>
                                             <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                                          </div>
                                          <input type="submit" value="tambahkan ke keranjang" class="btn-newsletter" name="add_to_cart">
                                          <input type="submit" value="hapus produk" onclick="return confirm('delete this from wishlist?');" class="btn-newsletter" name="delete">
                                    </div>



                                    <p class="showcase-badge">Wishlist</p>
                                    <div href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="showcase-actions">
                                       <button class="btn-action" type="submit" name="add_to_wishlist">
                                          <ion-icon name="heart-outline"></ion-icon>
                                       </button>
                                       <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="btn-action">
                                          <ion-icon href="quick_view.php?pid=<?= $fetch_product['id']; ?>" name="eye-outline"></ion-icon>
                                       </a>
                                       <!-- <button class="btn-action">
                                       <ion-icon name="repeat-outline"></ion-icon>
                                    </button>
                                    <button class="btn-action">
                                       <ion-icon name="bag-add-outline"></ion-icon>
                                    </button> -->
                                    </div>
                                 </div>

                              </div>
                              
                           </form>
                     <?php
                        }
                     } else {
                        echo '<p class="empty">no products added yet!</p>';
                     }
                     ?>

<?php
                        }
                     } else {
                        echo '<p class="empty">no products added yet!</p>';
                     }
                     ?>


                  </div>
                  <!-- <h3 class="heading"> wishlist anda</h3>

            <div class="box-container"> -->



                  <!-- </div> -->

                  <div class="wishlist-total">
                     <p>total semua : <span>Rp.<?= $grand_total; ?>,00</span></p>
                     <a href="shop.php" class="option-btn">lanjut belanja</a>
                     <a href="wishlist.php?delete_all" class="delete-btn <?= ($grand_total > 1) ? '' : 'disabled'; ?>" onclick="return confirm('hapus semua produk dari wishlist?');">hapus semua produk</a>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- </section> -->













   <?php include 'components/footer.php'; ?>

   <script src="js/script.js"></script>

</body>

</html>