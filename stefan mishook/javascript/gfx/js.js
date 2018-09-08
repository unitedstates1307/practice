var notRunning = true; // prevents double run bug Stefan ran into. Determines if it is stop or start

function getRandomColor() {
	var letters = '0123456789ABCDEF'.split(''); //puts all hexadecimal character into an array.
	var color = '#';
	for (var i = 0; i < 6; i++){
		color += letters[Math.floor(Math.random() * 16)]; //random gen for hexadecimal value
	}
	return color;
}

function discoSquare() {
	var canvas = document.getElementById("whiteBoard")
	var context = canvas.getContext("2d"); //says we want to draw in 2d

	var verPos = Math.floor((Math.random() * 399) + 1); // random for position in canvas
	var theColor = getRandomColor();

	context.lineWidth = 10;
	context.strokeStyle = theColor;
	context.moveTo(10,verPos); // (horizontal/vertical positoin)A
	
	context.lineTo(400,verPos);
	context.lineCap = "butt"; //sets ends to flat edges
	context.stroke();

	document.getElementById("displayColor").innerHTML = theColor;



}

var animation; 

document.getElementById("discoStart").onclick = function() {

	if(notRunning) {
		animation = setInterval(discoSquare, 100); // runs discosquare every 1/10 s
		notRunning = false;
	} else {
		alert("running");
	}
}

document.getElementById("discoStop").onclick = function () {
	clearInterval(animation); // stops animation
	notRunning = true;
}
