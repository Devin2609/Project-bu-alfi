<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">Home</a> / About </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/smekun.jpg" alt="">
      </div>

      <div class="content">
         <h3>About Us</h3>
         <p>Welcome to our school library at SMK Negeri 1 Sampit! We are a vibrant hub of knowledge, creativity, and exploration. With an extensive collection of books, digital resources, and a passionate team of librarians, we provide an enriching environment for students to expand their horizons. From classic literature to modern bestsellers, our library offers something for every interest. Join us in discovering new worlds, engaging in literary activities, and fostering a lifelong love for learning. Step into our library and embark on a journey of imagination and discovery.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>