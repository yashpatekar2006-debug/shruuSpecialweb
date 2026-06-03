<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Birthday Surprise</title>

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
min-height:100vh;
overflow:hidden;
background:linear-gradient(135deg,#f7d7c4,#fff1e6,#f5c6d6);
display:flex;
justify-content:center;
align-items:center;
}

.lock,.main{
width:92%;
max-width:440px;
text-align:center;
}

.lock{
background:rgba(255,255,255,.75);
padding:32px;
border-radius:28px;
box-shadow:0 25px 60px rgba(0,0,0,.2);
}

.lock h1{
color:#8b4b4b;
margin-bottom:15px;
}

.lock p{
color:#6b4f4f;
margin-bottom:18px;
}

input{
width:100%;
padding:15px;
border-radius:16px;
border:1px solid #d9a7a7;
outline:none;
font-size:16px;
text-align:center;
}

button{
margin-top:18px;
padding:14px 32px;
border:0;
border-radius:28px;
background:linear-gradient(45deg,#b86b77,#ff8fab);
color:white;
font-size:17px;
font-weight:bold;
cursor:pointer;
box-shadow:0 10px 25px rgba(184,107,119,.38);
}

.main{
display:none;
}

.page{
display:none;
width:100%;
animation:fade .8s ease;
}

.page.active{
display:block;
}

@keyframes fade{
from{
opacity:0;
transform:scale(.95);
}
to{
opacity:1;
transform:scale(1);
}
}

.card,.memories{
background:#fffaf4;
border-radius:20px;
padding:22px;
box-shadow:0 30px 75px rgba(0,0,0,.25);
min-height:560px;
position:relative;
overflow:hidden;
}

.photo{
position:absolute;
width:145px;
height:115px;
object-fit:cover;
border:8px solid white;
box-shadow:0 8px 18px rgba(0,0,0,.25);
}

.p1{
top:35px;
left:35px;
transform:rotate(-5deg);
}

.p2{
top:165px;
right:35px;
transform:rotate(6deg);
}

.p3{
bottom:95px;
left:45px;
transform:rotate(-4deg);
}

.flower{
position:absolute;
right:30px;
top:70px;
font-size:58px;
animation:pulse 2s infinite alternate;
}

@keyframes pulse{
from{
transform:scale(1);
}
to{
transform:scale(1.15) rotate(5deg);
}
}

.title{
position:absolute;
top:240px;
left:35px;
font-size:36px;
color:#8b4b4b;
font-family:cursive;
line-height:1.1;
z-index:5;
}

.msg{
position:absolute;
bottom:35px;
left:25px;
right:25px;
color:#6b4f4f;
font-size:17px;
line-height:1.6;
}

.memories{
height:560px;
overflow-y:auto;
}

.memories h1{
color:#8b4b4b;
font-family:cursive;
font-size:38px;
}

.memories p{
color:#6b4f4f;
margin:10px 0 20px;
}

.gallery{
display:grid;
grid-template-columns:1fr 1fr;
gap:15px;
}

.memory-card{
background:white;
border-radius:20px;
padding:8px;
box-shadow:0 10px 25px rgba(0,0,0,.16);
transform:rotate(var(--r));
}

.memory-card img{
width:100%;
height:165px;
object-fit:cover;
border-radius:15px;
}

.memory-card span{
display:block;
color:#8b4b4b;
font-size:14px;
padding:8px;
line-height:1.4;
}

.memory-card:nth-child(odd){
--r:-2deg;
}

.memory-card:nth-child(even){
--r:2deg;
}

.final{
min-height:560px;
height:560px;
border-radius:25px;
padding:20px;
position:relative;
overflow:hidden;
background:linear-gradient(135deg,#f7e0cf,#ffe8ef,#f8d6dc);
box-shadow:0 30px 75px rgba(0,0,0,.25);
}

.letter{
height:440px;
overflow-y:auto;
background:#d8c7a8;
padding:28px 24px 45px;
box-shadow:0 15px 35px rgba(0,0,0,.25);
color:#3d2b22;
text-align:left;
font-family:cursive;
border-radius:18px;
}

.letter h1{
font-size:28px;
text-align:center;
margin-bottom:18px;
color:#2d211b;
font-family:cursive;
}

.letter p{
font-size:17px;
line-height:1.55;
margin-bottom:14px;
}

.signature{
text-align:center;
font-size:22px;
margin-top:18px;
font-weight:bold;
}

.replay-btn{
position:absolute;
bottom:14px;
left:50%;
transform:translateX(-50%);
z-index:10;
margin-top:0;
}

.heart{
position:absolute;
bottom:-30px;
font-size:24px;
animation:float 5s linear infinite;
}

@keyframes float{
to{
transform:translateY(-110vh);
opacity:0;
}
}

.error{
color:red;
margin-top:12px;
font-size:14px;
}
</style>
</head>

<body>

<div class="lock" id="lock">
<h1>Secret Birthday Gift 🔐</h1>
<p>Enter password to open your surprise</p>

<input type="password" id="pass" placeholder="Enter password">

<button onclick="checkPass()">Open Gift 🎁</button>

<div class="error" id="error"></div>
</div>

<div class="main" id="main">

<div class="page active" id="page1">

<div class="card">

<img src="shruuu2.jpeg" class="photo p1">
<img src="shruu3.jpeg" class="photo p2">
<img src="shruu4.jpeg" class="photo p3">

<div class="flower">🌸</div>

<div class="title">Happy<br>Birthday</div>

<div class="msg">
Dear Shruu 💖<br>
You are very special to me. May your birthday be filled with love,
smiles and beautiful memories ✨
</div>

</div>

<button onclick="nextPage('page2')">Open Memories 📸</button>

</div>

<div class="page" id="page2">

<div class="memories">

<h1>Special Gallery ✨</h1>

<p>Photos with small messages, because every memory is special 💖</p>

<div class="gallery">

<div class="memory-card">
<img src="shruuu2.jpeg">
<span>My favourite smile 💕</span>
</div>

<div class="memory-card">
<img src="memory 1.jpeg">
<span>This moment is always special ✨</span>
</div>

<div class="memory-card">
<img src="memory 3.png">
<span>Best memory with you ❤️</span>
</div>

<div class="memory-card">
<img src="shruu3.jpeg">
<span>You make normal days beautiful 🌸</span>
</div>

<div class="memory-card">
<img src="shruu4.jpeg">
<span>Forever favourite picture 📸</span>
</div>

<div class="memory-card">
<img src="memmory tog.jpeg">
<span>More memories together soon 🫶</span>
</div>

<div class="memory-card">
<img src="shruu6.jpeg">
<span>Always keep smiling 💫</span>
</div>

<div class="memory-card">
<img src="shruu5.jpeg">
<span>Always and forever 💖</span>
</div>

</div>
</div>

<button onclick="nextPage('page3')">Open Last Letter 💌</button>

</div>

<div class="page" id="page3">

<div class="final">

<div class="letter">

<h1>To The One Who Became Special ❤️</h1>

<p>
I still remember the way some people enter life normally,
but slowly become a very special part of every day.
</p>

<p>
You are one of those rare people. Your smile, your talks,
and your presence make my normal days beautiful.
</p>

<p>
I do not know how to explain everything perfectly,
but you are really special for me. I just want you to stay happy,
keep smiling, and achieve everything you dream of.
</p>

<p>
On your birthday, I only wish that your life becomes full of love,
success, peace, and beautiful memories.
</p>

<div class="signature">
Happy Birthday Shruu 🎉<br>
From : Yash_01 ❤️
</div>

</div>

<button class="replay-btn" onclick="restartSite()">Replay Magic ✨</button>

</div>
</div>

</div>

<audio autoplay loop>
<source src="song.mp3" type="audio/mpeg">
</audio>

<script>
let heartStarted=false;

function checkPass(){

let p=document.getElementById("pass").value;

if(p==="shruu26"){

document.getElementById("lock").style.display="none";
document.getElementById("main").style.display="block";

nextPage("page1");

if(!heartStarted){
startHearts();
heartStarted=true;
}

}
else{
document.getElementById("error").innerHTML="Wrong password ❌";
}

}

function nextPage(id){

document.querySelectorAll(".page").forEach(p=>{
p.classList.remove("active");
});

document.getElementById(id).classList.add("active");

}

function restartSite(){

nextPage("page1");

}

function startHearts(){

setInterval(()=>{

let h=document.createElement("div");

h.className="heart";

h.innerHTML=["💖","💕","🌸","✨","❤️","🎉"][Math.floor(Math.random()*6)];

h.style.left=Math.random()*100+"vw";

h.style.animationDuration=(3+Math.random()*3)+"s";

document.body.appendChild(h);

setTimeout(()=>{
h.remove();
},6000);

},330);

}
</script>

</body>
</html>