
<!DOCTYPE html>
<html>
<head>
  <title>Find Me</title>
<link rel="stylesheet" href="css.css">
<script>
window.onload = function() {
var audio = document.getElementById("die");
audio.play();
}
</script>
</head>


<body>
    <?php
    $score = $_POST['sc'];
    ?>
    <div id="banner">
      <h1>Find Me</h1>
      <img id="giraffe" src="img/giraffe.png" alt="giraffe"/>
    </div>

    <div id="main">
      <img id="mainsky" src="img/mainsky.png" alt="mainsky">
      <p id = "showScore">Your score is <?php echo $score; ?>.</p>
      <p id="over">GAME OVER<p/>
      <p id ="enter">Please enter your name here:</p>
      <form action = "playerrank.php" method = "post">
        <input type="text" id = "namebox" name = "Name">
        <input type="hidden" name="score" value="<?php echo $score;?>">
        <input type = "submit" id = "seerankbutton" value="SEE MY RANK">
      </form>
    </div>
    <audio id="die" hidden>
        <source src="smb_mariodie.wav" type="audio/ogg">
    </audio>
</body>
</html>
