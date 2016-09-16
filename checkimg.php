<?php
        $q = intval($_GET['q']);
        $topic = strval($_GET['topic']);
        $servername = "localhost";
        $username = "nma";
        $password = "Webprograming1";
        $dbname = "nmarank";
      // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT id, path, type1, type2, type3, type4 FROM img WHERE id = '".$q."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) 
            {
                if($row['type1'] === $topic || $row['type2'] === $topic || $row['type3']===$topic ||$row['type4']===$topic)
                {
                    echo 'true';
                }
                else
                {
                    echo 'false';
                }
            }
        }
        mysqli_close($conn);
       # echo 'something'
    ?>