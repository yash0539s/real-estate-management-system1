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
   <title>About Us</title>

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
         <p><small>Choose us for your real estate needs and experience expert guidance tailored to you, transparent communication throughout, personalized service that prioritizes your goals, and access to comprehensive resources for a streamlined and successful journey.</small></p>
         <a href="contact.html" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search property</h3>
         <p><small>Explore an extensive database of properties tailored to your preferences. With our intuitive search tools, finding the perfect home or space is effortless. Browse through listings, filter by location, price, and amenities, and discover properties that match your unique criteria.</small></p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact agents</h3>
         <p><small>Connect with our knowledgeable and dedicated agents who are committed to helping you every step of the way. Whether you have questions about a property, need guidance on the buying or selling process, or want to schedule a viewing, our agents are just a call or click away. .</small></p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy property</h3>
         <p><small>Experience the joy of finding your dream property and making it your own. From the excitement of moving into a new home to the satisfaction of investing in a lucrative property, enjoy every moment of your real estate journey. Whether you're settling into your new space or exploring the potential of your investment, we're here to ensure that your property experience is fulfilling and rewarding.</small></p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- review section starts  -->

<section class="reviews">

   <h1 class="heading">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.png" alt="">
            <div>
               <h3>alex deo</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</small></p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.png"  alt="">
            <div>
               <h3>manisha lohar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</small></p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.png" alt="">
            <div>
               <h3>devraj yadav</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</small></p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.png" alt="">
            <div>
               <h3>nishu choudhary</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</small></p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.png" alt="">
            <div>
               <h3>himesh panday</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</small></p>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-6.png" alt="">
            <div>
               <h3>shizu</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
         <p><small>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci voluptates delectus distinctio quam sequi error eum suscipit tempore inventore ex!</small></p>
      </div>

   </div>

</section>

<!-- review section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>