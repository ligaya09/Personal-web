<!DOCTYPE html>
<html>
<head>
    <link href="works.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title> WORKS </title>

 
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
  	<p style="font-family: Brush Script MT, Brush Script Std, cursive;font-size:110px;"><b>ASPIRING</b> <span style="font-family:perpetua,serif;font-size:90px"> PROFESSIONAL DEVELOPER</span></p>
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

  </div> 
<h3> WEBSITES <h3>
<div class="row">
<div class="inscolumn">
    <img src="INSTAPET.png" alt="insta" style="width:50%;"height="200%">
</div>

<div class="msucolumn">
    <img src="MSU.png" alt="msu" style="width:50%;"height="200%">
  </div>

<div class="attincolumn">
    <img src="attin.jpg" alt="attin" style="width:50%;"height="200%">
</div>
  <h3> MOBILE APPS <h3>
<div class="synergycolumn">
    <img src="SYNERGY.png" alt="synergy" style="width:50%;"height="240%">
  </div>

<div class="revealmecolumn">
    <img src="REVEALME.png" alt="revealme" style="width:50%;"height="200%">
  </div>
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

</body>
</head>
</html>