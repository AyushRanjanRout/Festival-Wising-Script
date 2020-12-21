<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <!-- <meta charset="UTF-8"> -->
    <title></title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
  </head>
  <body>

    <div class="container">
      <h1  class="tpname pad duration animated infinite tada">
        <?php
          if(isset($_GET['n'])){
            echo $_GET['n'];
          }else{
            echo 'Wrauter';
          }
        ?>
        <!-- &#x261F; -->
      </h2>
      <p class="showTime">
        wishing you a very
        <br>
        <img src="img/new-year.png" class="duration animated infinite swing">
        <h2  class="duration name animated infinite swing"> 2021 </h2>

         
      </p>
      
      
      <p class="bottom-name">
       " इस रिश्ते को ऐसे ही बनाये , <br>
दिल में अपनी यादों के चिराग जलाये रखना,<br>
बहुत प्यारा सफर रहा 2020 में आपके साथ, <br>
बस ऐसा ही 2021 में भी बनाये रखना हमारा साथ "<br>
-: नए साल की शुभकामनाएं :-<br>----------------------------------------------------------------------------------------
      <p>

        <audio controls autoplay="">
  
  <source src="song.mp3" type="audio/mpeg">
 
</audio> 

         <img src="img/dev.png" style="width: 300px; height: 150px;">


    </div>
    <form class="" action="profile.php" method="GET">
      <input type="text" name='n' placeholder="अपना नाम लिखे" class="duration animated infinite shake">
      <input type="submit" value="देखे" class="duration animated infinite shake">
    </form>
    <script src="js/main.js"></script>

    <script>
      function myFunction() {
  var x = document.getElementById("myAudio").autoplay;
  document.getElementById("demo").innerHTML = x;
}
    </script>
  </body>
</html>


