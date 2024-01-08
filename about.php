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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We are an online learning platform dedicated to providing you with the tools you need to develop your skills, explore new areas and enrich your knowledge.</p>
         <a href="courses.html" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>"Les cours sont incroyablement bien structurés ! J'ai commencé sans aucune expérience en programmation, et maintenant je comprends beaucoup mieux les concepts fondamentaux  ."</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>SOUAM Ikrame</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Les ressources fournies sont pertinentes . J'apprécie la diversité des cours sur le marketing digital, et les études de cas m'ont vraiment aidé à appliquer les stratégies apprises dans des situations réelles."</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>BOUJNANE Nouhaila</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Je suis ravie de la variété de langues disponibles. Les leçons sont interactives et stimulantes. Je me sens vraiment immergée dans chaque culture à travers les cours de langue et les exercices de conversation."</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>BARIK Lamiae</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Les vidéos explicatives sont excellentes, surtout pour des sujets complexes en physique . Les démonstrations visuelles sont un atout majeur pour la compréhension des concepts difficiles."</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>ROKHSI Imane</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p> "Les cours d'art sont super inspirants ! J'aime particulièrement les tutoriels de dessin et de peinture. Ils m'ont aidé à développer mon style artistique et à explorer de nouvelles techniques."</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>ZERKTOUNI Khadija</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"J'apprécie énormément la flexibilité des horaires pour suivre les cours. Étant en reconversion professionnelle, cette plateforme me permet de gérer mon emploi du temps et d'apprendre à mon rythme."</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>EZZINE Hiba</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>