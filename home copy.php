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





      <!--
      - PRODUCT
    -->

      <div class="product-container">

         <div class="container">


            <!--- SIDEBAR-->
            <div class="sidebar  has-scrollbar" data-mobile-menu>
               <div class="sidebar-category">

                  <div class="sidebar-top">
                     <h2 class="sidebar-title">Category</h2>

                     <button class="sidebar-close-btn" data-mobile-menu-close-btn>
                        <ion-icon name="close-outline"></ion-icon>
                     </button>
                  </div>
                  <!-- bagian chair -->
                  <ul class="sidebar-menu-category-list">
                     <li class="sidebar-menu-category">
                        <button class="sidebar-accordion-menu" data-accordion-btn>
                           <div class="menu-title-flex">
                              <img src="./assets/images/icon_sakkarepmu/armchair.webp" alt="chair" width="20" height="20" class="menu-title-img">
                              <p class="menu-title">Chair</p>
                           </div>
                           <div>
                              <ion-icon name="add-outline" class="add-icon"></ion-icon>
                              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                           </div>
                        </button>
                        <ul class="sidebar-submenu-category-list" data-accordion>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Armchair</p>
                                 <data value="300" class="stock" title="Available Stock">300</data>
                              </a>
                           </li>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Old Chair</p>
                                 <data value="60" class="stock" title="Available Stock">60</data>
                              </a>
                           </li>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Chairul</p>
                                 <data value="50" class="stock" title="Available Stock">50</data>
                              </a>
                           </li>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Ur mom Chair</p>
                                 <data value="87" class="stock" title="Available Stock">87</data>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!-- bagian beds -->
                     <li class="sidebar-menu-category">
                        <button class="sidebar-accordion-menu" data-accordion-btn>
                           <div class="menu-title-flex">
                              <img src="./assets/images/icon_sakkarepmu/beds.webp" alt="beds" class="menu-title-img" width="20" height="20">

                              <p class="menu-title">Beds</p>
                           </div>
                           <div>
                              <ion-icon name="add-outline" class="add-icon"></ion-icon>
                              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                           </div>
                        </button>
                        <ul class="sidebar-submenu-category-list" data-accordion>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Spring Beds</p>
                                 <data value="45" class="stock" title="Available Stock">45</data>
                              </a>
                           </li>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Wood Beds</p>
                                 <data value="75" class="stock" title="Available Stock">75</data>
                              </a>
                           </li>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Kardus Beds</p>
                                 <data value="35" class="stock" title="Available Stock">35</data>
                              </a>
                           </li>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Seng Beds</p>
                                 <data value="26" class="stock" title="Available Stock">26</data>
                              </a>
                           </li>
                        </ul>
                     </li>
                     <!-- bagian -->
                     <li class="sidebar-menu-category">
                        <button class="sidebar-accordion-menu" data-accordion-btn>
                           <div class="menu-title-flex">
                              <img src="./assets/images/icon_sakkarepmu/sofaset.webp" alt="sofaset" class="menu-title-img" width="20" height="20">

                              <p class="menu-title">Sofa</p>
                           </div>
                           <div>
                              <ion-icon name="add-outline" class="add-icon"></ion-icon>
                              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                           </div>
                        </button>
                        <ul class="sidebar-submenu-category-list" data-accordion>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Old Sofa</p>
                                 <data value="46" class="stock" title="Available Stock">46</data>
                              </a>
                           </li>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Grandma Sofa</p>
                                 <data value="73" class="stock" title="Available Stock">73</data>
                              </a>
                           </li>
                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Broken Sofa</p>
                                 <data value="61" class="stock" title="Available Stock">61</data>
                              </a>
                           </li>
                        </ul>
                     </li>

                     <li class="sidebar-menu-category">

                        <button class="sidebar-accordion-menu" data-accordion-btn>

                           <div class="menu-title-flex">
                              <img src="./assets/images/icon_sakkarepmu/desk.webp" alt="desk" class="menu-title-img" width="20" height="20">

                              <p class="menu-title">Desk</p>
                           </div>

                           <div>
                              <ion-icon name="add-outline" class="add-icon"></ion-icon>
                              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                           </div>

                        </button>

                        <ul class="sidebar-submenu-category-list" data-accordion>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Gaming Desk</p>
                                 <data value="12" class="stock" title="Available Stock">12 pcs</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Office Desk</p>
                                 <data value="60" class="stock" title="Available Stock">60 pcs</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Ur Mom Desk</p>
                                 <data value="50" class="stock" title="Available Stock">50 pcs</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Useless Desk</p>
                                 <data value="87" class="stock" title="Available Stock">87 pcs</data>
                              </a>
                           </li>

                        </ul>

                     </li>

                     <li class="sidebar-menu-category">

                        <button class="sidebar-accordion-menu" data-accordion-btn>

                           <div class="menu-title-flex">
                              <img src="./assets/images/icon_sakkarepmu/bookcases.webp" alt="cosmetics" class="menu-title-img" width="20" height="20">

                              <p class="menu-title">Office Bookcases</p>
                           </div>

                           <div>
                              <ion-icon name="add-outline" class="add-icon"></ion-icon>
                              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                           </div>

                        </button>

                        <ul class="sidebar-submenu-category-list" data-accordion>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Broken Bookcases</p>
                                 <data value="68" class="stock" title="Available Stock">68</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Forgotten Bookcase</p>
                                 <data value="46" class="stock" title="Available Stock">46</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Bill Gates Bookcase</p>
                                 <data value="79" class="stock" title="Available Stock">79</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Useless Bookcases</p>
                                 <data value="23" class="stock" title="Available Stock">23</data>
                              </a>
                           </li>

                        </ul>

                     </li>

                     <li class="sidebar-menu-category">

                        <button class="sidebar-accordion-menu" data-accordion-btn>

                           <div class="menu-title-flex">
                              <img src="./assets/images/icon_sakkarepmu/bartables.webp" alt="glasses" class="menu-title-img" width="20" height="20">

                              <p class="menu-title">Bartables</p>
                           </div>

                           <div>
                              <ion-icon name="add-outline" class="add-icon"></ion-icon>
                              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                           </div>

                        </button>

                        <ul class="sidebar-submenu-category-list" data-accordion>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Dirty Bartables</p>
                                 <data value="50" class="stock" title="Available Stock">50</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Chelsea Bartables</p>
                                 <data value="48" class="stock" title="Available Stock">48</data>
                              </a>
                           </li>

                        </ul>

                     </li>

                     <li class="sidebar-menu-category">

                        <button class="sidebar-accordion-menu" data-accordion-btn>

                           <div class="menu-title-flex">
                              <img src="./assets/images/icon_sakkarepmu/cabinets.webp" alt="cabinets" class="menu-title-img" width="20" height="20">

                              <p class="menu-title">Wood File Cabinets</p>
                           </div>

                           <div>
                              <ion-icon name="add-outline" class="add-icon"></ion-icon>
                              <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                           </div>

                        </button>

                        <ul class="sidebar-submenu-category-list" data-accordion>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Cabinets 1</p>
                                 <data value="62" class="stock" title="Available Stock">62</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Cabinets 2</p>
                                 <data value="35" class="stock" title="Available Stock">35</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Cabinets 3</p>
                                 <data value="80" class="stock" title="Available Stock">80</data>
                              </a>
                           </li>

                           <li class="sidebar-submenu-category">
                              <a href="#" class="sidebar-submenu-title">
                                 <p class="product-name">Cabinets 4</p>
                                 <data value="75" class="stock" title="Available Stock">75</data>
                              </a>
                           </li>

                        </ul>

                     </li>

                  </ul>

               </div>

               <div class="product-showcase">

                  <h3 class="showcase-heading">best sellers</h3>

                  <div class="showcase-wrapper">

                     <div class="showcase-container">

                        <div class="showcase">

                           <a href="#" class="showcase-img-box">
                              <img src="./assets/images/produk_sakkarepmu/1.jpg" alt="baby fabric shoes" width="75" height="75" class="showcase-img">
                           </a>

                           <div class="showcase-content">

                              <a href="#">
                                 <h4 class="showcase-title">baby fabric shoes</h4>
                              </a>

                              <div class="showcase-rating">
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                              </div>

                              <div class="price-box">
                                 <del>IDR 5.00</del>
                                 <p class="price">IDR 4.00</p>
                              </div>

                           </div>

                        </div>

                        <div class="showcase">

                           <a href="#" class="showcase-img-box">
                              <img src="./assets/images/produk_sakkarepmu/2.jpg" alt="men's hoodies t-shirt" class="showcase-img" width="75" height="75">
                           </a>

                           <div class="showcase-content">

                              <a href="#">
                                 <h4 class="showcase-title">men's hoodies t-shirt</h4>
                              </a>
                              <div class="showcase-rating">
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star-half-outline"></ion-icon>
                              </div>

                              <div class="price-box">
                                 <del>IDR 17.00</del>
                                 <p class="price">IDR 7.00</p>
                              </div>

                           </div>

                        </div>

                        <div class="showcase">

                           <a href="#" class="showcase-img-box">
                              <img src="./assets/images/produk_sakkarepmu/3.jpg" alt="girls t-shirt" class="showcase-img" width="75" height="75">
                           </a>

                           <div class="showcase-content">

                              <a href="#">
                                 <h4 class="showcase-title">girls t-shirt</h4>
                              </a>
                              <div class="showcase-rating">
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star-half-outline"></ion-icon>
                              </div>

                              <div class="price-box">
                                 <del>IDR 5.00</del>
                                 <p class="price">IDR 3.00</p>
                              </div>

                           </div>

                        </div>

                        <div class="showcase">

                           <a href="#" class="showcase-img-box">
                              <img src="./assets/images/produk_sakkarepmu/4.jpg" alt="woolen hat for men" class="showcase-img" width="75" height="75">
                           </a>

                           <div class="showcase-content">

                              <a href="#">
                                 <h4 class="showcase-title">woolen hat for men</h4>
                              </a>
                              <div class="showcase-rating">
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                              </div>

                              <div class="price-box">
                                 <del>IDR 15.00</del>
                                 <p class="price">IDR 12.00</p>
                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>



            <div class="product-box">

               <!--
            - PRODUCT MINIMAL
          -->

               <div class="product-minimal">

                  <div class="product-showcase">

                     <h2 class="title">New Arrivals</h2>

                     <div class="showcase-wrapper has-scrollbar">

                        <div class="showcase-container">

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/clothes-1.jpg" alt="relaxed short full sleeve t-shirt" width="70" class="showcase-img">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Relaxed Short full Sleeve T-Shirt</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Clothes</a>

                                 <div class="price-box">
                                    <p class="price">IDR 45.00</p>
                                    <del>IDR 12.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/clothes-2.jpg" alt="girls pink embro design top" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Girls pnk Embro design Top</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Clothes</a>

                                 <div class="price-box">
                                    <p class="price">IDR 61.00</p>
                                    <del>IDR 9.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/clothes-3.jpg" alt="black floral wrap midi skirt" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Black Floral Wrap Midi Skirt</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Clothes</a>

                                 <div class="price-box">
                                    <p class="price">IDR 76.00</p>
                                    <del>IDR 25.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/shirt-1.jpg" alt="pure garment dyed cotton shirt" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Pure Garment Dyed Cotton Shirt</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Mens Fashion</a>

                                 <div class="price-box">
                                    <p class="price">IDR 68.00</p>
                                    <del>IDR 31.00</del>
                                 </div>

                              </div>

                           </div>

                        </div>

                        <div class="showcase-container">

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/jacket-5.jpg" alt="men yarn fleece full-zip jacket" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Winter wear</a>

                                 <div class="price-box">
                                    <p class="price">IDR 61.00</p>
                                    <del>IDR 11.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/jacket-1.jpg" alt="mens winter leathers jackets" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Winter wear</a>

                                 <div class="price-box">
                                    <p class="price">IDR 32.00</p>
                                    <del>IDR 20.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/jacket-3.jpg" alt="mens winter leathers jackets" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Mens Winter Leathers Jackets</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Jackets</a>

                                 <div class="price-box">
                                    <p class="price">IDR 50.00</p>
                                    <del>IDR 25.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/shorts-1.jpg" alt="better basics french terry sweatshorts" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Better Basics French Terry Sweatshorts</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Shorts</a>

                                 <div class="price-box">
                                    <p class="price">IDR 20.00</p>
                                    <del>IDR 10.00</del>
                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="product-showcase">

                     <h2 class="title">Trending</h2>

                     <div class="showcase-wrapper  has-scrollbar">

                        <div class="showcase-container">

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/sports-1.jpg" alt="running & trekking shoes - white" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Running & Trekking Shoes - White</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Sports</a>

                                 <div class="price-box">
                                    <p class="price">IDR 49.00</p>
                                    <del>IDR 15.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/sports-2.jpg" alt="trekking & running shoes - black" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Trekking & Running Shoes - black</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Sports</a>

                                 <div class="price-box">
                                    <p class="price">IDR 78.00</p>
                                    <del>IDR 36.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/party-wear-1.jpg" alt="womens party wear shoes" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Womens Party Wear Shoes</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Party wear</a>

                                 <div class="price-box">
                                    <p class="price">IDR 94.00</p>
                                    <del>IDR 42.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/sports-3.jpg" alt="sports claw women's shoes" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Sports Claw Women's Shoes</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Sports</a>

                                 <div class="price-box">
                                    <p class="price">IDR 54.00</p>
                                    <del>IDR 65.00</del>
                                 </div>

                              </div>

                           </div>

                        </div>

                        <div class="showcase-container">

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/sports-6.jpg" alt="air tekking shoes - white" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Air Trekking Shoes - white</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Sports</a>

                                 <div class="price-box">
                                    <p class="price">IDR 52.00</p>
                                    <del>IDR 55.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/shoe-3.jpg" alt="Boot With Suede Detail" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Boot With Suede Detail</h4>
                                 </a>

                                 <a href="#" class="showcase-category">boots</a>

                                 <div class="price-box">
                                    <p class="price">IDR 20.00</p>
                                    <del>IDR 30.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/shoe-1.jpg" alt="men's leather formal wear shoes" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Men's Leather Formal Wear shoes</h4>
                                 </a>

                                 <a href="#" class="showcase-category">formal</a>

                                 <div class="price-box">
                                    <p class="price">IDR 56.00</p>
                                    <del>IDR 78.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/shoe-2.jpg" alt="casual men's brown shoes" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Casual Men's Brown shoes</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Casual</a>

                                 <div class="price-box">
                                    <p class="price">IDR 50.00</p>
                                    <del>IDR 55.00</del>
                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

                  <div class="product-showcase">

                     <h2 class="title">Top Rated</h2>

                     <div class="showcase-wrapper  has-scrollbar">

                        <div class="showcase-container">

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/watch-3.jpg" alt="pocket watch leather pouch" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Pocket Watch Leather Pouch</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Watches</a>

                                 <div class="price-box">
                                    <p class="price">IDR 50.00</p>
                                    <del>IDR 34.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/jewellery-3.jpg" alt="silver deer heart necklace" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Silver Deer Heart Necklace</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Jewellery</a>

                                 <div class="price-box">
                                    <p class="price">IDR 84.00</p>
                                    <del>IDR 30.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/perfume.jpg" alt="titan 100 ml womens perfume" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Titan 100 Ml Womens Perfume</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Perfume</a>

                                 <div class="price-box">
                                    <p class="price">IDR 42.00</p>
                                    <del>IDR 10.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/belt.jpg" alt="men's leather reversible belt" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Men's Leather Reversible Belt</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Belt</a>

                                 <div class="price-box">
                                    <p class="price">IDR 24.00</p>
                                    <del>IDR 10.00</del>
                                 </div>

                              </div>

                           </div>

                        </div>

                        <div class="showcase-container">

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/jewellery-2.jpg" alt="platinum zircon classic ring" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">platinum Zircon Classic Ring</h4>
                                 </a>

                                 <a href="#" class="showcase-category">jewellery</a>

                                 <div class="price-box">
                                    <p class="price">IDR 62.00</p>
                                    <del>IDR 65.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/watch-1.jpg" alt="smart watche vital plus" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Smart watche Vital Plus</h4>
                                 </a>

                                 <a href="#" class="showcase-category">Watches</a>

                                 <div class="price-box">
                                    <p class="price">IDR 56.00</p>
                                    <del>IDR 78.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/shampoo.jpg" alt="shampoo conditioner packs" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">shampoo conditioner packs</h4>
                                 </a>

                                 <a href="#" class="showcase-category">cosmetics</a>

                                 <div class="price-box">
                                    <p class="price">IDR 20.00</p>
                                    <del>IDR 30.00</del>
                                 </div>

                              </div>

                           </div>

                           <div class="showcase">

                              <a href="#" class="showcase-img-box">
                                 <img src="./assets/images/produk_sakkarepmu/jewellery-1.jpg" alt="rose gold peacock earrings" class="showcase-img" width="70">
                              </a>

                              <div class="showcase-content">

                                 <a href="#">
                                    <h4 class="showcase-title">Rose Gold Peacock Earrings</h4>
                                 </a>

                                 <a href="#" class="showcase-category">jewellery</a>

                                 <div class="price-box">
                                    <p class="price">IDR 20.00</p>
                                    <del>IDR 30.00</del>
                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>



               <!--
            - PRODUCT FEATURED
          -->

               <div class="product-featured">

                  <h2 class="title">Deal of the day</h2>

                  <div class="showcase-wrapper has-scrollbar">

                     <div class="showcase-container">

                        <div class="showcase">

                           <div class="showcase-banner">
                              <img src="./assets/images/produk_sakkarepmu/shampoo.jpg" alt="shampoo, conditioner & facewash packs" class="showcase-img">
                           </div>

                           <div class="showcase-content">

                              <div class="showcase-rating">
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star-outline"></ion-icon>
                                 <ion-icon name="star-outline"></ion-icon>
                              </div>

                              <a href="#">
                                 <h3 class="showcase-title">shampoo, conditioner & facewash packs</h3>
                              </a>

                              <p class="showcase-desc">
                                 Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                 dolor dolor sit amet consectetur Lorem ipsum dolor
                              </p>

                              <div class="price-box">
                                 <p class="price">IDR 150.00</p>

                                 <del>IDR 200.00</del>
                              </div>

                              <button class="add-cart-btn">add to cart</button>

                              <div class="showcase-status">
                                 <div class="wrapper">
                                    <p>
                                       already sold: <b>20</b>
                                    </p>

                                    <p>
                                       available: <b>40</b>
                                    </p>
                                 </div>

                                 <div class="showcase-status-bar"></div>
                              </div>

                              <div class="countdown-box">

                                 <p class="countdown-desc">
                                    Hurry Up! Offer ends in:
                                 </p>

                                 <div class="countdown">

                                    <div class="countdown-content">

                                       <p class="display-number">360</p>

                                       <p class="display-text">Days</p>

                                    </div>

                                    <div class="countdown-content">
                                       <p class="display-number">24</p>
                                       <p class="display-text">Hours</p>
                                    </div>

                                    <div class="countdown-content">
                                       <p class="display-number">59</p>
                                       <p class="display-text">Min</p>
                                    </div>

                                    <div class="countdown-content">
                                       <p class="display-number">00</p>
                                       <p class="display-text">Sec</p>
                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                     <div class="showcase-container">

                        <div class="showcase">

                           <div class="showcase-banner">
                              <img src="./assets/images/produk_sakkarepmu/jewellery-1.jpg" alt="Rose Gold diamonds Earring" class="showcase-img">
                           </div>

                           <div class="showcase-content">

                              <div class="showcase-rating">
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star"></ion-icon>
                                 <ion-icon name="star-outline"></ion-icon>
                                 <ion-icon name="star-outline"></ion-icon>
                              </div>

                              <h3 class="showcase-title">
                                 <a href="#" class="showcase-title">Rose Gold diamonds Earring</a>
                              </h3>

                              <p class="showcase-desc">
                                 Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                 dolor dolor sit amet consectetur Lorem ipsum dolor
                              </p>

                              <div class="price-box">
                                 <p class="price">IDR 1990.00</p>
                                 <del>IDR 2000.00</del>
                              </div>

                              <button class="add-cart-btn">add to cart</button>

                              <div class="showcase-status">
                                 <div class="wrapper">
                                    <p> already sold: <b>15</b> </p>

                                    <p> available: <b>40</b> </p>
                                 </div>

                                 <div class="showcase-status-bar"></div>
                              </div>

                              <div class="countdown-box">

                                 <p class="countdown-desc">Hurry Up! Offer ends in:</p>

                                 <div class="countdown">
                                    <div class="countdown-content">
                                       <p class="display-number">360</p>
                                       <p class="display-text">Days</p>
                                    </div>

                                    <div class="countdown-content">
                                       <p class="display-number">24</p>
                                       <p class="display-text">Hours</p>
                                    </div>

                                    <div class="countdown-content">
                                       <p class="display-number">59</p>
                                       <p class="display-text">Min</p>
                                    </div>

                                    <div class="countdown-content">
                                       <p class="display-number">00</p>
                                       <p class="display-text">Sec</p>
                                    </div>
                                 </div>

                              </div>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>



               <!--
            - PRODUCT GRID
          -->

               <div class="product-main">

                  <h2 class="title">New produk_sakkarepmu</h2>

                  <div class="product-grid">

                     <div class="showcase">

                        <div class="showcase-banner">

                           <img src="./assets/images/produk_sakkarepmu/bed_1m.webp" alt="Mens Winter Leathers Jackets" width="300" class="product-img default">
                           <img src="./assets/images/produk_sakkarepmu/bed_1.webp" alt="Mens Winter Leathers Jackets" width="300" class="product-img hover">

                           <p class="showcase-badge">15%</p>

                           <div class="showcase-actions">

                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>

                           </div>

                        </div>

                        <div class="showcase-content">

                           <a href="#" class="showcase-category">jacket</a>

                           <a href="#">
                              <h3 class="showcase-title">Mens Winter Leathers Jackets</h3>
                           </a>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 48.00</p>
                              <del>IDR 75.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/shirt-1.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/shirt-2.jpg" alt="Pure Garment Dyed Cotton Shirt" class="product-img hover" width="300">

                           <p class="showcase-badge angle black">sale</p>

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">shirt</a>

                           <h3>
                              <a href="#" class="showcase-title">Pure Garment Dyed Cotton Shirt</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 45.00</p>
                              <del>IDR 56.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/jacket-5.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/jacket-6.jpg" alt="MEN Yarn Fleece Full-Zip Jacket" class="product-img hover" width="300">

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">Jacket</a>

                           <h3>
                              <a href="#" class="showcase-title">MEN Yarn Fleece Full-Zip Jacket</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 58.00</p>
                              <del>IDR 65.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/clothes-3.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/clothes-4.jpg" alt="Black Floral Wrap Midi Skirt" class="product-img hover" width="300">

                           <p class="showcase-badge angle pink">new</p>

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">skirt</a>

                           <h3>
                              <a href="#" class="showcase-title">Black Floral Wrap Midi Skirt</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 25.00</p>
                              <del>IDR 35.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/shoe-2.jpg" alt="Casual Men's Brown shoes" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/shoe-2_1.jpg" alt="Casual Men's Brown shoes" class="product-img hover" width="300">

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">casual</a>

                           <h3>
                              <a href="#" class="showcase-title">Casual Men's Brown shoes</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 99.00</p>
                              <del>IDR 105.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/watch-3.jpg" alt="Pocket Watch Leather Pouch" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/watch-4.jpg" alt="Pocket Watch Leather Pouch" class="product-img hover" width="300">

                           <p class="showcase-badge angle black">sale</p>

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">watches</a>

                           <h3>
                              <a href="#" class="showcase-title">Pocket Watch Leather Pouch</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 150.00</p>
                              <del>IDR 170.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/watch-1.jpg" alt="Smart watche Vital Plus" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/watch-2.jpg" alt="Smart watche Vital Plus" class="product-img hover" width="300">

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">watches</a>

                           <h3>
                              <a href="#" class="showcase-title">Smart watche Vital Plus</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 100.00</p>
                              <del>IDR 120.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/party-wear-1.jpg" alt="Womens Party Wear Shoes" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/party-wear-2.jpg" alt="Womens Party Wear Shoes" class="product-img hover" width="300">

                           <p class="showcase-badge angle black">sale</p>

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">party wear</a>

                           <h3>
                              <a href="#" class="showcase-title">Womens Party Wear Shoes</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 25.00</p>
                              <del>IDR 30.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/jacket-1.jpg" alt="Mens Winter Leathers Jackets" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/jacket-2.jpg" alt="Mens Winter Leathers Jackets" class="product-img hover" width="300">

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">jacket</a>

                           <h3>
                              <a href="#" class="showcase-title">Mens Winter Leathers Jackets</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 32.00</p>
                              <del>IDR 45.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/sports-2.jpg" alt="Trekking & Running Shoes - black" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/sports-4.jpg" alt="Trekking & Running Shoes - black" class="product-img hover" width="300">

                           <p class="showcase-badge angle black">sale</p>

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">sports</a>

                           <h3>
                              <a href="#" class="showcase-title">Trekking & Running Shoes - black</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 58.00</p>
                              <del>IDR 64.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/shoe-1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/shoe-1_1.jpg" alt="Men's Leather Formal Wear shoes" class="product-img hover" width="300">

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">formal</a>

                           <h3>
                              <a href="#" class="showcase-title">Men's Leather Formal Wear shoes</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 50.00</p>
                              <del>IDR 65.00</del>
                           </div>

                        </div>

                     </div>

                     <div class="showcase">

                        <div class="showcase-banner">
                           <img src="./assets/images/produk_sakkarepmu/shorts-1.jpg" alt="Better Basics French Terry Sweatshorts" class="product-img default" width="300">
                           <img src="./assets/images/produk_sakkarepmu/shorts-2.jpg" alt="Better Basics French Terry Sweatshorts" class="product-img hover" width="300">

                           <p class="showcase-badge angle black">sale</p>

                           <div class="showcase-actions">
                              <button class="btn-action">
                                 <ion-icon name="heart-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="eye-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="repeat-outline"></ion-icon>
                              </button>

                              <button class="btn-action">
                                 <ion-icon name="bag-add-outline"></ion-icon>
                              </button>
                           </div>
                        </div>

                        <div class="showcase-content">
                           <a href="#" class="showcase-category">shorts</a>

                           <h3>
                              <a href="#" class="showcase-title">Better Basics French Terry Sweatshorts</a>
                           </h3>

                           <div class="showcase-rating">
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                              <ion-icon name="star-outline"></ion-icon>
                           </div>

                           <div class="price-box">
                              <p class="price">IDR 78.00</p>
                              <del>IDR 85.00</del>
                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

         </div>

      </div>





      <!--
      - TESTIMONIALS, CTA & SERVICE
    -->

      <div>

         <div class="container">

            <div class="testimonials-box">

               <!--
            - TESTIMONIALS
          -->

               <div class="testimonial">

                  <h2 class="title">testimonial</h2>

                  <div class="testimonial-card">

                     <img src="./assets/images/testimonial-1.jpg" alt="alan doe" class="testimonial-banner" width="80" height="80">

                     <p class="testimonial-name">Alan Doe</p>

                     <p class="testimonial-title">CEO & Founder Invision</p>

                     <img src="./assets/images/icon_sakkarepmu/quotes.svg" alt="quotation" class="quotation-img" width="26">

                     <p class="testimonial-desc">
                        Lorem ipsum dolor sit amet consectetur Lorem ipsum
                        dolor dolor sit amet.
                     </p>

                  </div>

               </div>



               <!--
            - CTA
          -->

               <div class="cta-container">

                  <img src="./assets/images/cta-banner.jpg" alt="summer collection" class="cta-banner">

                  <a href="#" class="cta-content">

                     <p class="discount">25% Discount</p>

                     <h2 class="cta-title">Summer collection</h2>

                     <p class="cta-text">Starting @ IDR 10</p>

                     <button class="cta-btn">Shop now</button>

                  </a>

               </div>



               <!--
            - SERVICE
          -->

               <div class="service">

                  <h2 class="title">Our Services</h2>

                  <div class="service-container">

                     <a href="#" class="service-item">

                        <div class="service-icon">
                           <ion-icon name="boat-outline"></ion-icon>
                        </div>

                        <div class="service-content">

                           <h3 class="service-title">Worldwide Delivery</h3>
                           <p class="service-desc">For Order Over IDR 100</p>

                        </div>

                     </a>

                     <a href="#" class="service-item">

                        <div class="service-icon">
                           <ion-icon name="rocket-outline"></ion-icon>
                        </div>

                        <div class="service-content">

                           <h3 class="service-title">Next Day delivery</h3>
                           <p class="service-desc">UK Orders Only</p>

                        </div>

                     </a>

                     <a href="#" class="service-item">

                        <div class="service-icon">
                           <ion-icon name="call-outline"></ion-icon>
                        </div>

                        <div class="service-content">

                           <h3 class="service-title">Best Online Support</h3>
                           <p class="service-desc">Hours: 8AM - 11PM</p>

                        </div>

                     </a>

                     <a href="#" class="service-item">

                        <div class="service-icon">
                           <ion-icon name="arrow-undo-outline"></ion-icon>
                        </div>

                        <div class="service-content">

                           <h3 class="service-title">Return Policy</h3>
                           <p class="service-desc">Easy & Free Return</p>

                        </div>

                     </a>

                     <a href="#" class="service-item">

                        <div class="service-icon">
                           <ion-icon name="ticket-outline"></ion-icon>
                        </div>

                        <div class="service-content">

                           <h3 class="service-title">30% money back</h3>
                           <p class="service-desc">For Order Over IDR 100</p>

                        </div>

                     </a>

                  </div>

               </div>

            </div>

         </div>

      </div>





      <!--
      - BLOG
    -->

      <div class="blog">

         <div class="container">

            <div class="blog-container has-scrollbar">

               <div class="blog-card">

                  <a href="#">
                     <img src="./assets/images/blog-1.jpg" alt="Clothes Retail KPIs 2021 Guide for Clothes Executives" width="300" class="blog-banner">
                  </a>

                  <div class="blog-content">

                     <a href="#" class="blog-category">Fashion</a>

                     <a href="#">
                        <h3 class="blog-title">Clothes Retail KPIs 2021 Guide for Clothes Executives.</h3>
                     </a>

                     <p class="blog-meta">
                        By <cite>Mr Admin</cite> / <time datetime="2022-04-06">Apr 06, 2022</time>
                     </p>

                  </div>

               </div>

               <div class="blog-card">

                  <a href="#">
                     <img src="./assets/images/blog-2.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
                  </a>

                  <div class="blog-content">

                     <a href="#" class="blog-category">Clothes</a>

                     <h3>
                        <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                     </h3>

                     <p class="blog-meta">
                        By <cite>Mr Robin</cite> / <time datetime="2022-01-18">Jan 18, 2022</time>
                     </p>

                  </div>

               </div>

               <div class="blog-card">

                  <a href="#">
                     <img src="./assets/images/blog-3.jpg" alt="EBT vendors: Claim Your Share of SNAP Online Revenue." class="blog-banner" width="300">
                  </a>

                  <div class="blog-content">

                     <a href="#" class="blog-category">Shoes</a>

                     <h3>
                        <a href="#" class="blog-title">EBT vendors: Claim Your Share of SNAP Online Revenue.</a>
                     </h3>

                     <p class="blog-meta">
                        By <cite>Mr Selsa</cite> / <time datetime="2022-02-10">Feb 10, 2022</time>
                     </p>

                  </div>

               </div>

               <div class="blog-card">

                  <a href="#">
                     <img src="./assets/images/blog-4.jpg" alt="Curbside fashion Trends: How to Win the Pickup Battle." class="blog-banner" width="300">
                  </a>

                  <div class="blog-content">

                     <a href="#" class="blog-category">Electronics</a>

                     <h3>
                        <a href="#" class="blog-title">Curbside fashion Trends: How to Win the Pickup Battle.</a>
                     </h3>

                     <p class="blog-meta">
                        By <cite>Mr Pawar</cite> / <time datetime="2022-03-15">Mar 15, 2022</time>
                     </p>

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
   include 'includes/footer.php';

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