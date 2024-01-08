<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
       <style>
        body {
            background-image: url('<?php echo 'images/back.webp'; ?>');
            background-size: cover;
            background-position: 50% 50%;
            /* Autres styles */
        }
    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body class="home">
   <main>
<?php include 'components/user_header.php'; ?>


<section class="quick-select">

   

   <div class="box-container">

      <?php
         if($user_id != ''){
      ?>
  
      <?php
         }else{ 
         }
      ?>
      <p class="para">Welcome to our site e-learning ,create your account :</p>
      
      <div class="box" style="text-align: center;">
         <h3 class="title">please login or register</h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
      </div>
      
   </div>

</section>


</main>
<footer class="footer2">

   &copy; copyright @ <?= date('Y'); ?> by <span>mr. web designer</span> | all rights reserved!

</footer>
<script src="js/script.js"></script>
   
</body>
</html>