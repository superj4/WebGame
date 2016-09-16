<?php
function generateTopic(){
		$topic;
        $topic1="Fruit";
        $topic2="Food";
        $topic3="Animal";
        $topic4="Transportation";
        $topic5="Something sweet";
        $topic6="Heart";
        $topic7="Paper";
        $topic8="Plant";
        $num=rand (1, 8 );
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
    echo $thisAmount.",";
    echo $thisTopic;

?>