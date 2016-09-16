window.onload = function(){
    gameStart();
}
var point=0;
var cnt=0;
var countDown=15;
var playing=false;
var timeId=null;
var interId=null;

function gameover(){
	timeStop();
	playing=false;
	countDown=15;
    post('gaveover.php', {sc: point});
}

function gameStart(){
	playing=true;
	timeShow();
}

function timeShow(){
	document.form1.timer.value=countDown;
	if(countDown<=0){
		gameover();
		return;
	}else{
		countDown=countDown-1;
		timeId=setTimeout("timeShow()",1000);
	}
}

function timeStop(){
	clearInterval(interId);
	clearTimeout(timeId);
}

function getMark(posid){
	target=document.getElementById("number").attributes["name"].value;
	document.getElementById("popup").src="data/mark.png";
	setTimeout(	function (){document.getElementById("popup").src="data/white.png";},1000)
	cnt=cnt+1;
	point=point+10;
	countDown=countDown+3;
	document.form1.score.value=point;
	replaceIMG(posid);
    var music = document.getElementById("win");
    music.play();
	if(cnt==target){
		generateNewTopic();
	}
}

function replaceIMG(posid){
    var imgid = Math.floor((Math.random() * 83) + 1);
    var imgscr = "data/bg"+imgid+".png";
    document.getElementById(posid).src=imgscr;
    document.getElementById(posid).attributes["name"].value = imgid;
    
} 

function lose(){
	document.getElementById("popup").src="data/lose.png";
	setTimeout(	function (){document.getElementById("popup").src="data/white.png";},1000)
	countDown=countDown-2;
    var music = document.getElementById("lose");
    music.play();
}

function checkTopic(imgid,posid) { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            var xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            	if(xmlhttp.responseText == "true"){
            		getMark(posid);
            	}
                if(xmlhttp.responseText == "false"){
                	lose();
                }
            }
        };
        topic = document.getElementById('test').getAttribute('name').toLowerCase();
        xmlhttp.open("GET","checkimg.php?q="+imgid+"&topic="+topic,true);
        xmlhttp.send();
}

function generateNewTopic(){
	if (window.XMLHttpRequest){
            // code for IE7+, Firefox, Chrome, Opera, Safari
            var xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            	var n = xmlhttp.responseText.split(",")[0];
            	var topi = xmlhttp.responseText.split(",")[1];
            	document.getElementById('test').attributes["name"].value = topi;
            	document.getElementById("number").attributes["name"].value = n;
            	document.getElementById("test").innerHTML = "Pick "+ n + " " + topi;
            	cnt=0;
            }
        };
        xmlhttp.open("GET","generateTopic.php",true);
        xmlhttp.send();
	}

function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);

            form.appendChild(hiddenField);
         }
    }

    document.body.appendChild(form);
    form.submit();
}

