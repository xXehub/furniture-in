<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:admin_login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_message = $conn->prepare("DELETE FROM `messages` WHERE id = ?");
   $delete_message->execute([$delete_id]);
   header('location:messages.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>pesan</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="../css/admin_style.css?=<?php echo time(); ?>">

</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="contacts">

<h1 class="heading">pesan</h1>

<!-- <div class="box-container">

   <?php
      $select_messages = $conn->prepare("SELECT * FROM `messages`");
      $select_messages->execute();
      if($select_messages->rowCount() > 0){
         while($fetch_message = $select_messages->fetch(PDO::FETCH_ASSOC)){
   ?>
   <div class="box">
   <p> user id : <span><?= $fetch_message['user_id']; ?></span></p>
   <p> name : <span><?= $fetch_message['name']; ?></span></p>
   <p> email : <span><?= $fetch_message['email']; ?></span></p>
   <p> number : <span><?= $fetch_message['number']; ?></span></p>
   <p> message : <span><?= $fetch_message['message']; ?></span></p>
   <a href="messages.php??delete=<?= $fetch_message['id']; ?>" onclick="return confirm('delete this message?');" class="delete-btn">delete</a>
   </div>
   <?php
         }
      }else{
         // echo '<p class="empty">you have no messages</p>';
      }
   ?>

</div> -->

<?php
      $select_messages = $conn->prepare("SELECT * FROM `messages`");
      $select_messages->execute();
      if($select_messages->rowCount() > 0){
         while($fetch_message = $select_messages->fetch(PDO::FETCH_ASSOC)){
   ?>
<table class="table">
        <thead>
           <tr>
            <th>user id</th>
            <th>Nama</th>
            <th>email</th>
            <th>nomor</th>
            <th>pesan</th>
            <th width="150px">aksi</th>
           </tr>
        </thead>
        <tbody>
         <tr>
            <td  data-label="admin_id"><?= $fetch_message['user_id']; ?></td>
            <td  data-label="nama"><?= $fetch_message['name']; ?></td>
            <td class="td1" data-label="email"><?= $fetch_message['email']; ?></td>
            <td  data-label="nomor"><?= $fetch_message['number']; ?></td>
            <td  data-label="pesan"><?= $fetch_message['message']; ?></td>
            <td  data-label="aksi">
     
            <a href="messages.php??delete=<?= $fetch_message['id']; ?>" onclick="return confirm('hapus pesan ini?');" class="delete-btn">hapus</a>
           
         </td>
         </tr>
   
        </tbody>
        <?php
            }
         }else{
            echo '<p class="empty">tidak ada pesan yang masuk!</p>';
         }
      ?>
   </table>
</section>












<script src="../js/admin_script.js"></script>
   
</body>
</html>