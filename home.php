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
   <link rel="stylesheet" href="./css/style_sakkarepmu.css">

   <!--- google font link-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>


   <!--- HEADER -->
   <?php include 'components/user_header.php'; ?>



   <!--- MAIN-->

   <main>

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
               <div class="slider-item">
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

               </div>

            </div>

         </div>

      </div>





      <!--
      - CATEGORY
    -->

      <div class="category">

         <div class="container">

            <div class="category-item-container has-scrollbar">

               <div class="category-item">

                  <div class="category-img-box">
                     <img src="./assets/images/icon_sakkarepmu/armchair.webp" alt="Armschair" width="30">
                  </div>

                  <div class="category-content-box">

                     <div class="category-content-flex">
                        <h3 class="category-item-title">Armschair</h3>

                        <p class="category-item-amount">(53)</p>
                     </div>

                     <a href="#" class="category-btn">Show all</a>

                  </div>

               </div>

               <div class="category-item">

                  <div class="category-img-box">
                     <img src="./assets/images/icon_sakkarepmu/beds.webp" alt="winter wear" width="30">
                  </div>

                  <div class="category-content-box">

                     <div class="category-content-flex">
                        <h3 class="category-item-title">Beds</h3>

                        <p class="category-item-amount">(58)</p>
                     </div>

                     <a href="#" class="category-btn">Show all</a>

                  </div>

               </div>

               <div class="category-item">

                  <div class="category-img-box">
                     <img src="./assets/images/icon_sakkarepmu/couch.webp" alt="Couch" width="30">
                  </div>

                  <div class="category-content-box">

                     <div class="category-content-flex">
                        <h3 class="category-item-title">Couch</h3>

                        <p class="category-item-amount">(68)</p>
                     </div>

                     <a href="#" class="category-btn">Show all</a>

                  </div>

               </div>

               <div class="category-item">

                  <div class="category-img-box">
                     <img src="./assets/images/icon_sakkarepmu/dinningtable.webp" alt="Dinning Table" width="30">
                  </div>

                  <div class="category-content-box">

                     <div class="category-content-flex">
                        <h3 class="category-item-title">Dinning Table</h3>

                        <p class="category-item-amount">(84)</p>
                     </div>

                     <a href="#" class="category-btn">Show all</a>

                  </div>

               </div>

               <div class="category-item">

                  <div class="category-img-box">
                     <img src="./assets/images/icon_sakkarepmu/matress.webp" alt="Matress" width="30">
                  </div>

                  <div class="category-content-box">

                     <div class="category-content-flex">
                        <h3 class="category-item-title">Matress</h3>

                        <p class="category-item-amount">(35)</p>
                     </div>

                     <a href="#" class="category-btn">Show all</a>

                  </div>

               </div>

               <div class="category-item">

                  <div class="category-img-box">
                     <img src="./assets/images/icon_sakkarepmu/ottoman.webp" alt="Ottoman" width="30">
                  </div>

                  <div class="category-content-box">

                     <div class="category-content-flex">
                        <h3 class="category-item-title">Ottoman</h3>

                        <p class="category-item-amount">(16)</p>
                     </div>

                     <a href="#" class="category-btn">Show all</a>

                  </div>

               </div>

               <div class="category-item">

                  <div class="category-img-box">
                     <img src="./assets/images/icon_sakkarepmu/sofaset.webp" alt="Sofa Set" width="30">
                  </div>

                  <div class="category-content-box">

                     <div class="category-content-flex">
                        <h3 class="category-item-title">Sofa Set</h3>

                        <p class="category-item-amount">(27)</p>
                     </div>

                     <a href="#" class="category-btn">Show all</a>

                  </div>

               </div>

               <!--  <div class="category-item">
                        <div class="category-img-box">
                            <img src="./assets/images/icon_sakkarepmu/hat.svg" alt="hat & caps" width="30">
                        </div>
                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Hat & caps</h3>
                                <p class="category-item-amount">(39)</p>
                            </div>
                            <a href="#" class="category-btn">Show all</a>
                        </div>
                    </div> -->

            </div>

         </div>

      </div>
      <!--- PRODUCT-->
      <div class="product-container">
         <div class="container">
            <div class="product-box">
               <!--- PRODUCT GRID-->
               <div class="product-main">
                  <h2 class="title">Produk</h2>
                  <div class="product-grid">
                     <?php
                     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
                     $select_products->execute();
                     if ($select_products->rowCount() > 0) {
                        while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
                     ?>
                           <form action="" method="post" class="swiper-slide slide">
                              <div class="showcase">
                                 <div class="showcase-banner">
                                    <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                                    <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">
                                    <p class="showcase-badge">TESTING</p>
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
                                       <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                                       <!-- <del>IDR 75.00</del> -->
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
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>













   </main>





   <!--
    - FOOTER
  -->

   <?php
   include 'components/footer.php';

   ?>






   <!--
    - custom js link
  -->
   <script src="./assets/js/script.js"></script>

   <!--
    - ionicon link
  -->
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>