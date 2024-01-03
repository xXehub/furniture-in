<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/wishlist_cart.php';

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
   <main>
      <?php include 'components/user_header.php'; ?>
      <!--- BANNER-->
      <div class="banner">
         <div class="container">
            <div class="slider-container has-scrollbar">
               <div class="slider-item">
                  <img src="./assets/images/Quirky-house-Banner.jpg" alt="women's latest fashion sale" class="banner-img">
                  <div class="banner-content">
                     <p class="banner-subtitle">Trending item</p>
                     <h2 class="banner-title">Jawir Living Room</h2>
                     <p class="banner-text">
                        starting at IDR <b>200.000</b>.00
                     </p>
                     <a href="./transaksi/detail.php" class="banner-btn">Beli Sekarang</a>
                  </div>
               </div>
               <!-- <div class="slider-item">
                  <img src="./assets/images/.jpg" alt="modern sunglasses" class="banner-img">
                  <div class="banner-content">
                     <p class="banner-subtitle">Trending set</p>
                     <h2 class="banner-title">Modern Kitchen Set</h2>
                     <p class="banner-text">
                        starting at IDR <b>150.000</b>.00
                     </p>
                     <a href="#" class="banner-btn">Beli Sekarang</a>
                  </div>
               </div>

               <div class="slider-item">
                  <img src="./assets/images/.jpg" alt="new fashion summer sale" class="banner-img">
                  <div class="banner-content">
                     <p class="banner-subtitle">Sale Offer</p>
                     <h2 class="banner-title">New Modern Sofa</h2>
                     <p class="banner-text">
                        starting at IDR <b>300.000</b>.99
                     </p>
                     <a href="#" class="banner-btn">Shop now</a>
                  </div>
               </div> -->
            </div>
         </div>
      </div>

      <div class="product-container">
         <div class="container">
            <!-- KATEGORI KIRI -->
            <div class="sidebar  has-scrollbar" data-productsle-menu>
               <div class="sidebar-top">

                  <h2 class="sidebar-title">KATEGORI</h2>

                  <button class="sidebar-close-btn" data-productsle-menu-close-btn>
                     <ion-icon name="close-outline"></ion-icon>
                  </button>
               </div>
               <div class="sidebar-category">
                  <!-- query ambil data kategori -->
                  <?php
                  $select_products = $conn->prepare("SELECT DISTINCT kategori FROM products LIMIT 5");
                  $select_products->execute();
                  if ($select_products->rowCount() > 0) {
                     while ($fetch_products = $select_products->fetch(PDO::FETCH_ASSOC)) {
                  ?>
                        <ul class="sidebar-menu-category-list">
                           <li class="sidebar-menu-category">
                              <button class="sidebar-accordion-menu" data-accordion-btn>
                                 <form action="" method="post" class="swiper-slide slide">
                                    <input type="hidden" name="name" value="<?= $fetch_products['kategori']; ?>">
                                    <div class="menu-title-flex">
                                       <!-- <img src="./assets/images/icons/dress." alt="clothes" width="20" height="20" class="menu-title-img"> -->
                                       <a class="menu-title" href="category.php?category=<?= $fetch_products['kategori']; ?>"><?= $fetch_products['kategori']; ?></a>
                                    </div>
                                 </form>
                           <?php
                        }
                     } else {
                        echo '<p class="empty">no products added yet!</p>';
                     }
                           ?>
                           <!-- <div>
                                                <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                                <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                            </div> -->

                              </button>


                           </li>
                           <!--  -->
                        </ul>

               </div>


               <!-- produknew -->
               <!-- <div class="sidebar  has-scrollbar" data-mobile-menu> -->
               <div class="product-showcase">
                  <h3 class="showcase-heading">Produk Terbaru</h3>
                  <div class="showcase-wrapper">
                     <div class="showcase-container">
                        <?php
                        $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 3");
                        $select_products->execute();
                        if ($select_products->rowCount() > 0) {
                           while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                              <div class="showcase">

                                 <a href="#" class="showcase-img-box">
                                    <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                                 </a>
                                 <div class="showcase-content">
                                    <a href="#">
                                       <h4 class="showcase-title"><?= $fetch_product['name']; ?></h4>
                                    </a>
                                    <!-- <div class="showcase-rating">
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                              </div> -->
                                    <div class="price-box">
                                       <!-- <del>$5.00</del> -->
                                       <p class="price"></span><?= $fetch_product['price']; ?></p>
                                    </div>
                                 </div>


                              </div>

                        <?php
                           }
                        } else {
                           echo '<p class="empty">no products added yet!</p>';
                        }
                        ?>
                     </div>
                  </div>
               </div>
            </div>



            <div class="product-box">

<!--- PRODUCT GRID-->
<div class="product-main">

   <h2 class="title">PRODUK</h2>
   <div class="product-grid">
      <!-- query search -->

      <?php
         $category = $_GET['category'];
         $select_products = $conn->prepare("SELECT * FROM `products` WHERE kategori LIKE '%{$category}%'");
         $select_products->execute();
         if ($select_products->rowCount() > 0) {
            while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
         ?>
            <form action="" method="post" class="swiper-slide slide">
               <div class="showcase">
                  <div class="showcase-banner">
                     <!-- gawe post (array key) -->
                     <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                     <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                     <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                     <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">

                     <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                     <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                     <p class="showcase-badge">TESTING</p>
                     <div href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="showcase-actions">

                        <p style="color:red;">
                           <?php
                           if (isset($_SESSION['error'])) {
                              echo $_SESSION['error'];
                              unset($_SESSION['error']);
                           }
                           ?>
                        </p>
                        <button class="btn-action" type="submit" name="add_to_wishlist">
                           <ion-icon name="heart-outline"></ion-icon>
                        </button>
                        <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="btn-action">
                           <ion-icon href="quick_view.php?pid=<?= $fetch_product['id']; ?>" name="eye-outline"></ion-icon>
                        </a>
                        <button class="btn-action" type="submit" name="add_to_cart">
                           <ion-icon name="cart-outline"></ion-icon>
                        </button>
                        <!-- <button class="btn-action">
                        <ion-icon name="repeat-outline"></ion-icon>
                     </button>
                     <button class="btn-action">
                        <ion-icon name="bag-add-outline"></ion-icon>
                     </button> -->
                     </div>
                  </div>
                  <div class="showcase-content">
                     <a href="#" class="showcase-category"><?= $fetch_product['kategori']; ?></a>
                     <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>">
                        <h3 class="showcase-title"><?= $fetch_product['name']; ?></h3>
                        <!-- <h3 class="showcase-isilur">sdsdsd</h3> -->
                     </a>
                     <!-- <div class="showcase-rating">
                           <ion-icon name="star"></ion-icon>
                           <ion-icon name="star"></ion-icon>
                           <ion-icon name="star"></ion-icon>
                           <ion-icon name="star-outline"></ion-icon>
                           <ion-icon name="star-outline"></ion-icon>
                        </div> -->
                     <div class="price-box">
                        <p class="price"><span>Rp.</span><?= $fetch_product['price']; ?></p>
                        <!--  
                        <input type="number" name="qty" class="kuantitas-field" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                        -->
                        <!-- <del>IDR 75.00</del> -->
                     </div>
                  </div>
               </div>
               <!-- <input type="submit" value="tambahkan ke keranjang" class="btn btn-login" name="add_to_cart"> -->
            </form>
      <?php
         }
      } else {
         echo '<p class="empty">no products added yet!</p>';
      }
      ?>
   </div>
</div>
</div>
         </div>
      </div>
      <?php include 'components/footer.php'; ?>

      <script src="js/script.js"></script>
   </main>
</body>

</html>
