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
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>


<?php include 'components/user_header.php';
?>


<section class="courses">

   <h1 class="heading">all courses</h1>
 <table id="table">
      
                <h2 class="header"> HTML ,CSS & JAVASCRIPT</h2>
           
        <tr>
            <td colspan="4">
            </td>
        </tr>
        <tr>
            <td>
                <div class="div1">
                    <img src="images/HTML.jpeg" style="width:100px;" />
                    <p>HTML</p>
                    <button class="btn btn1"><a href="cours1.php">Category 1</a></button>
                    <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                <img src="images/css3.jpeg" style="width: 100PX;">
                
                <p>CSS</p>
                <button class="btn btn2"><a href="cours2.php">Category 2</a></button>
                <br /><br />
                </div>
            </td>
            <td>
                <div class="div1">
                <img src="images/js2.jpeg" style="width: 100px;" />
                <p>JavaScript</p>
                <button class="btn btn3"><a href="cours3.php">Category 3</a></button>
                <br /><br />
                </div>
            </td>
        
        </tr>
        <tr>
            <td colspan="4">&nbsp;</td>
        </tr>
      
    </table>
   

</section>

<!-- courses section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>