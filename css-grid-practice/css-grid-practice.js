//* Modal wrap
//* 	Trigger
//*		Clearfix
//* 			section-header
//*			align-center
//*	Modal
//*		Modal Content
//*			Close-button
//*			H1


var modalWrap = document.getElementsByClassName("modal-wrap");
var closeButton = document.getElementsByClassName("close-button");

for (var i = 0; i < modalWrap.length; i++) {


	modalWrap[i].addEventListener("dblclick", clickModal);
	closeButton[i].addEventListener("click", clickButton);
}

function clickModal() {
	this.childNodes[1].nextElementSibling.classList.toggle("show-modal");
}

function clickButton() {
	this.parentElement.parentElement.classList.toggle("show-modal");
}


