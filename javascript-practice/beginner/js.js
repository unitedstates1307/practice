var numOne = document.getElementById("num-one");
var numTwo = document.getElementById("num-two");
var addSum = document.getElementById("add-sum");

numOne.addEventListener("input", add);
numTwo.addEventListener("input", add);

function add(){
	var sum = (parseFloat(numOne.value) || 0) + (parseFloat(numTwo.value) || 0); 
	addSum.innerHTML = sum;
}

//
//
//
//

var clickOne = document.getElementById("click-one");
var clickTwo = document.getElementById("click-two");
var clickThree = document.getElementById("click-three");

clickOne.addEventListener("click", clickA);
clickTwo.addEventListener("click", clickA);
clickThree.addEventListener("click", clickA);

function clickA() {
	var pClick = [document.getElementById("p-one"), document.getElementById("p-two"), document.getElementById("p-three")];

	for(var i = 0; i < pClick.length; i++) {
		pClick[i].className = "hide";
	}

	var clickID = this.attributes["data-img"].value; // Data img works without an img tag.
	var click = document.getElementById(clickID);
	if(click.className === "hide") {
		click.className = "";
	}
	else {
		click.className = "hide";
	}
}

var listClick = [document.getElementById('li-one'), document.getElementById('li-two'), document.getElementById('li-three')];
	
var checkList = document.getElementById("checkList");

var items = checkList.querySelectorAll("li");

var input = checkList.querySelectorAll("input");

for( var i = 0; i < items.length; i++) {
	items[i].addEventListener("click", editItem);
	input[i].addEventListener("blur", conferItem);
	input[i].addEventListener("keypress", keypressItem);
}

function editItem() {
	this.className = "edit";
	var input = this.querySelector("input");
	input.focus();
	input.setSelectionRange( 0, input.value.length);
}

function conferItem() {
	this.previousElementSibling.innerHTML = this.value;
	this.parentNode.className = "";
}

function keypressItem() {
	if(event.which === 13) {
		conferItem.call(this);
	}
}


function windowRes(resolution) {
if (resolution.matches) {
	document.getElementById("resolution").className = "";
}
else {
	document.getElementById("resolution").className = "hide";
}
}

var resolution = window.matchMedia("(max-width: 700px)");

windowRes(resolution);
resolution.addListener(windowRes);

var thisObject = {
	thisPractice: function () {
		alert(this);
	}
};

thisObject.thisPractice ();
thisObject.thisPractice.call(window);

