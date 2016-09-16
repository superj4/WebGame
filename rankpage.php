<!DOCTYPE html>
<html>
<head>
  <title>Find Me</title>
<link rel="stylesheet" href="css.css">
</head>
<body>

<?php
  $servername = "localhost";
  $username = "nma";
  $password = "Webprograming1";
  $dbname = "nmarank";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
  } 

  $sql = "SELECT Name, Score FROM rank Order By Score DESC LIMIT 5";
  $result = $conn->query($sql);

  ?>
    <div id="banner">
      <h1>Find Me</h1>
      <img id="giraffe" src="img/giraffe.png" alt="giraffe"/>
        
    </div>

    <div id="main">
      <img id="mainsky" src="img/mainsky.png" alt="mainsky">
      <p id="ranktitle"></p>
      <table id = "ranktable">
      <?php
        $numrow = $result->num_rows;
        if ($result->num_rows > 0) {
          echo "<tr><th>Rank</th><th>Name</th><th>Score</th></tr>";
          $count=1;
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $count . "</td><td>" . $row["Name"]. "</td><td>" . $row["Score"]. "</td></tr>";
            $count = $count+1;
          }
        } else {
          echo "0 results";
        }
        $conn->close();
      ?>
      </table> 
      <a href="index.html"><p id="rank">Back to Game</p></a>
      <img id="rocket" src="img/rocket.png">
    </div>
</body>
</html>
