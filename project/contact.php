<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `messages`(id, name, email, number, message) VALUES(?,?,?,?,?)");
      $send_message->execute([$msg_id, $name, $email, $number, $message]);
      $success_msg[] = 'message send successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>
      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->

<!-- faq section starts  -->

<section class="faq" id="faq">

   <h1 class="heading">FAQ</h1>

   <div class="box-container">

      <div class="box active">
         <h3><span>how to cancel booking?</span><i class="fas fa-angle-down"></i></h3>
         <p><small>To cancel a booking, you typically need to refer to the terms and conditions outlined in your booking agreement. Look for clauses related to cancellations, including any penalties or fees associated with cancellation. Contact the booking agent or property owner as soon as possible to inform them of your decision to cancel and follow any specific cancellation procedures they may have in place.</small></p>
      </div>

      <div class="box active">
         <h3><span>when will I get the possession?</span><i class="fas fa-angle-down"></i></h3>
         <p><small>The timeline for receiving possession of a property can vary depending on various factors, including the terms of your purchase agreement, the completion of any necessary legal processes, and any outstanding payments or documentation required. Consult with your real estate agent or property developer to obtain a clear timeline for possession and ensure that all necessary steps are taken to facilitate a smooth transition.</small></p>
      </div>

      <div class="box">
         <h3><span>where can I pay the rent?</span><i class="fas fa-angle-down"></i></h3>
         <p><small>Rent payments are typically made according to the terms outlined in your rental agreement. This could involve paying rent directly to the landlord or property management company through various methods such as bank transfer, check, or online payment platforms. Refer to your rental agreement or contact your landlord or property manager for specific instructions on where and how to pay your rent.</small></p>
      </div>

      <div class="box">
         <h3><span>how to contact with the buyers?</span><i class="fas fa-angle-down"></i></h3>
         <p><small>If you're looking to contact potential buyers for your property, consider reaching out through multiple channels, including online listing platforms, social media, and real estate agents. You can also host open houses or schedule private viewings to showcase your property to interested buyers. Make sure to provide clear and accurate contact information in your listings to facilitate communication with potential buyers.</small></p>
      </div>

      <div class="box">
         <h3><span>why my listing not showing up?</span><i class="fas fa-angle-down"></i></h3>
         <p><small>There could be several reasons why your listing may not be showing up, including incomplete or inaccurate information, low visibility on the listing platform, or technical issues with the website or app. Review your listing to ensure that all required fields are filled out correctly and that your listing meets the platform's guidelines and criteria. If you continue to experience issues, reach out to the customer support team for assistance.</small></p>
      </div>

      <div class="box">
         <h3><span>how to promote my listing?</span><i class="fas fa-angle-down"></i></h3>
         <p><small>To promote your listing effectively, consider leveraging various marketing channels and strategies. This could include creating eye-catching listings with high-quality photos and detailed descriptions, sharing your listing on social media platforms, networking with real estate agents and industry professionals, hosting open houses or virtual tours, and utilizing online advertising platforms. By casting a wide net and targeting potential buyers through multiple channels, you can increase the visibility and exposure of your listing and attract more interested buyers.</small></p>
      </div>

   </div>

</section>

<!-- faq section ends -->










<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/message.php'; ?>

</body>
</html>