<?php
session_start();
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Circular&display=swap" rel="stylesheet"> 
        <style>
            @import url('https://fonts.googleapis.com/css?family=Source+Code+Pro:200,900');
            @import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap');
:root {
  --text-color: hsla(210, 50%, 85%, 1);
  --shadow-color: hsla(210, 40%, 52%, .4);
  --btn-color: hsl(210, 80%, 42%);
  --bg-color: #141218;
}
button {
  position:relative;
  padding: 10px 20px;
  border: none;
  background: none;
  cursor: pointer;
  margin-left:80%;
  margin-top:5%;
  font-family: "Source Code Pro";
  font-weight: 900;
  text-transform: uppercase;
  font-size: 30px;  
  color: var(--text-color);
  
  background-color: var(--btn-color);
  box-shadow: var(--shadow-color) 2px 2px 22px;
  border-radius: 4px; 
  z-index: 0;  
  overflow: hidden;   
}

button:focus {
  outline-color: transparent;
  box-shadow: var(--btn-color) 2px 2px 22px;
}

.right::after, button::after {
  content: var(--content);
  display: block;
  position: absolute;
  white-space: nowrap;
  padding: 40px 40px;
  pointer-events:none;
}

button::after{
  font-weight: 200;
  top: -30px;
  left: -20px;
} 

.right, .left {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
}
.right {
  left: 66%;
}
.left {
  right: 66%;
}
.right::after {
  top: -30px;
  left: calc(-66% - 20px);
  
  background-color: var(--bg-color);
  color:transparent;
  transition: transform .4s ease-out;
  transform: translate(0, -90%) rotate(0deg)
}

button:hover .right::after {
  transform: translate(0, -47%) rotate(0deg)
}

button .right:hover::after {
  transform: translate(0, -50%) rotate(-7deg)
}

button .left:hover ~ .right::after {
  transform: translate(0, -50%) rotate(7deg)
}

/* bubbles */
button::before {
  content: '';
  pointer-events: none;
  opacity: .6;
  background:
    radial-gradient(circle at 20% 35%,  transparent 0,  transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
    radial-gradient(circle at 75% 44%, transparent 0,  transparent 2px, var(--text-color) 3px, var(--text-color) 4px, transparent 4px),
    radial-gradient(circle at 46% 52%, transparent 0, transparent 4px, var(--text-color) 5px, var(--text-color) 6px, transparent 6px);

  width: 100%;
  height: 300%;
  top: 0;
  left: 0;
  position: absolute;
  animation: bubbles 5s linear infinite both;
}

@keyframes bubbles {
  from {
    transform: translate();
  }
  to {
    transform: translate(0, -66.666%);
  }
}
            
            body{
                font-family: 'Circular', sans-serif;
                background-color: #121212;
            }
            .grid-container {
                width: 67%; /* set the width of the div */
  margin: 0 auto;
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* create two columns */
  grid-auto-rows: minmax(100px, auto); /* set row height */
  grid-gap: 25px; /* add gap between rows and columns */
}
h1{
    color:white;
    font-size: 32px;
    position: relative;
    top:-30px;

}
#AT,#BF,#CT,#NR,#FB,#GP,#HP,#MD,#AG{
  height: 150px;
  width:245px;
  padding: 20px;
  margin-top: 10px;
  overflow: hidden;
  cursor: pointer;
  border-bottom-left-radius: 30px;
  border-top-right-radius: 12px ;
}
.jump{
    filter: blur(5px);
}
#AT{
    background-color: #7358ff;
}
#BF{
    background-color: #056952;
}
#CT{
    background-color: #d84000;
}
#NR{
    background-color: #777777;
}
#FB{
    background-color: #e91429;
}
#GP{
    background-color: #7358ff;
}
#HP{
    background-color: #a56752;
}
#MD{
    background-color: #056952;
}
#AG{
    background-color: #5179a1;
}
.title{
                height: 40px; 
                width:100%;
                margin-top: 8px;
                padding-bottom: 28px;
            }
            .multitype{
                font-size: 2rem;
                padding-left: 40px ;
                color: #fff;
                
            }
            .checkbox {
  width: 64px;
  height: 64px;
  background-color: #121212;
  border: 2px solid #ccc;
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.tick {

  stroke: green;
  stroke-width: 4;
  stroke-dasharray: 70;
  stroke-dashoffset: 70;
  transition: stroke-dashoffset 0.5s ease;
}

.tick.active {

  stroke-dashoffset: 0;
}
.tick1 {

stroke: green;
stroke-width: 4;
stroke-dasharray: 70;
stroke-dashoffset: 70;
transition: stroke-dashoffset 0.5s ease;
}

.tick1.active {

stroke-dashoffset: 0;
}
.tick2 {

stroke: green;
stroke-width: 4;
stroke-dasharray: 70;
stroke-dashoffset: 70;
transition: stroke-dashoffset 0.5s ease;
}

.tick2.active {

stroke-dashoffset: 0;
}
.tick3 {

stroke: green;
stroke-width: 4;
stroke-dasharray: 70;
stroke-dashoffset: 70;
transition: stroke-dashoffset 0.5s ease;
}

.tick3.active {

stroke-dashoffset: 0;
}
.tick4 {

stroke: green;
stroke-width: 4;
stroke-dasharray: 70;
stroke-dashoffset: 70;
transition: stroke-dashoffset 0.5s ease;
}

.tick4.active {

stroke-dashoffset: 0;
}
.tick5 {

stroke: green;
stroke-width: 4;
stroke-dasharray: 70;
stroke-dashoffset: 70;
transition: stroke-dashoffset 0.5s ease;
}

.tick5.active {

stroke-dashoffset: 0;
}
.tick6 {

stroke: green;
stroke-width: 4;
stroke-dasharray: 70;
stroke-dashoffset: 70;
transition: stroke-dashoffset 0.5s ease;
}

.tick6.active {

stroke-dashoffset: 0;
}
.tick7 {

stroke: green;
stroke-width: 4;
stroke-dasharray: 70;
stroke-dashoffset: 70;
transition: stroke-dashoffset 0.5s ease;
}

.tick7.active {

stroke-dashoffset: 0;
}
.tick8 {

stroke: green;
stroke-width: 4;
stroke-dasharray: 70;
stroke-dashoffset: 70;
transition: stroke-dashoffset 0.5s ease;
}

.tick8.active {

stroke-dashoffset: 0;
}
.container {
  display: flex;
  flex-direction: column;
}
        </style>
    </head>
    <body>
        <div class="title">
            <span class="multitype" style="font-family: 'Comfortaa', cursive;"></span>
        </div>
        <div class="grid-container">
          <div class="container">
            <div>
              <div class="checkbox" onclick="toggleCheckbox()">
                <svg viewBox="0 0 64 64">
                  <path class="tick" d="M10 34 L25 49 L54 20"></path>
                </svg>
              </div>
            </div>
            <div id="AT">
            <h1>Automotive & Transport</h1>
            <img src="at-removebg-preview.png" height="160px" style="position: relative;top:-60px;left:107px">
            </div>
          </div>
          <div class="container">
            <div>
              <div class="checkbox" onclick="toggleCheckbox1()">
                <svg viewBox="0 0 64 64">
                  <path class="tick1" d="M10 34 L25 49 L54 20"></path>
                </svg>
              </div>
            </div>
            <div id="BF">
                <h1>Business & Finance</h1>
                <img src="buf-removebg-preview.png" height="160px" style="position: relative;top:-65px;left:105px">   
            </div>
          </div>
          <div class="container">
            <div>
              <div class="checkbox" onclick="toggleCheckbox2()">
                <svg viewBox="0 0 64 64">
                  <path class="tick2" d="M10 34 L25 49 L54 20"></path>
                </svg>
              </div>
            </div>
            <div id="CT">
                <h1>Chemicals & Textiles</h1>
                <img src="chem.png" height="160px" style="position: relative;top:-85px;left:120px">
            </div>
          </div>
          <div class="container">
            <div>
              <div class="checkbox" onclick="toggleCheckbox3()">
                <svg viewBox="0 0 64 64">
                  <path class="tick3" d="M10 34 L25 49 L54 20"></path>
                </svg>
              </div>
            </div>
            <div id="NR">
                <h1>Power plants & Factories</h1>
                <img src="fact.png" height="160px" style="position: relative;top:-105px;left:90px">
            </div>
          </div>
          <div class="container">
            <div>
              <div class="checkbox" onclick="toggleCheckbox4()">
                <svg viewBox="0 0 64 64">
                  <path class="tick4" d="M10 34 L25 49 L54 20"></path>
                </svg>
              </div>
            </div>
            <div id="FB">
                <h1>Foods & Beverages</h1>
                <img src="food.png" height="190px" style="position: relative;top:-80px;left:80px">
            </div>
          </div>
          <div class="container">
            <div>
              <div class="checkbox" onclick="toggleCheckbox5()">
                <svg viewBox="0 0 64 64">
                  <path class="tick5" d="M10 34 L25 49 L54 20"></path>
                </svg>
              </div>
            </div>
            <div id="GP">
                <h1>Government & Public Sector</h1>
                <img src="gov.png" height="120px" style="position: relative;top:-50px;left:94px">
            </div>
          </div>
          <div class="container">
            <div>
              <div class="checkbox" onclick="toggleCheckbox6()">
                <svg viewBox="0 0 64 64">
                  <path class="tick6" d="M10 34 L25 49 L54 20"></path>
                </svg>
              </div>
            </div>
            <div id="HP">
                <h1>Hospital & Pharmaceuticals</h1>
                <img src="hp.png" height="170px" style="position: relative;top:-90px;left:20px">
            </div>
          </div>
          <div class="container">
            <div>
              <div class="checkbox" onclick="toggleCheckbox7()">
                <svg viewBox="0 0 64 64">
                  <path class="tick7" d="M10 34 L25 49 L54 20"></path>
                </svg>
              </div>
            </div>
            <div id="MD">
                <h1>Military & Defense</h1>
                <img src="md.png" height="190px" style="position: relative;top:-110px;left:90px">
            </div>
          </div>
          <div class="container">
            <div>
              <div class="checkbox" onclick="toggleCheckbox8()">
                <svg viewBox="0 0 64 64">
                  <path class="tick8" d="M10 34 L25 49 L54 20"></path>
                </svg>
              </div>
            </div>
            <div id="AG">
                <h1>Agriculture & Cattle</h1>
                <img src="ag.png" height="190px" style="position: relative;top:-100px;left:90px">
            </div>
            </div>
          </div>
          <button style="--content: 'Lets Go!';" onclick="fun()">
            <div class="left"></div>
              Lets Go!
            <div class="right"></div>
          </button>
          
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            const typed=new Typed('.multitype',{
                strings: ['Welcome To Airup','Select your Favourite Categories'],
                typeSpeed:50,
                backSpeed:50,
                backDelay:750,
                loop:true,
                showCursor: false,
            });
            function toggleCheckbox() {
  var tick = document.querySelector('.tick');
  tick.classList.toggle('active');
}
function toggleCheckbox1() {
  var tick = document.querySelector('.tick1');
  tick.classList.toggle('active');
}
function toggleCheckbox2() {
  var tick = document.querySelector('.tick2');
  tick.classList.toggle('active');
}
function toggleCheckbox3() {
  var tick = document.querySelector('.tick3');
  tick.classList.toggle('active');
}
function toggleCheckbox4() {
  var tick = document.querySelector('.tick4');
  tick.classList.toggle('active');
}
function toggleCheckbox5() {
  var tick = document.querySelector('.tick5');
  tick.classList.toggle('active');
}
function toggleCheckbox6() {
  var tick = document.querySelector('.tick6');
  tick.classList.toggle('active');
}
function toggleCheckbox7() {
  var tick = document.querySelector('.tick7');
  tick.classList.toggle('active');
}
function toggleCheckbox8() {
  var tick = document.querySelector('.tick8');
  tick.classList.toggle('active');
}
            
        </script>
    </body>
</html>
<script>
  function fun() {  
window.location = "http://localhost/invest/Investors-Home.php";  
}  
</script>