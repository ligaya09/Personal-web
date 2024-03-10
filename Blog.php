<!DOCTYPE html>
<html>
<head>
    <link href="Blog.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title>BLOG</title>
</head>
<body>
<div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>

<div class="footer">
    <p style="font-family: Brush Script MT, Brush Script Std, cursive; font-size: 110px;"><b>ASPIRING</b> <span style="font-family:perpetua,serif;font-size:90px"> PROFESSIONAL DEVELOPER</span></p>
</div>

<div class="topnav">
  <a href="index.php">HOME</a>
  <a href="ABOUTME.php">ABOUT ME</a>
  <a href="Blog.php">BLOG</a>
  <a href="contact.php">CONTACT INFO</a>
  <a href="achievements.php">ACHIEVEMENTS</a>
  <a href="social.php">SOCIAL</a>
  <a href="works.php">WORKS</a>
      
  
</div>


<div class="WALL">
  <img src="bg.png" alt="WALL" style="width: 100%;height: 100%;"></div>

<article>
	<h1 style="font-size:180%;text-align: center;">EXPLORING THE ELECTRIFYING UNIVERSE  OF IT THROUGH MY OWN EYES</h1><p style="font-size:150%;margin-left: 15px;"><b style="
"> Being an IT student is an exhilarating journey filled  with challenges, 
victories, and endless possibilities. Embrace the digital odyssey,  sharpen your problem-solving skills,  
and cultivate a mindset of continuous learning.  As you navigate the dynamic landscape of IT, remember that  each line of code you write and 
every problem you solve brings you closer to becoming a  proficient IT professional. Enjoy the ride!</b></p>
  <h2 style="font-size:160%;">~ LIGAYA </h2>
</article>

<div class="planecolumn">
    <img src="airplane.png" alt="plane" style="width:25%;"height="70%">
</div>
</body>

<script>

const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle");

const colors = [
  "#ffb56b",
  "#fdaf69",
  "#f89d63",
  "#f59761",
  "#ef865e",
  "#ec805d",
  "#e36e5c",
  "#df685c",
  "#d5585c",
  "#d1525c",
  "#c5415d",
  "#c03b5d",
  "#b22c5e",
  "#ac265e",
  "#9c155f",
  "#950f5f",
  "#830060",
  "#7c0060",
  "#680060",
  "#60005f",
  "#48005f",
  "#3d005e"
];

circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  circle.style.backgroundColor = colors[index % colors.length];
});

window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;
  
});

function animateCircles() {
  let x = coords.x;
  let y = coords.y;
  
  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";
    
    circle.style.scale = (circles.length - index) / circles.length;
    circle.x = x;
    circle.y = y;

    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.5;
    y += (nextCircle.y - y) * 0.5;
  });
 
  requestAnimationFrame(animateCircles);
}

animateCircles();

</script>

</head>
</html>