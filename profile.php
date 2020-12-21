<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <title>Wish You Happy New Year 2021</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <meta property="og:title" description="Happy New Year">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/anim.css">
    <script src="js/jquery.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2  class="duration name animated infinite tada">
        <?php
          if(isset($_GET['n'])){
            echo $_GET['n'];
          }else{
            echo 'Your Name';
          }
        ?>
      </h2>
       <p class="showTime">
        wishing you a very
        <br>
        <img src="img/new-year.png" class="duration animated infinite swing">
        <h2  class="duration name animated infinite swing"> 2021 </h2>
      
      
      <p class="bottom-name">
       " इस रिश्ते को ऐसे ही बनाये , <br>
दिल में अपनी यादों के चिराग जलाये रखना,<br>
बहुत प्यारा सफर रहा 2020 में आपके साथ, <br>
बस ऐसा ही 2021 में भी बनाये रखना हमारा साथ "<br>
-: नए साल की शुभकामनाएं :-<br>----------------------------------------------------------------------------------------
      <p>
        <img src="img/dev.png" style="width: 400px; height: 250px;">
<audio controls autoplay>
  <source src="song.mp3" type="audio/mpeg">
  
</audio>
    </div>
  
   <a class="share" href="whatsapp://send?text=आपके और आपके परिवार के लिए <?php echo $_GET['n'];?> ने कुछ संदेसा भेजा है जानने के लिए ब्लू लाइन पे क्लिक करे..  &#x261F;  &#x261F; http://www.ayushranjanrout.tech/2021?n=<?php echo $_GET['n'];?>" data-action="share/whatsapp/share">Share via Whatsapp <img src="img/icon.png"></a>

    <script src="js/main.js"></script>
  </body>
</html>
