<?php

@include 'config.php';

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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home</a> / about </p>
</section>

<section class="about">

    <div class="flex">

        <div class="image">
            <img src="images/about-img-1.png" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Choose our boutique for all your floral needs because we're not just a flower shop—we're a floral experience. With a passion for crafting stunning arrangements and an unwavering commitment to quality, we pride ourselves on delivering excellence in every bouquet. Our expert florists meticulously hand-select each bloom, ensuring that only the freshest and most exquisite flowers make it into our arrangements. Whether you're celebrating a special occasion, expressing love and appreciation, or simply adding a touch of beauty to your space, our flowers will enchant and delight. From classic roses to exotic orchids, our diverse selection offers something for every taste and preference. </p>
            <a href="shop.php" class="btn">shop now</a>
        </div>

    </div>

    <div class="flex">

        <div class="content">
            <h3>what we provide?</h3>
            <p>At our flower boutique, we provide more than just flowers—we offer an enchanting array of floral services and products to elevate any occasion. From meticulously crafted bouquets to bespoke arrangements tailored to your unique style, we provide an exquisite selection of fresh blooms sourced from the finest growers. Our offerings extend beyond traditional bouquets to include stunning floral installations, centerpieces, and event décor, perfect for weddings, parties, and corporate events. Additionally, we offer personalized floral gifts, such as flower subscriptions and custom-designed arrangements, ensuring that every gesture is meaningful and memorable. With our commitment to quality, creativity, and exceptional customer service, we strive to exceed your expectations and bring your floral dreams to life in the most beautiful way possible</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>

        <div class="image">
            <img src="images/about-img-2.jpg" alt="">
        </div>

    </div>

    <div class="flex">

        <div class="image">
            <img src="images/about-img-3.jpg" alt="">
        </div>

        <div class="content">
            <h3>who we are?</h3>
            <p>At our flower boutique, we are a passionate team of floral enthusiasts dedicated to bringing beauty and joy into the lives of our customers. With a deep love for nature's creations and a keen eye for design, we are committed to providing exceptional floral experiences that inspire and delight. Our skilled florists blend creativity with craftsmanship to curate stunning arrangements that capture the essence of each bloom and evoke a sense of wonder and admiration. We are more than just a flower shop—we are storytellers, artists, and dreamers, weaving nature's finest treasures into moments of celebration, love, and appreciation. With every arrangement we create, we strive to share our passion for flowers and spread happiness one bloom at a time.






</p>
            <a href="#reviews" class="btn">clients reviews</a>
        </div>

    </div>

</section>

<section class="reviews" id="reviews">

    <h1 class="title">client's reviews</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <p>"Absolutely mesmerizing! The bouquet I ordered for my anniversary was beyond my expectations. Each bloom was fresh, vibrant, and arranged with such precision. It truly added that extra touch of elegance to our special day. Thank you for your impeccable service!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>John</h3>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <p>"I've been a loyal customer for years, and every time I receive a bouquet from this boutique, it's like a breath of fresh air. The attention to detail and the personalized touch make every arrangement feel unique and special. I can always count on them to brighten up my day!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Sarah</h3>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <p>"Exquisite craftsmanship and unparalleled customer service! From helping me select the perfect flowers for my wedding to delivering them right on time, the team at this boutique went beyond to ensure everything was flawless. They were the best of the event, and I was so happy"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Michael</h3>
        </div>

        <div class="box">
            <img src="images/pic-4.png" alt="">
            <p>"I can't express enough how much I appreciate the level of professionalism and dedication shown by this boutique. Their prompt communication, attention to detail, and willingness to accommodate my requests made the entire experience seamless and stress-free. It's clear that they truly care about their customers."</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Jessica</h3>
        </div>

        <div class="box">
            <img src="images/pic-5.png" alt="">
            <p> "From the moment I walked into the boutique, I was greeted with warmth and enthusiasm. The staff took the time to understand my preferences and guided me through their vast selection of flowers. The end result was a breathtaking arrangement that perfectly captured the sentiment I wanted to convey. Thank you for exceeding my expectations!"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Thomas</h3>
        </div>

        <div class="box">
            <img src="images/pic-6.png" alt="">
            <p>"I've never been disappointed with my orders from this flower boutique. Whether it's for a birthday, anniversary, or just to brighten someone's day, their arrangements always leave a lasting impression. The quality of the flowers is exceptional, and their creativity knows no bounds. Highly recommend!and I loved the most beautiful fragrance"</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Tina</h3>
        </div>

    </div>

</section>











<?php @include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>