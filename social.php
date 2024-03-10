<!DOCTYPE html>
<html>
<head>
    <link href="social.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title> SOCIAL </title>

 
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


<div class="row">
  <div class="igcolumn">
    <img src="ig1.jpg" alt="ig" style="width:30%;"height="200%">
  </div>
<div class="t1column">
    <img src="twitter.jpg" alt="twitter" style="width:35%;"height="200%">
  </div>
<div class="tgcolumn">
    <img src="tg.jpg" alt="telegram" style="width:30%;"height="240%">
  </div>
<div class="fbcolumn">
    <img src="fb.jpg" alt="facebook" style="width:31%;"height="200%">
  </div>
<div class="sfcolumn">
    <img src="spotify.jpg" alt="spotify" style="width:35%;"height="200%">
  </div>
<div class="tiktokcolumn">
    <img src="tiktok.jpg" alt="tiktok" style="width:43%;"height="200%">
  </div>
<div class="threadscolumn">
    <img src="threads.jpg" alt="threads" style="width:38%;"height="200%">
  </div>
<div class="planecolumn">
    <img src="airplane.png" alt="plane" style="width:80%;"height="90%">
  </div>
<div class="igicon">
    <img src="igicon.png" alt="igicon" style="width:40%;"height="60%">
  </div>
<div class="tgicon">
    <img src="tgicon.png" alt="tgicon" style="width:58%;"height="60%">
  </div>
<div class="twittericon">
    <img src="twittericon.png" alt="twittericon" style="width:45%;"height="60%">
  </div>
<div class="threadicon">
    <img src="threadicon.png" alt="threadicon" style="width:43%;"height="60%">
  </div>
<div class="fbicon">
    <img src="fbicon.png" alt="fbicon" style="width:43%;"height="60%">
  </div>
<div class="spotifyicon">
    <img src="spotifyicon.png" alt="spotifyicon" style="width:75%;"height="60%">
  </div>
<div class="tiktokicon">
    <img src="tiktokicon.png" alt="tiktokicon" style="width:45%;"height="60%">
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