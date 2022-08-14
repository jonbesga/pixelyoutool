var numHair = 32
var numHead = 1
var numBeard = 12
var numHeadAc = 11
var numArms = 15
var numTorso = 20
var numLegs = 21

var headArray = {};
var hairArray = {};
var beardArray = {};
var headAcArray = {};
var armsArray = {};
var torsoArray = {};
var legsArray = {};

var headPos = [0,0];
var hairPos = [0,0];
var beardPos = [0,0];
var headAcPos = [0,0];
var armsPos = [0,0];
var torsoPos = [0,0];
var legsPos = [0,0];

var headLoaded = 0;
var hairLoaded = 0;
var beardLoaded = 0;
var headAcLoaded = 0;
var armsLoaded = 0;
var torsoLoaded = 0;
var legsLoaded = 0;

var actualHead = 0;
var actualHair = 0;
var actualHeadAc = 0;
var actualBeard = 0;
var actualArms = 0;	
var actualTorso = 0;	
var actualLegs = 0;

var canvas = document.getElementById("canvas");
var context = canvas.getContext("2d");

var headReady = false;
var hairReady = false;
var beardReady = false;
var headAcReady = false;
var armsReady = false;
var torsoReady = false;
var legsReady = false;

var loadedHeadCallback = function () {
	headLoaded++;
    if (headLoaded == numHead) {
    	headReady = true;
    	addEventListener("load", drawAll, false);
    }
};
var loadedHairCallback = function () {
	hairLoaded++;
    if (hairLoaded == numHair) {
        hairReady = true;
        addEventListener("load", drawAll, false);
    }
};
var loadedBeardCallback = function () {
	beardLoaded++;
    if (beardLoaded == numBeard) {
        beardLoaded = true;
        addEventListener("load", drawAll, false);
    }
};
var loadedHeadAcCallback = function () {
	headAcLoaded++;
    if (headAcLoaded == numHeadAc) {
        headAcLoaded = true;
        addEventListener("load", drawAll, false);
    }
};
var loadedArmsCallback = function () {
	armsLoaded++;
    if (armsLoaded == numArms) {
        armsReady = true;
        addEventListener("load", drawAll, false);
    }
};
var loadedTorsoCallback = function () {
	torsoLoaded++;
    if (torsoLoaded == numTorso) {
        torsoReady = true;
        addEventListener("load", drawAll, false);
    }
};
var loadedLegsCallback = function () {
	legsLoaded++;
    if (legsLoaded == numLegs) {
        legsReady = true;
        addEventListener("load", drawAll, false);
    }
};
var backgroundColor;

loadHeadImages();
loadHairImages();
loadBeardImages();
loadHeadAcImages();
loadArmsImages();
loadTorsoImages();
loadLegsImages();
makeRandom();
changeBackgroundColor();

total = numLegs*numHair*numHead*numArms*numTorso*numBeard*numHeadAc;
document.getElementById("totalPieces").innerHTML = "<h2>WITH <i>" + total + "</i> DIFFERENT COMBINATIONS!</h2>";
function fileName(){
	var name = actualHair;
	return name;
}

function makeRandom(){
	var j = Math.floor(Math.random()*numHair);
	var k = Math.floor(Math.random()*numBeard);
	var l = Math.floor(Math.random()*numHeadAc);
	var m = Math.floor(Math.random()*numArms);
	var n = Math.floor(Math.random()*numTorso);
	var o = Math.floor(Math.random()*numLegs);
	onClickApplyConfig(0,j,k,l,m,n,o);
}
function UpdateText(){
	//document.getElementById("head").value= actualHead;
	document.getElementById("hair").value= actualHair;
	document.getElementById("beard").value= actualBeard;
	document.getElementById("headac").value= actualHeadAc;
	document.getElementById("arms").value= actualArms;
	document.getElementById("torso").value= actualTorso;
	document.getElementById("legs").value= actualLegs;
	
}
function applyConfig(){
	//actualHead = document.getElementById("head").value;
	actualHair = document.getElementById("hair").value;
	actualBeard = document.getElementById("beard").value;
	actualHeadAc = document.getElementById("headac").value;
	actualArms = document.getElementById("arms").value;
	actualTorso = document.getElementById("torso").value;
	actualLegs = document.getElementById("legs").value;
	drawAll();
}
function onClickApplyConfig(i,j,k,l,m,n,o){
	actualHead = i;
	actualHair = j;
	actualBeard = k;
	actualHeadAc = l;
	actualArms = m;
	actualTorso = n;
	actualLegs = o;
	drawAll();
}

function onDownload() {
	var data = canvas.toDataURL("image/png");
	document.getElementById("downloadButton").href = data;
	document.getElementById("downloadButton").download = 
	String(actualHair) + String(actualBeard) + String(actualHeadAc) +
	String(actualArms) + String(actualTorso) + String(actualLegs);
}
function loadHeadImages(){
  	for (var i = 0; i < numHead; i++){
  		headArray[i] = new Image();
  		headArray[i].src = "images/head/" + i + ".png"
  		headArray[i].addEventListener("load", loadedHeadCallback, false);
  	}
}
function loadHairImages(){
  	for (var i = 0; i < numHair; i++){
  		hairArray[i] = new Image();
  		hairArray[i].src = "images/hair/" + i + ".png"
  		hairArray[i].addEventListener("load", loadedHairCallback, false);
  	}
}
function loadBeardImages(){
  	for (var i = 0; i < numBeard; i++){
  		beardArray[i] = new Image();
  		beardArray[i].src = "images/beard/" + i + ".png"
  		beardArray[i].addEventListener("load", loadedBeardCallback, false);
  	}
}
function loadHeadAcImages(){
  	for (var i = 0; i < numHeadAc; i++){
  		headAcArray[i] = new Image();
  		headAcArray[i].src = "images/headac/" + i + ".png"
  		headAcArray[i].addEventListener("load", loadedHeadCallback, false);
  	}
}
function loadArmsImages(){
  	for (var i = 0; i < numArms; i++){
  		armsArray[i] = new Image();
  		armsArray[i].src = "images/arms/" + i + ".png"
  		armsArray[i].addEventListener("load", loadedArmsCallback, false);
  	}
}
function loadTorsoImages(){
  	for (var i = 0; i < numTorso; i++){
  		torsoArray[i] = new Image();
  		torsoArray[i].src = "images/torso/" + i + ".png"
  		torsoArray[i].addEventListener("load", loadedTorsoCallback, false);
  	}
}
function loadLegsImages(){
  	for (var i = 0; i < numLegs; i++){
  		legsArray[i] = new Image();
  		legsArray[i].src = "images/legs/" + i + ".png"
  		legsArray[i].addEventListener("load", loadedLegsCallback, false);
  	}
}
function changeBackgroundColor () {
	backgroundColor = document.getElementById('backColor').value;
	drawAll();
}
function drawAll() {
	if(headReady && hairReady && armsReady && torsoReady && legsReady){
		UpdateText();
		canvas.width = canvas.width;
		context.fillStyle = backgroundColor;
		context.fillRect(0,0,canvas.width,canvas.height);
		context.drawImage(headArray[actualHead], headPos[0], headPos[1]);
		context.drawImage(legsArray[actualLegs], legsPos[0], legsPos[1]);
		context.drawImage(torsoArray[actualTorso], torsoPos[0], torsoPos[1]);
		context.drawImage(armsArray[actualArms], armsPos[0], armsPos[1]);
		context.drawImage(hairArray[actualHair], hairPos[0], hairPos[1]);
		context.drawImage(beardArray[actualBeard], beardPos[0], beardPos[1]);
		context.drawImage(headAcArray[actualHeadAc], headAcPos[0], headAcPos[1]);
		
		var dataURL = canvas.toDataURL();
		document.getElementById('canvasImg').src = dataURL;
	}
}
function previousHair () {
	actualHair--;
	if(actualHair < 0){
		actualHair = numHair-1;
	}
	drawAll();
}
function nextHair() {
	actualHair++;
	if(actualHair > (numHair-1)){
		actualHair = 0;
	}
	drawAll();
}
function previousBeard () {
	actualBeard--;
	if(actualBeard < 0){
		actualBeard = numBeard-1;
	}
	drawAll();
}
function nextBeard() {
	actualBeard++;
	if(actualBeard > (numBeard-1)){
		actualBeard = 0;
	}
	drawAll();
}
function previousHeadAc () {
	actualHeadAc--;
	if(actualHeadAc < 0){
		actualHeadAc = numHeadAc-1;
	}
	drawAll();
}
function nextHeadAc() {
	actualHeadAc++;
	if(actualHeadAc > (numHeadAc-1)){
		actualHeadAc = 0;
	}
	drawAll();
}
function previousArms() {
	actualArms--;
	if(actualArms < 0){
		actualArms = numArms-1;
	}
	drawAll();
}
function nextArms() {
	actualArms++;
	if(actualArms > (numArms-1)){
		actualArms = 0;
	}
	drawAll();
}
function previousTorso() {
	actualTorso--;
	if(actualTorso < 0){
		actualTorso = numTorso-1;
	}
	drawAll();
}
function nextTorso() {
	actualTorso++;
	if(actualTorso > (numTorso-1)){
		actualTorso = 0;
	}
	drawAll();
}
function previousLegs() {
	actualLegs--;
	if(actualLegs < 0){
		actualLegs = numLegs-1;
	}
	drawAll();
}
function nextLegs() {
	actualLegs++;
	if(actualLegs > (numLegs-1)){
		actualLegs = 0;
	}
	drawAll();
}