
<!DOCTYPE html>
<html>
<head>
  <title>Game Page2</title>
    <link rel="stylesheet" href="gameStyle2.css">
    <script src="jq/jquery-2.2.1.js"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <?php
    function generateTopic(){
        $topic;
        $topic1="Fruit";
        $topic2="Food";
        $topic3="Animal";
        $topic4="Transportation";
        $topic5="Something Sweet";
        $topic6="Heart";
        $topic7="Paper";
        $topic8="Plant";
        $num=rand (1, 8);
        if($num == 1){
            $topic = $topic1;
        }
        elseif($num == 2){
            $topic = $topic2;
        }
        elseif($num ==3){
            $topic = $topic3;
        }
        elseif($num ==4){
            $topic = $topic4;
        }
        elseif($num ==5){
            $topic = $topic5;
        }
        elseif($num ==6){
            $topic = $topic6;
        }
        elseif($num ==7){
            $topic = $topic7;
        }
        else{
            $topic = $topic8;
        }
        return $topic;
    }
    function generateNumber(){
        $amount=rand (1, 3);
        return $amount;
    }
    $thisAmount = generateNumber();
    $thisTopic = generateTopic();
    ?>
    <div id="banner">
      <h1>  Find Me</h1>
      <img id="giraffe" src="img/giraffe.png" alt="giraffe"/>

    </div>

    <div id="info">
        <p id="test" name= "<?echo$thisTopic?>">Pick <?echo $thisAmount." ".$thisTopic?> </p>
        <p id="number" name= "<?echo $thisAmount?>" hidden> </p>
        <img id="popup" src=" " height=50px >
        <form name="form1">
            <!-- Start Game:<input type="button" name="start" value="Start" onclick="gameStart()"> -->
            Timer: <input type="text" name="timer" >
            Score: <input type="text" name="score" >
        </form>
    </div>

    <div class="main">

        <div class="con">
            <img id = "1" name = "1" src="data/bg1.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "2" name = "2" src="data/bg2.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "3" name = "3" src="data/bg3.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "4" name = "4" src="data/bg4.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "5" name = "5" src="data/bg5.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "6" name = "6" src="data/bg6.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "7" name = "7" src="data/bg7.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "8" name = "8" src="data/bg8.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "9" name = "9" src="data/bg9.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "10" name = "10" src="data/bg10.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "11" name = "11" src="data/bg11.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "12" name = "12" src="data/bg12.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <br></br>
            <img id = "13" name = "65" src="data/bg65.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "14" name = "14" src="data/bg14.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "15" name = "15" src="data/bg15.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "16" name = "16" src="data/bg16.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "17" name = "17" src="data/bg17.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "18" name = "18" src="data/bg18.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "19" name = "19" src="data/bg19.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "20" name = "20" src="data/bg20.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "21" name = "21" src="data/bg21.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "22" name = "22" src="data/bg22.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "23" name = "63" src="data/bg63.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "24" name = "74" src="data/bg74.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <br></br>
            <img id = "25" name = "78" src="data/bg78.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "26" name = "73" src="data/bg73.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "27" name = "27" src="data/bg27.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "28" name = "77" src="data/bg77.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "29" name = "29" src="data/bg29.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "30" name = "50" src="data/bg50.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "31" name = "31" src="data/bg31.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "32" name = "79" src="data/bg79.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "33" name = "33" src="data/bg33.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "34" name = "76" src="data/bg76.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "35" name = "35" src="data/bg35.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "36" name = "36" src="data/bg36.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <br></br>
            <img id = "37" name = "37" src="data/bg37.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "38" name = "38" src="data/bg38.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "39" name = "39" src="data/bg39.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "40" name = "40" src="data/bg40.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "41" name = "41" src="data/bg41.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "42" name = "42" src="data/bg42.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "43" name = "75" src="data/bg75.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "44" name = "81" src="data/bg81.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "45" name = "45" src="data/bg45.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "46" name = "46" src="data/bg46.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "47" name = "47" src="data/bg47.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "48" name = "48" src="data/bg48.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <br></br>
            <img id = "49" name = "49" src="data/bg49.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "50" name = "30" src="data/bg30.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "51" name = "51" src="data/bg51.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "52" name = "52" src="data/bg52.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "53" name = "53" src="data/bg53.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "54" name = "54"  src="data/bg54.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "55" name = "55" src="data/bg55.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "56" name = "56" src="data/bg56.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "57" name = "57" src="data/bg57.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "58" name = "58" src="data/bg58.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "59" name = "59" src="data/bg59.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "60" name = "60" src="data/bg60.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <br></br>
            <img id = "61" name = "2" src="data/bg2.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "62" name = "7" src="data/bg7.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "63" name = "3" src="data/bg3.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "64" name = "5" src="data/bg5.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "65" name = "15" src="data/bg15.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "66" name = "46" src="data/bg46.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "67" name = "7" src="data/bg7.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "68" name = "28" src="data/bg28.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "69" name = "82" src="data/bg82.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "70" name = "10" src="data/bg10.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "71" name = "11" src="data/bg11.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "72" name = "14" src="data/bg14.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <br></br>
            <img id = "73" name = "7" src="data/bg7.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "74" name = "64" src="data/bg64.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "75" name = "39" src="data/bg39.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "76" name = "40" src="data/bg40.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "77" name = "41" src="data/bg41.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "78" name = "22" src="data/bg22.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "79" name = "10" src="data/bg10.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "80" name = "71" src="data/bg71.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "81" name = "45" src="data/bg45.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "82" name = "46" src="data/bg46.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "83" name = "51" src="data/bg51.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "84" name = "48" src="data/bg48.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <br></br>
            <img id = "85" name = "78" src="data/bg78.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "86" name = "73" src="data/bg73.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "87" name = "31" src="data/bg31.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "88" name = "77" src="data/bg77.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "89" name = "51" src="data/bg51.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "90" name = "50" src="data/bg50.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "91" name = "41" src="data/bg41.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "92" name = "79" src="data/bg79.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "93" name = "1" src="data/bg1.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "94" name = "16" src="data/bg16.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "95" name = "35" src="data/bg35.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <img id = "96" name = "57" src="data/bg57.png" width=50px height=50px onclick="checkTopic(this.name, this.id)">
            <br></br>
        </div>
    </div>
    <audio id="win" hidden>
        <source src="smb_coin.wav" type="audio/ogg">
    </audio>
    <audio id="lose" hidden>
        <source src="smb_bowserfalls.wav" type="audio/ogg">
    </audio>
</body>
</html>
