<?php include 'components/connect.php';
if (isset($_COOKIE['user_id'])) {
    $user_id = $_COOKIE['user_id'];
} else {
    $user_id = '';
}
?>
<?php
if (isset($message)) {
    foreach ($message as $message) {
        echo '
      <div class="message">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
    }
}
?>


<!-- header section ends -->

<!-- side bar section starts  -->

<div class="side-bar">

   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">

      </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>about us</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>courses</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>contact us</span></a>
   </nav>

</div>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours YouTube</title>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include 'components/user_header.php';
?>
    <header>
        <h1 class="html">Cours  :</h1><br>
    </header>
<p class="para3">Apprendre CSS de zéro</p>
    <main>
        <div class="video-container">

          <iframe width="360" height="215" src="https://www.youtube.com/embed/iSWjmVcfQGg?si=38GZ7jhgmdBZESvJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>

        <div class="video-container">
         <p class="para3">HTML Tutorial for Beginners</p>
            <iframe width="360" height="215" src="https://www.youtube.com/embed/FQdaUv95mR8?si=HoXrZLbm4hbeSOWN" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

        </div>
        <div>
        <p class="para3">Return to categorys:</p><br>
        <a href="courses.php" class="myButton">ALL COURSES</a>
        </div>
    </main>
<?php include 'components/footer.php';?>


<script src="js/script.js"></script>

</body>
</html>

