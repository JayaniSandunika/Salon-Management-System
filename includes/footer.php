<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot Integration</title>
    <!-- Add any additional CSS styling here -->
    <style>
        /* Style for the chatbot icon */
        .chatbot-icon {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #2563eb;
            background-image: url('https://cdn.dribbble.com/users/6985884/screenshots/15849023/media/6dfb9f3caf75d8b6acc1f9bde6b885fa.gif'); /* Replace with your GIF URL */
            background-size: cover;
            background-position: center;
            cursor: pointer;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
        }
    </style>
</head>
<body>
    <!-- Chatbot icon -->
    <div class="chatbot-icon" id="chatbot-icon"></div>

    <!-- Botpress WebChat script -->
    <script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
    <script>
        window.botpressWebChat.init({
            "composerPlaceholder": "Chat with MR.BOT",
            "botConversationDescription": "Welcome to MR.BOT",
            "botId": "c100124e-7605-4f1a-84d4-5992baad8763",
            "hostUrl": "https://cdn.botpress.cloud/webchat/v1",
            "messagingUrl": "https://messaging.botpress.cloud",
            "clientId": "c100124e-7605-4f1a-84d4-5992baad8763",
            "webhookId": "6798c416-7e93-42cc-8b95-4e497cc1f9c2",
            "lazySocket": true,
            "themeName": "prism",
            "botName": "MR.BOT",
            "avatarUrl": "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJcAIjmkD5zwZsms-NCipg0mAoMcL1avjmiw&s",
            "stylesheet": "https://webchat-styler-css.botpress.app/prod/12e4d301-d37d-423b-a9ee-10a777972f0e/v80562/style.css",
            "frontendVersion": "v1",
            "useSessionStorage": true,
            "showBotInfoPage": true,
            "enableConversationDeletion": true,
            "showPoweredBy": true,
            "theme": "prism",
            "themeColor": "#2563eb",
            "allowedOrigins": []
        });

        // Show the chatbot when the icon is clicked
        document.getElementById('chatbot-icon').addEventListener('click', function () {
            window.botpressWebChat.sendEvent({ type: 'show' });
        });
    </script>
</body>
</html>





<section class="w3l-footer-29-main" style="background: #000000;" >
    <div class="footer-29 py-5">
      <div class="container py-lg-4">
        <div class="row footer-top-29">
          <div class="col-lg-4 col-md-6 col-sm-8 footer-list-29 footer-1">
            <h6 class="footer-title-29">Contact Us</h6>
            <ul>
              <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
              <li>
                <span class="fa fa-map-marker"></span> <p><?php  echo $row['PageDescription'];?>.</p>
              </li>
              <li><span class="fa fa-phone"></span><a href="tel:+7-800-999-800"> +<?php  echo $row['MobileNumber'];?></a></li>
              <li><span class="fa fa-envelope-open-o"></span><a href="mailto:parlour@mail.com" class="mail">
                  <?php  echo $row['Email'];?></a></li><?php } ?>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-4 footer-list-29 footer-2 ">
  
            <ul>
              <h6 class="footer-title-29">Useful Links</h6>
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="services.php"> Services</a></li>
              <li><a href="contact.php">Contact us</a></li>
            </ul>
          </div>
         
          <div class="col-lg-4 col-md-6 col-sm-7 footer-list-29 footer-4">
            <!-- news
            <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <h6 class="footer-title-29"><?php  echo $row['PageTitle'];?> </h6>
            <p><?php  echo $row['PageDescription'];?></p><?php } ?>
  
            
          </div>
          -->
          
                            

        </div>
      </div>
    </div>
  </section>
  <section class="w3l-footer-29-main w3l-copyright">
    <div class="container">
      <div class="row bottom-copies">
        <p class="col-lg-8 copy-footer-29">© 2024  Beauty Parlour Management System </p>
  
        <div class="col-lg-4 main-social-footer-29">
          <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
          <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
          <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
          <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
        </div>
  
      </div>
    </div>
  </section>

  