<!DOCTYPE html>
<html>
<head>
    <link href="achievements.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title> ACHIEVEMENTS </title>


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


  <h1 style="font-size:400%;">ACHIEVEMENTS</h1>


<h4>C.A.T AWARDS</h4>

<div class="CATAWARDS">
     <p> • Most Considerate <br> • Most Sincere <br> • CAT Leadership Award"Corps Commander" <br> 
• CAT Loyalty Award <br> • Duty Award <br> • Service & Cooperation Award <br> 
• Best in Rifle Assembly & Disassembly <br> • Cong. Rida Robes Award</p>
</div>


	<h2>CERTIFICATES</h2>


<div class="Linkedin">
	<p> • Excel Essential Training (Microsoft 365) (2018) <br> PowerPoint Essential Training (Office 365/Microsoft 365) (2020)
<br> • Excel: Tips and Tricks (2018) <br> • Word Tips and Tricks <br> • Word Essential Training (Microsoft 365) (2021)
<br> • PowerPoint Tips and Tricks <br> • Working with Computers and Devices </p>
	
<div class="bottomleft">
	<img src="ribbon.png" alt="ribbon" width:"100" height="300">
</div>

<div class="bottomright">
	<img src="ribbon.png" alt="ribbon" width:"100" height="300">
</div>

<div class="trophy">
	<img src="trophy.png" alt="trophy" width:"110" height="500">
</div>
 

<div class="planecolumn">
    <img src="airplane.png" alt="plane" style="width:80%;"height="100%">
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


